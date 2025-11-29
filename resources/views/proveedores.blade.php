@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color: white; border-bottom: 3px solid #E8C547; padding: 1rem 0;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #D97A26; font-weight: bold;">Gestión de Proveedores</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color: transparent;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"
                                style="color: #D97A26; text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #4A2E14;">Proveedores</li>
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
                            <h3 class="card-title" style="color: #D97A26; font-weight: bold;">Lista de Proveedores</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm"
                                    style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.5rem 1rem;"
                                    data-toggle="modal" data-target="#modalAgregarProveedor">
                                    <i class="fas fa-plus"></i> Agregar Proveedor
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <!-- Proveedor 1 -->
                                <div class="col-md-6">
                                    <div class="card card-widget widget-user" style="border-top: 3px solid #D97A26;">
                                        <div class="widget-user-header" style="background-color: #D97A26;">
                                            <h3 class="widget-user-username" style="color: white;">Distribuidora ABC
                                            </h3>
                                            <h5 class="widget-user-desc" style="color: white;">Proveedor Principal</h5>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle elevation-2"
                                                src="{{asset('backend/dist/img/user1-128x128.jpg')}}" alt="User Avatar">
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header" style="color: #D97A26;">150</h5>
                                                        <span class="description-text"
                                                            style="color: #4A2E14;">PRODUCTOS</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header" style="color: #688B3E;">+55%</h5>
                                                        <span class="description-text"
                                                            style="color: #4A2E14;">CALIDAD</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header" style="color: #688B3E;">ACTIVO
                                                        </h5>
                                                        <span class="description-text"
                                                            style="color: #4A2E14;">ESTADO</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"
                                            style="background-color: white; border-top: 1px solid #e8e8e8;">
                                            <button class="btn btn-sm"
                                                style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Ver
                                                Productos</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #E8C547; color: #4A2E14; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Proveedor 2 -->
                                <div class="col-md-6">
                                    <div class="card card-widget widget-user" style="border-top: 3px solid #688B3E;">
                                        <div class="widget-user-header" style="background-color: #688B3E;">
                                            <h3 class="widget-user-username" style="color: white;">Alimentos XYZ</h3>
                                            <h5 class="widget-user-desc" style="color: white;">Especialista en Lácteos
                                            </h5>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle elevation-2"
                                                src="{{asset('backend/dist/img/user3-128x128.jpg')}}" alt="User Avatar">
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header" style="color: #D97A26;">89</h5>
                                                        <span class="description-text"
                                                            style="color: #4A2E14;">PRODUCTOS</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header" style="color: #688B3E;">+72%</h5>
                                                        <span class="description-text"
                                                            style="color: #4A2E14;">CALIDAD</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header" style="color: #688B3E;">ACTIVO
                                                        </h5>
                                                        <span class="description-text"
                                                            style="color: #4A2E14;">ESTADO</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"
                                            style="background-color: white; border-top: 1px solid #e8e8e8;">
                                            <button class="btn btn-sm"
                                                style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Ver
                                                Productos</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #E8C547; color: #4A2E14; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- Información adicional -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card"
                        style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(74, 46, 20, 0.1); border: 1px solid #E8C547;">
                        <div class="card-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547;">
                            <h3 class="card-title" style="color: #D97A26; font-weight: bold;">Proveedores Activos</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="proveedoresChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card"
                        style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(74, 46, 20, 0.1); border: 1px solid #E8C547;">
                        <div class="card-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547;">
                            <h3 class="card-title" style="color: #D97A26; font-weight: bold;">Últimas Órdenes de Compra
                            </h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr style="background-color: #E8C547; color: #4A2E14;">
                                        <th>Proveedor</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Distribuidora ABC</td>
                                        <td>2024-12-15</td>
                                        <td><span class="badge"
                                                style="background-color: #688B3E; color: white; padding: 0.4rem 0.8rem; border-radius: 4px;">Entregado</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alimentos XYZ</td>
                                        <td>2024-12-14</td>
                                        <td><span class="badge"
                                                style="background-color: #E8C547; color: #4A2E14; padding: 0.4rem 0.8rem; border-radius: 4px;">En
                                                tránsito</span></td>
                                    </tr>
                                    <tr>
                                        <td>Distribuidora ABC</td>
                                        <td>2024-12-10</td>
                                        <td><span class="badge"
                                                style="background-color: #688B3E; color: white; padding: 0.4rem 0.8rem; border-radius: 4px;">Entregado</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Agregar Proveedor -->
