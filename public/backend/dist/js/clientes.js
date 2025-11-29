let editingRow = null;

document.addEventListener("DOMContentLoaded", function () {
    // Funcionalidad para agregar/editar cliente
    const btnGuardarCliente = document.querySelector(
        '#modalAgregarCliente .btn[style*="background-color: #688B3E"]'
    );

    btnGuardarCliente.addEventListener("click", function () {
        const nombre = document.getElementById("nombreCliente").value;
        const email = document.getElementById("emailCliente").value;
        const telefono = document.getElementById("telefonoCliente").value;
        const direccion = document.getElementById("direccionCliente").value;

        if (!nombre || !email) {
            alert("Por favor complete los campos obligatorios: Nombre y Email");
            return;
        }

        if (editingRow) {
            // Modo edición
            editingRow.cells[1].textContent = nombre;
            editingRow.cells[2].textContent = email;
            editingRow.cells[3].textContent = telefono || "-";
            editingRow.cells[4].textContent = direccion || "-";
            editingRow = null;
            btnGuardarCliente.textContent = "Guardar Cliente";
            document.getElementById("modalAgregarClienteLabel").textContent =
                "Agregar Nuevo Cliente";
        } else {
            // Modo agregar
            const tableBody = document.querySelector("#clientesTable tbody");
            const rows = tableBody.querySelectorAll("tr");
            const nextId = rows.length + 1;

            // Crear nueva fila de cliente
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td>${nextId}</td>
                <td>${nombre}</td>
                <td>${email}</td>
                <td>${telefono || "-"}</td>
                <td>${direccion || "-"}</td>
                <td><span class="badge" style="background-color: #688B3E; color: white; padding: 0.4rem 0.8rem; border-radius: 4px;">Activo</span></td>
                <td>
                    <button class="btn btn-sm btn-editar" style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                    <button class="btn btn-sm btn-eliminar" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            alert("Cliente agregado exitosamente");
        }

        // Limpiar formulario y cerrar modal
        document.getElementById("nombreCliente").value = "";
        document.getElementById("emailCliente").value = "";
        document.getElementById("telefonoCliente").value = "";
        document.getElementById("direccionCliente").value = "";

        // Cerrar modal
        $("#modalAgregarCliente").modal("hide");
    });

    // Funcionalidad para editar cliente
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("btn-editar")) {
            const row = e.target.closest("tr");
            editingRow = row;

            // Llenar el modal con los datos actuales
            document.getElementById("nombreCliente").value =
                row.cells[1].textContent;
            document.getElementById("emailCliente").value =
                row.cells[2].textContent;
            document.getElementById("telefonoCliente").value =
                row.cells[3].textContent !== "-"
                    ? row.cells[3].textContent
                    : "";
            document.getElementById("direccionCliente").value =
                row.cells[4].textContent !== "-"
                    ? row.cells[4].textContent
                    : "";

            // Cambiar el título del modal y el botón
            document.getElementById("modalAgregarClienteLabel").textContent =
                "Editar Cliente";
            btnGuardarCliente.textContent = "Actualizar Cliente";

            // Abrir modal
            $("#modalAgregarCliente").modal("show");
        }
    });

    // Funcionalidad para eliminar cliente
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("btn-eliminar")) {
            if (confirm("¿Está seguro de que desea eliminar este cliente?")) {
                const row = e.target.closest("tr");
                row.remove();

                // Reordenar IDs después de eliminar
                const tableBody = document.querySelector(
                    "#clientesTable tbody"
                );
                const rows = tableBody.querySelectorAll("tr");
                rows.forEach((row, index) => {
                    row.cells[0].textContent = index + 1;
                });

                alert("Cliente eliminado exitosamente");
            }
        }
    });
});
