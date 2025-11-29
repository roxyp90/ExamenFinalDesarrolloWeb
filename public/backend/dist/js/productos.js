let editingCard = null;

document.addEventListener("DOMContentLoaded", function () {
    // Funcionalidad para agregar/editar producto
    const btnGuardarProducto = document.querySelector(
        '#modalAgregarProducto .btn[style*="background-color: #688B3E"]'
    );

    btnGuardarProducto.addEventListener("click", function () {
        const nombre = document.getElementById("nombreProducto").value;
        const descripcion = document.getElementById(
            "descripcionProducto"
        ).value;
        const precio = parseFloat(
            document.getElementById("precioProducto").value
        );
        const stock = parseInt(document.getElementById("stockProducto").value);
        const categoria = document.getElementById("categoriaProducto").value;

        if (!nombre || !descripcion || isNaN(precio) || isNaN(stock)) {
            alert("Por favor complete todos los campos obligatorios");
            return;
        }

        if (editingCard) {
            // Modo edición
            const cardHeader = editingCard.querySelector(
                ".card-header .card-title"
            );
            const cardBody = editingCard.querySelector(".card-body");

            cardHeader.textContent = nombre;
            cardBody.innerHTML = `
                <p class="card-text">${descripcion}</p>
                <p style="color: #688B3E; font-weight: bold;">$${precio.toFixed(
                    2
                )}</p>
                <p style="color: #999;">Stock: ${stock} unidades</p>
            `;

            editingCard = null;
            btnGuardarProducto.textContent = "Guardar Producto";
            document.getElementById("modalAgregarProductoLabel").textContent =
                "Agregar Nuevo Producto";
        } else {
            // Modo agregar
            const container = document.querySelector(".card-body .row");
            const newCard = document.createElement("div");
            newCard.className = "col-md-4 col-sm-6 col-12";
            newCard.innerHTML = `
                <div class="card" style="border: 2px solid #E8C547; border-radius: 8px; background: white;">
                    <div class="card-header" style="background-color: #fef9f0; border-color: #E8C547;">
                        <h5 class="card-title" style="color: #D97A26; margin: 0;">${nombre}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">${descripcion}</p>
                        <p style="color: #688B3E; font-weight: bold;">$${precio.toFixed(
                            2
                        )}</p>
                        <p style="color: #999;">Stock: ${stock} unidades</p>
                    </div>
                    <div class="card-footer" style="background-color: #faf9f8; border-top: 1px solid #E8C547;">
                        <button class="btn btn-sm btn-editar-producto" style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                        <button class="btn btn-sm btn-eliminar-producto" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                    </div>
                </div>
            `;

            container.appendChild(newCard);
            alert("Producto agregado exitosamente");
        }

        // Limpiar formulario y cerrar modal
        document.getElementById("nombreProducto").value = "";
        document.getElementById("descripcionProducto").value = "";
        document.getElementById("precioProducto").value = "";
        document.getElementById("stockProducto").value = "";
        document.getElementById("categoriaProducto").selectedIndex = 0;

        // Cerrar modal
        $("#modalAgregarProducto").modal("hide");
    });

    // Funcionalidad para editar producto
    document.addEventListener("click", function (e) {
        if (
            e.target.classList.contains("btn-editar-producto") ||
            e.target.textContent === "Editar"
        ) {
            const card = e.target.closest(".card");
            editingCard = card;

            // Extraer datos actuales de la tarjeta
            const nombre = card.querySelector(".card-title").textContent;
            const descripcion = card.querySelector(".card-text").textContent;
            const precioText = card.querySelector(
                'p[style*="color: #688B3E"]'
            ).textContent;
            const precio = parseFloat(precioText.replace("$", ""));
            const stockText = card.querySelector(
                'p[style*="color: #999"]'
            ).textContent;
            const stock = parseInt(
                stockText.replace("Stock: ", "").replace(" unidades", "")
            );

            // Llenar el modal con los datos actuales
            document.getElementById("nombreProducto").value = nombre;
            document.getElementById("descripcionProducto").value = descripcion;
            document.getElementById("precioProducto").value = precio;
            document.getElementById("stockProducto").value = stock;
            // Nota: La categoría no se almacena en la tarjeta, así que se queda por defecto

            // Cambiar el título del modal y el botón
            document.getElementById("modalAgregarProductoLabel").textContent =
                "Editar Producto";
            btnGuardarProducto.textContent = "Actualizar Producto";

            // Abrir modal
            $("#modalAgregarProducto").modal("show");
        }
    });

    // Funcionalidad para eliminar producto
    document.addEventListener("click", function (e) {
        if (
            e.target.classList.contains("btn-eliminar-producto") ||
            e.target.textContent === "Eliminar"
        ) {
            if (confirm("¿Está seguro de que desea eliminar este producto?")) {
                const cardContainer = e.target.closest(
                    ".col-md-4, .col-sm-6, .col-12"
                );
                cardContainer.remove();
                alert("Producto eliminado exitosamente");
            }
        }
    });
});