<div class="modal fade" id="modalAgregarProveedor" tabindex="-1" role="dialog"
    aria-labelledby="modalAgregarProveedorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: white; border: 1px solid #E8C547;">
            <div class="modal-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547;">
                <h5 class="modal-title" id="modalAgregarProveedorLabel" style="color: #D97A26; font-weight: bold;">
                    Agregar Nuevo Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombreProveedor" style="color: #4A2E14; font-weight: 600;">Nombre de la
                            Empresa</label>
                        <input type="text" class="form-control" id="nombreProveedor" placeholder="Ingrese el nombre"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="contactoProveedor" style="color: #4A2E14; font-weight: 600;">Persona de
                            Contacto</label>
                        <input type="text" class="form-control" id="contactoProveedor" placeholder="Nombre del contacto"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="emailProveedor" style="color: #4A2E14; font-weight: 600;">Email</label>
                        <input type="email" class="form-control" id="emailProveedor" placeholder="Ingrese el email"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="telefonoProveedor" style="color: #4A2E14; font-weight: 600;">Teléfono</label>
                        <input type="tel" class="form-control" id="telefonoProveedor" placeholder="Ingrese el teléfono"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="direccionProveedor" style="color: #4A2E14; font-weight: 600;">Dirección</label>
                        <textarea class="form-control" id="direccionProveedor" rows="3"
                            placeholder="Ingrese la dirección"
                            style="border: 1px solid #E8C547; border-radius: 4px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="especialidadProveedor"
                            style="color: #4A2E14; font-weight: 600;">Especialidad</label>
                        <select class="form-control" id="especialidadProveedor"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                            <option>Alimentos en General</option>
                            <option>Lácteos</option>
                            <option>Carnes</option>
                            <option>Verduras</option>
                            <option>Artículos de Limpieza</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color: #fafafa; border-top: 1px solid #E8C547;">
                <button type="button" class="btn btn-sm"
                    style="background-color: #999; color: white; border: none; border-radius: 4px;"
                    data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-sm"
                    style="background-color: #688B3E; color: white; border: none; border-radius: 4px;">Guardar
                    Proveedor</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Gráfico simple de proveedores (ejemplo)
    document.addEventListener('DOMContentLoaded', function() {
        // Aquí iría el código para inicializar un gráfico con Chart.js
        console.log('Gráfico de proveedores cargado');

        // Funcionalidad para agregar proveedor
        const btnGuardarProveedor = document.querySelector(
            '#modalAgregarProveedor .btn[style*="background-color: #688B3E"]');
        const modalAgregarProveedor = document.getElementById('modalAgregarProveedor');

        btnGuardarProveedor.addEventListener('click', function() {
            const nombre = document.getElementById('nombreProveedor').value;
            const contacto = document.getElementById('contactoProveedor').value;
            const email = document.getElementById('emailProveedor').value;
            const telefono = document.getElementById('telefonoProveedor').value;
            const direccion = document.getElementById('direccionProveedor').value;
            const especialidad = document.getElementById('especialidadProveedor').value;

            if (!nombre || !contacto || !email) {
                alert('Por favor complete los campos obligatorios: Nombre, Contacto y Email');
                return;
            }

            // Crear nueva tarjeta de proveedor
            const container = document.querySelector('.card-body .row');
            const newCard = document.createElement('div');
            newCard.className = 'col-md-6';
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
                        <button class="btn btn-sm" style="background-color: #E8C547; color: #4A2E14; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                        <button class="btn btn-sm" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                    </div>
                </div>
            `;

            container.appendChild(newCard);

            // Limpiar formulario y cerrar modal
            document.getElementById('nombreProveedor').value = '';
            document.getElementById('contactoProveedor').value = '';
            document.getElementById('emailProveedor').value = '';
            document.getElementById('telefonoProveedor').value = '';
            document.getElementById('direccionProveedor').value = '';
            document.getElementById('especialidadProveedor').selectedIndex = 0;

            // Cerrar modal
            $('#modalAgregarProveedor').modal('hide');

            alert('Proveedor agregado exitosamente');
        });
    });
</script>
@endsection