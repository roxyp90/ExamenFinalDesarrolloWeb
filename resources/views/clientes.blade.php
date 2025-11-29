@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color: white; border-bottom: 3px solid #E8C547; padding: 1rem 0;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #D97A26; font-weight: bold;">Gestión de Clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color: transparent;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"
                                style="color: #D97A26; text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #4A2E14;">Clientes</li>
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
                            <h3 class="card-title" style="color: #D97A26; font-weight: bold;">Lista de Clientes</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm"
                                    style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.5rem 1rem;"
                                    data-toggle="modal" data-target="#modalAgregarCliente">
                                    <i class="fas fa-plus"></i> Agregar Cliente
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="clientesTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #E8C547; color: #4A2E14;">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Datos de ejemplo -->
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Pérez</td>
                                        <td>juan@example.com</td>
                                        <td>+1234567890</td>
                                        <td>Calle Principal 123</td>
                                        <td><span class="badge"
                                                style="background-color: #688B3E; color: white; padding: 0.4rem 0.8rem; border-radius: 4px;">Activo</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm"
                                                style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>María García</td>
                                        <td>maria@example.com</td>
                                        <td>+0987654321</td>
                                        <td>Avenida Central 456</td>
                                        <td><span class="badge"
                                                style="background-color: #688B3E; color: white; padding: 0.4rem 0.8rem; border-radius: 4px;">Activo</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm"
                                                style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm"
                                                style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Agregar Cliente -->
<div class="modal fade" id="modalAgregarCliente" tabindex="-1" role="dialog" aria-labelledby="modalAgregarClienteLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: white; border: 1px solid #E8C547;">
            <div class="modal-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547;">
                <h5 class="modal-title" id="modalAgregarClienteLabel" style="color: #D97A26; font-weight: bold;">Agregar
                    Nuevo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombreCliente" style="color: #4A2E14; font-weight: 600;">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombreCliente" placeholder="Ingrese el nombre"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="emailCliente" style="color: #4A2E14; font-weight: 600;">Email</label>
                        <input type="email" class="form-control" id="emailCliente" placeholder="Ingrese el email"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="telefonoCliente" style="color: #4A2E14; font-weight: 600;">Teléfono</label>
                        <input type="tel" class="form-control" id="telefonoCliente" placeholder="Ingrese el teléfono"
                            style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="direccionCliente" style="color: #4A2E14; font-weight: 600;">Dirección</label>
                        <textarea class="form-control" id="direccionCliente" rows="3" placeholder="Ingrese la dirección"
                            style="border: 1px solid #E8C547; border-radius: 4px;"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color: #fafafa; border-top: 1px solid #E8C547;">
                <button type="button" class="btn btn-sm"
                    style="background-color: #999; color: white; border: none; border-radius: 4px;"
                    data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-sm"
                    style="background-color: #688B3E; color: white; border: none; border-radius: 4px;">Guardar
                    Cliente</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('backend/dist/js/clientes.js') }}"></script>
@endsection