@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color: white; border-bottom: 3px solid #E8C547; padding: 1rem 0;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #D97A26; font-weight: bold;">Gestión de Facturas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color: transparent;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"
                                style="color: #D97A26; text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #4A2E14;">Facturas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card"
                        style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(74, 46, 20, 0.1); border: 1px solid #E8C547;">
                        <div class="card-header"
                            style="background-color: #fafafa; border-bottom: 2px solid #E8C547; padding: 1rem;">
                            <h3 class="card-title" style="color: #D97A26; font-weight: bold;">Historial de Facturas</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm"
                                    style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.5rem 1rem;"
                                    data-toggle="modal" data-target="#modalNuevaFactura">
                                    <i class="fas fa-plus"></i> Nueva Factura
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="facturasTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #E8C547; color: #4A2E14;">
                                        <th>N° Factura</th>
                                        <th>Cliente</th>
                                        <th>Fecha</th>
                                        <th>Total</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Datos de ejemplo -->
                                    <tr>
                                        <td>001-001</td>
                                        <td>Juan Pérez</td>
                                        <td>2024-12-15</td>
                                        <td>$45.50</td>
                                        <td><span class="badge"
                                                style="background-color: #688B3E; color: white; padding: 0.4rem 0.8rem; border-radius: 4px;">Pagada</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm"
                                                style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Ver</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Imprimir</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>001-002</td>
                                        <td>María García</td>
                                        <td>2024-12-14</td>
                                        <td>$32.80</td>
                                        <td><span class="badge"
                                                style="background-color: #E8C547; color: #4A2E14; padding: 0.4rem 0.8rem; border-radius: 4px;">Pendiente</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-editar-factura"
                                                style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm btn-eliminar-factura"
                                                style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Imprimir</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>001-003</td>
                                        <td>Carlos López</td>
                                        <td>2024-12-13</td>
                                        <td>$78.90</td>
                                        <td><span class="badge"
                                                style="background-color: #688B3E; color: white; padding: 0.4rem 0.8rem; border-radius: 4px;">Pagada</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm"
                                                style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Ver</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Imprimir</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- Estadísticas -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                        style="background-color: #D97A26; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <div class="inner">
                            <h3 style="color: white; font-weight: bold;">150</h3>
                            <p style="color: white; margin: 0;">Facturas Totales</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-invoice" style="color: rgba(255,255,255,0.5);"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: white; text-decoration: none;">Más info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                        style="background-color: #688B3E; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <div class="inner">
                            <h3 style="color: white; font-weight: bold;">$12,450</h3>
                            <p style="color: white; margin: 0;">Ingresos del Mes</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign" style="color: rgba(255,255,255,0.5);"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: white; text-decoration: none;">Más info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                        style="background-color: #E8C547; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <div class="inner">
                            <h3 style="color: #4A2E14; font-weight: bold;">8</h3>
                            <p style="color: #4A2E14; margin: 0;">Facturas Pendientes</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clock" style="color: rgba(74, 46, 20, 0.3);"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: #4A2E14; text-decoration: none;">Más info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                        style="background-color: #e74c3c; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <div class="inner">
                            <h3 style="color: white; font-weight: bold;">2</h3>
                            <p style="color: white; margin: 0;">Facturas Vencidas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-exclamation-triangle" style="color: rgba(255,255,255,0.5);"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: white; text-decoration: none;">Más info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Nueva Factura -->
