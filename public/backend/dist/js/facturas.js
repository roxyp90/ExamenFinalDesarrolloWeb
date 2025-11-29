let editingFactura = null;

document.addEventListener("DOMContentLoaded", function () {
    // Actualizar estadísticas iniciales
    updateStatistics();

    // Funcionalidad para agregar/editar factura
    const btnGenerarFactura = document.querySelector(
        '#modalNuevaFactura .btn[style*="background-color: #688B3E"]'
    );

    btnGenerarFactura.addEventListener("click", function () {
        const cliente = document.getElementById("clienteFactura").value;
        const fecha = document.getElementById("fechaFactura").value;
        const metodoPago = document.getElementById("metodoPago").value;
        const total = document.getElementById("totalFactura").value;

        if (!cliente || !fecha) {
            alert("Por favor complete todos los campos obligatorios");
            return;
        }

        if (editingFactura) {
            // Modo edición
            const cells = editingFactura.querySelectorAll("td");
            cells[1].textContent = cliente;
            cells[2].textContent = fecha;
            cells[3].textContent = total;
            // Estado se mantiene igual

            editingFactura = null;
            btnGenerarFactura.textContent = "Generar Factura";
            document.getElementById("modalNuevaFacturaLabel").textContent =
                "Crear Nueva Factura";
        } else {
            // Modo agregar
            const tableBody = document.querySelector("#facturasTable tbody");
            const newRow = document.createElement("tr");

            // Generar número de factura automático
            const existingRows = tableBody.querySelectorAll("tr");
            const nextNumber = existingRows.length + 1;
            const invoiceNumber = `001-${String(nextNumber).padStart(3, "0")}`;

            newRow.innerHTML = `
                <td>${invoiceNumber}</td>
                <td>${cliente}</td>
                <td>${fecha}</td>
                <td>${total}</td>
                <td><span class="badge" style="background-color: #E8C547; color: #4A2E14; padding: 0.4rem 0.8rem; border-radius: 4px;">Pendiente</span></td>
                <td>
                    <button class="btn btn-sm btn-editar-factura" style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                    <button class="btn btn-sm btn-eliminar-factura" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                    <button class="btn btn-sm" style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Imprimir</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            alert("Factura generada exitosamente");
        }

        // Actualizar estadísticas después de agregar/editar
        updateStatistics();

        // Limpiar formulario y cerrar modal
        document.getElementById("clienteFactura").selectedIndex = 0;
        document.getElementById("fechaFactura").value = '{{ date("Y-m-d") }}';
        document.getElementById("metodoPago").selectedIndex = 0;
        document.getElementById("totalFactura").value = "$0.00";

        // Limpiar productos
        const productosBody = document.getElementById("productosFactura");
        productosBody.innerHTML = `
            <tr>
                <td>
                    <select class="form-control form-control-sm" style="border: 1px solid #E8C547; border-radius: 4px;">
                        <option>Arroz Premium</option>
                        <option>Leche Entera</option>
                        <option>Pan Integral</option>
                    </select>
                </td>
                <td><input type="number" class="form-control form-control-sm" value="1" min="1" style="border: 1px solid #E8C547; border-radius: 4px;"></td>
                <td>$2.50</td>
                <td>$2.50</td>
                <td><button class="btn btn-sm" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px;">×</button></td>
            </tr>
        `;

        // Cerrar modal
        $("#modalNuevaFactura").modal("hide");
    });

    // Funcionalidad para editar factura
    document.addEventListener("click", function (e) {
        if (
            e.target.classList.contains("btn-editar-factura") ||
            e.target.textContent === "Editar"
        ) {
            const row = e.target.closest("tr");
            editingFactura = row;

            // Extraer datos actuales de la fila
            const cells = row.querySelectorAll("td");
            const cliente = cells[1].textContent;
            const fecha = cells[2].textContent;
            const total = cells[3].textContent;

            // Llenar el modal con los datos actuales
            document.getElementById("clienteFactura").value = cliente;
            document.getElementById("fechaFactura").value = fecha;
            document.getElementById("totalFactura").value = total;

            // Cambiar el título del modal y el botón
            document.getElementById("modalNuevaFacturaLabel").textContent =
                "Editar Factura";
            btnGenerarFactura.textContent = "Actualizar Factura";

            // Abrir modal
            $("#modalNuevaFactura").modal("show");
        }
    });

    // Funcionalidad para eliminar factura
    document.addEventListener("click", function (e) {
        if (
            e.target.classList.contains("btn-eliminar-factura") ||
            e.target.textContent === "Eliminar"
        ) {
            if (confirm("¿Está seguro de que desea eliminar esta factura?")) {
                const row = e.target.closest("tr");
                row.remove();
                alert("Factura eliminada exitosamente");
                // Actualizar estadísticas después de eliminar
                updateStatistics();
            }
        }
    });

    // Funcionalidad para agregar productos en el modal
    document
        .getElementById("agregarProductoFactura")
        .addEventListener("click", function () {
            const productosBody = document.getElementById("productosFactura");
            const newRow = document.createElement("tr");

            newRow.innerHTML = `
            <td>
                <select class="form-control form-control-sm" style="border: 1px solid #E8C547; border-radius: 4px;">
                    <option>Arroz Premium</option>
                    <option>Leche Entera</option>
                    <option>Pan Integral</option>
                </select>
            </td>
            <td><input type="number" class="form-control form-control-sm" value="1" min="1" style="border: 1px solid #E8C547; border-radius: 4px;"></td>
            <td>$2.50</td>
            <td>$2.50</td>
            <td><button class="btn btn-sm" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px;">×</button></td>
        `;

            productosBody.appendChild(newRow);
        });

    // Funcionalidad para calcular total
    document.addEventListener("input", function (e) {
        if (
            e.target.type === "number" &&
            e.target.closest("#productosFactura")
        ) {
            updateTotal();
        }
    });

    document.addEventListener("change", function (e) {
        if (
            e.target.tagName === "SELECT" &&
            e.target.closest("#productosFactura")
        ) {
            updateTotal();
        }
    });

    // Eliminar fila de producto
    document.addEventListener("click", function (e) {
        if (e.target.textContent === "×") {
            e.target.closest("tr").remove();
            updateTotal();
        }
    });

    function updateTotal() {
        const rows = document.querySelectorAll("#productosFactura tr");
        let total = 0;

        rows.forEach((row) => {
            const quantity =
                parseInt(row.querySelector('input[type="number"]').value) || 0;
            const price =
                parseFloat(
                    row
                        .querySelector("td:nth-child(3)")
                        .textContent.replace("$", "")
                ) || 0;
            total += quantity * price;
        });

        document.getElementById("totalFactura").value = `$${total.toFixed(2)}`;
    }

    function updateStatistics() {
        const rows = document.querySelectorAll("#facturasTable tbody tr");
        let totalInvoices = rows.length;
        let totalIncome = 0;
        let pendingInvoices = 0;
        let overdueInvoices = 0;

        rows.forEach((row) => {
            const cells = row.querySelectorAll("td");
            const status = cells[4].textContent.trim();
            const total =
                parseFloat(cells[3].textContent.replace("$", "")) || 0;

            if (status === "Pagada") {
                totalIncome += total;
            } else if (status === "Pendiente") {
                pendingInvoices++;
            } else if (status === "Vencida") {
                overdueInvoices++;
            }
        });

        // Update the statistics boxes
        document.querySelector(".small-box .inner h3").textContent =
            totalInvoices;
        document.querySelectorAll(
            ".small-box .inner h3"
        )[1].textContent = `$${totalIncome.toFixed(2)}`;
        document.querySelectorAll(".small-box .inner h3")[2].textContent =
            pendingInvoices;
        document.querySelectorAll(".small-box .inner h3")[3].textContent =
            overdueInvoices;
    }
});
