let editingProveedor = null;

// Función para actualizar estadísticas
function updateStatistics() {
    const supplierCards = document.querySelectorAll(".card-widget.widget-user");
    let totalProveedores = supplierCards.length;
    let proveedoresActivos = 0;
    let totalProductos = 0;
    let totalCalidad = 0;
    let calidadCount = 0;

    supplierCards.forEach((card) => {
        const productosText =
            card.querySelector(".description-text").textContent;
        if (productosText === "PRODUCTOS") {
            const productosValue =
                parseInt(
                    card.querySelector(".description-header").textContent
                ) || 0;
            totalProductos += productosValue;
        }

        const calidadText =
            card.querySelectorAll(".description-text")[1].textContent;
        if (calidadText === "CALIDAD") {
            const calidadValue =
                parseFloat(
                    card
                        .querySelectorAll(".description-header")[1]
                        .textContent.replace("+", "")
                        .replace("%", "")
                ) || 0;
            totalCalidad += calidadValue;
            calidadCount++;
        }

        const estadoText =
            card.querySelectorAll(".description-text")[2].textContent;
        if (estadoText === "ESTADO") {
            const estadoValue = card.querySelectorAll(".description-header")[2]
                .textContent;
            if (estadoValue === "ACTIVO") {
                proveedoresActivos++;
            }
        }
    });

    const calidadPromedio =
        calidadCount > 0 ? (totalCalidad / calidadCount).toFixed(1) : 0;

    // Actualizar cajas de estadísticas
    document.querySelector(".small-box .inner h3").textContent =
        totalProveedores;
    document.querySelectorAll(".small-box .inner h3")[1].textContent =
        proveedoresActivos;
    document.querySelectorAll(".small-box .inner h3")[2].textContent =
        totalProductos;
    document.querySelectorAll(
        ".small-box .inner h3"
    )[3].textContent = `+${calidadPromedio}%`;
}

// Gráfico simple de proveedores (ejemplo)
document.addEventListener("DOMContentLoaded", function () {
    // Aquí iría el código para inicializar un gráfico con Chart.js
    console.log("Gráfico de proveedores cargado");

    // Inicializar estadísticas
    updateStatistics();

    // Funcionalidad para agregar/editar proveedor
    const btnGuardarProveedor = document.querySelector(
        '#modalAgregarProveedor .btn[style*="background-color: #688B3E"]'
    );
    const modalAgregarProveedor = document.getElementById(
        "modalAgregarProveedor"
    );

    btnGuardarProveedor.addEventListener("click", function () {
        const nombre = document.getElementById("nombreProveedor").value;
        const contacto = document.getElementById("contactoProveedor").value;
        const email = document.getElementById("emailProveedor").value;
        const telefono = document.getElementById("telefonoProveedor").value;
        const direccion = document.getElementById("direccionProveedor").value;
        const especialidad = document.getElementById(
            "especialidadProveedor"
        ).value;

        if (!nombre || !contacto || !email) {
            alert(
                "Por favor complete los campos obligatorios: Nombre, Contacto y Email"
            );
            return;
        }

        if (editingProveedor) {
            // Modo edición
            const header = editingProveedor.querySelector(
                ".widget-user-header"
            );
            const username = header.querySelector(".widget-user-username");
            const desc = header.querySelector(".widget-user-desc");

            username.textContent = nombre;
            desc.textContent = especialidad;

            editingProveedor = null;
            btnGuardarProveedor.textContent = "Guardar Proveedor";
            document.getElementById("modalAgregarProveedorLabel").textContent =
                "Agregar Nuevo Proveedor";
            alert("Proveedor actualizado exitosamente");
        } else {
            // Modo agregar
            const container = document.querySelector(".card-body .row");
            const newCard = document.createElement("div");
            newCard.className = "col-md-6";
            newCard.innerHTML = `
                <div class="card card-widget widget-user" style="border-top: 3px solid #688B3E;">
                    <div class="widget-user-header" style="background-color: #688B3E;">
                        <h3 class="widget-user-username" style="color: white;">${nombre}</h3>
                        <h5 class="widget-user-desc" style="color: white;">${especialidad}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{asset('backend/dist/img/user1-128x128.jpg')}}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header" style="color: #D97A26;">0</h5>
                                    <span class="description-text" style="color: #4A2E14;">PRODUCTOS</span>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header" style="color: #688B3E;">+0%</h5>
                                    <span class="description-text" style="color: #4A2E14;">CALIDAD</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header" style="color: #688B3E;">ACTIVO</h5>
                                    <span class="description-text" style="color: #4A2E14;">ESTADO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="background-color: white; border-top: 1px solid #e8e8e8;">
                        <button class="btn btn-sm" style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Ver Productos</button>
                        <button class="btn btn-sm btn-editar-proveedor" style="background-color: #E8C547; color: #4A2E14; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                        <button class="btn btn-sm btn-eliminar-proveedor" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                    </div>
                </div>
            `;

            container.appendChild(newCard);
            alert("Proveedor agregado exitosamente");
        }

        // Actualizar estadísticas después de agregar o editar
        updateStatistics();

        // Limpiar formulario y cerrar modal
        document.getElementById("nombreProveedor").value = "";
        document.getElementById("contactoProveedor").value = "";
        document.getElementById("emailProveedor").value = "";
        document.getElementById("telefonoProveedor").value = "";
        document.getElementById("direccionProveedor").value = "";
        document.getElementById("especialidadProveedor").selectedIndex = 0;

        // Cerrar modal
        $("#modalAgregarProveedor").modal("hide");
    });

    // Funcionalidad para editar proveedor
    document.addEventListener("click", function (e) {
        if (
            e.target.classList.contains("btn-editar-proveedor") ||
            e.target.textContent === "Editar"
        ) {
            const card = e.target.closest(".card-widget");
            editingProveedor = card;

            // Extraer datos actuales
            const header = card.querySelector(".widget-user-header");
            const nombre = header.querySelector(
                ".widget-user-username"
            ).textContent;
            const especialidad =
                header.querySelector(".widget-user-desc").textContent;

            // Llenar el modal
            document.getElementById("nombreProveedor").value = nombre;
            document.getElementById("especialidadProveedor").value =
                especialidad;

            // Cambiar título y botón
            document.getElementById("modalAgregarProveedorLabel").textContent =
                "Editar Proveedor";
            btnGuardarProveedor.textContent = "Actualizar Proveedor";

            // Abrir modal
            $("#modalAgregarProveedor").modal("show");
        }
    });

    // Funcionalidad para eliminar proveedor
    document.addEventListener("click", function (e) {
        if (
            e.target.classList.contains("btn-eliminar-proveedor") ||
            e.target.textContent === "Eliminar"
        ) {
            if (confirm("¿Está seguro de que desea eliminar este proveedor?")) {
                const card = e.target.closest(".col-md-6");
                card.remove();
                alert("Proveedor eliminado exitosamente");
                // Actualizar estadísticas después de eliminar
                updateStatistics();
            }
        }
    });
});