<div class="modal fade" id="modalNuevaFactura" tabindex="-1" role="dialog" aria-labelledby="modalNuevaFacturaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background-color: white; border: 1px solid #E8C547;">
            <div class="modal-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547;">
                <h5 class="modal-title" id="modalNuevaFacturaLabel" style="color: #D97A26; font-weight: bold;">Crear
                    Nueva Factura</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="clienteFactura" style="color: #4A2E14; font-weight: 600;">Cliente</label>
                                <select class="form-control" id="clienteFactura"
                                    style="border: 1px solid #E8C547; border-radius: 4px;">
                                    <option>Juan Pérez</option>
                                    <option>María García</option>
                                    <option>Carlos López</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaFactura" style="color: #4A2E14; font-weight: 600;">Fecha</label>
                                <input type="date" class="form-control" id="fechaFactura" value="{{ date('Y-m-d') }}"
                                    style="border: 1px solid #E8C547; border-radius: 4px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color: #4A2E14; font-weight: 600;">Productos</label>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr style="background-color: #E8C547; color: #4A2E14;">
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="productosFactura">
                                    <tr>
                                        <td>
                                            <select class="form-control form-control-sm"
                                                style="border: 1px solid #E8C547; border-radius: 4px;">
                                                <option>Arroz Premium</option>
                                                <option>Leche Entera</option>
                                                <option>Pan Integral</option>
                                            </select>
                                        </td>
                                        <td><input type="number" class="form-control form-control-sm" value="1" min="1"
                                                style="border: 1px solid #E8C547; border-radius: 4px;">
                                        </td>
                                        <td>$2.50</td>
                                        <td>$2.50</td>
                                        <td><button class="btn btn-sm"
                                                style="background-color: #e74c3c; color: white; border: none; border-radius: 4px;">×</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-sm"
                            style="background-color: #999; color: white; border: none; border-radius: 4px;"
                            id="agregarProductoFactura">Agregar
                            Producto</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="metodoPago" style="color: #4A2E14; font-weight: 600;">Método de Pago</label>
                                <select class="form-control" id="metodoPago"
                                    style="border: 1px solid #E8C547; border-radius: 4px;">
                                    <option>Efectivo</option>
                                    <option>Tarjeta de Crédito</option>
                                    <option>Transferencia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="totalFactura" style="color: #4A2E14; font-weight: 600;">Total</label>
                                <input type="text" class="form-control" id="totalFactura" value="$2.50" readonly
                                    style="border: 1px solid #E8C547; border-radius: 4px;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color: #fafafa; border-top: 1px solid #E8C547;">
                <button type="button" class="btn btn-sm"
                    style="background-color: #999; color: white; border: none; border-radius: 4px;"
                    data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-sm"
                    style="background-color: #688B3E; color: white; border: none; border-radius: 4px;">Generar
                    Factura</button>
            </div>
        </div>
    </div>
</div>

<script>
    let editingFactura = null;

    document.addEventListener('DOMContentLoaded', function() {
        // Actualizar estadísticas iniciales
        updateStatistics();
        // Funcionalidad para agregar/editar factura
        const btnGenerarFactura = document.querySelector(
            '#modalNuevaFactura .btn[style*="background-color: #688B3E"]');

        btnGenerarFactura.addEventListener('click', function() {
            const cliente = document.getElementById('clienteFactura').value;
            const fecha = document.getElementById('fechaFactura').value;
            const metodoPago = document.getElementById('metodoPago').value;
            const total = document.getElementById('totalFactura').value;

            if (!cliente || !fecha) {
                alert('Por favor complete todos los campos obligatorios');
                return;
            }

            if (editingFactura) {
                // Modo edición
                const cells = editingFactura.querySelectorAll('td');
                cells[1].textContent = cliente;
                cells[2].textContent = fecha;
                cells[3].textContent = total;
                // Estado se mantiene igual

                editingFactura = null;
                btnGenerarFactura.textContent = 'Generar Factura';
                document.getElementById('modalNuevaFacturaLabel').textContent = 'Crear Nueva Factura';
            } else {
                // Modo agregar
                const tableBody = document.querySelector('#facturasTable tbody');
                const newRow = document.createElement('tr');

                // Generar número de factura automático
                const existingRows = tableBody.querySelectorAll('tr');
                const nextNumber = existingRows.length + 1;
                const invoiceNumber = `001-${String(nextNumber).padStart(3, '0')}`;

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
                alert('Factura generada exitosamente');
            }

            // Actualizar estadísticas después de agregar/editar
            updateStatistics();

            // Limpiar formulario y cerrar modal
            document.getElementById('clienteFactura').selectedIndex = 0;
            document.getElementById('fechaFactura').value = '{{ date("Y-m-d") }}';
            document.getElementById('metodoPago').selectedIndex = 0;
            document.getElementById('totalFactura').value = '$0.00';

            // Limpiar productos
            const productosBody = document.getElementById('productosFactura');
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
            $('#modalNuevaFactura').modal('hide');
        });

        // Funcionalidad para editar factura
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('btn-editar-factura') || e.target.textContent === 'Editar') {
                const row = e.target.closest('tr');
                editingFactura = row;

                // Extraer datos actuales de la fila
                const cells = row.querySelectorAll('td');
                const cliente = cells[1].textContent;
                const fecha = cells[2].textContent;
                const total = cells[3].textContent;

                // Llenar el modal con los datos actuales
                document.getElementById('clienteFactura').value = cliente;
                document.getElementById('fechaFactura').value = fecha;
                document.getElementById('totalFactura').value = total;

                // Cambiar el título del modal y el botón
                document.getElementById('modalNuevaFacturaLabel').textContent = 'Editar Factura';
                btnGenerarFactura.textContent = 'Actualizar Factura';

                // Abrir modal
                $('#modalNuevaFactura').modal('show');
            }
        });

        // Funcionalidad para eliminar factura
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('btn-eliminar-factura') || e.target.textContent ===
                'Eliminar') {
                if (confirm('¿Está seguro de que desea eliminar esta factura?')) {
                    const row = e.target.closest('tr');
                    row.remove();
                    alert('Factura eliminada exitosamente');
                    // Actualizar estadísticas después de eliminar
                    updateStatistics();
                }
            }
        });

        // Funcionalidad para agregar productos en el modal
        document.getElementById('agregarProductoFactura').addEventListener('click', function() {
            const productosBody = document.getElementById('productosFactura');
            const newRow = document.createElement('tr');

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
        document.addEventListener('input', function(e) {
            if (e.target.type === 'number' && e.target.closest('#productosFactura')) {
                updateTotal();
            }
        });

        document.addEventListener('change', function(e) {
            if (e.target.tagName === 'SELECT' && e.target.closest('#productosFactura')) {
                updateTotal();
            }
        });

        // Eliminar fila de producto
        document.addEventListener('click', function(e) {
            if (e.target.textContent === '×') {
                e.target.closest('tr').remove();
                updateTotal();
            }
        });

        function updateTotal() {
            const rows = document.querySelectorAll('#productosFactura tr');
            let total = 0;

            rows.forEach(row => {
                const quantity = parseInt(row.querySelector('input[type="number"]').value) || 0;
                const price = parseFloat(row.querySelector('td:nth-child(3)').textContent.replace('$',
                    '')) || 0;
                total += quantity * price;
            });

            document.getElementById('totalFactura').value = `$${total.toFixed(2)}`;
        }

        function updateStatistics() {
            const rows = document.querySelectorAll('#facturasTable tbody tr');
            let totalInvoices = rows.length;
            let totalIncome = 0;
            let pendingInvoices = 0;
            let overdueInvoices = 0;

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const status = cells[4].textContent.trim();
                const total = parseFloat(cells[3].textContent.replace('$', '')) || 0;

                if (status === 'Pagada') {
                    totalIncome += total;
                } else if (status === 'Pendiente') {
                    pendingInvoices++;
                } else if (status === 'Vencida') {
                    overdueInvoices++;
                }
            });

            // Update the statistics boxes
            document.querySelector('.small-box .inner h3').textContent = totalInvoices;
            document.querySelectorAll('.small-box .inner h3')[1].textContent = `$${totalIncome.toFixed(2)}`;
            document.querySelectorAll('.small-box .inner h3')[2].textContent = pendingInvoices;
            document.querySelectorAll('.small-box .inner h3')[3].textContent = overdueInvoices;
        }
    });
</script>
@endsection