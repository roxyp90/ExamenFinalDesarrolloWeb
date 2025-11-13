@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color: white; border-bottom: 3px solid #E8C547; padding: 1rem 0;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #D97A26; font-weight: bold;">Gestión de Productos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color: transparent;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: #D97A26; text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #4A2E14;">Productos</li>
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
                    <div class="card" style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(74, 46, 20, 0.1); border: 1px solid #E8C547;">
                        <div class="card-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547; padding: 1rem;">
                            <h3 class="card-title" style="color: #D97A26; font-weight: bold;">Catálogo de Productos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm" style="background-color: #688B3E; color: white; border: none; border-radius: 4px; padding: 0.5rem 1rem;" data-toggle="modal"
                                    data-target="#modalAgregarProducto">
                                    <i class="fas fa-plus"></i> Agregar Producto
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <!-- Producto 1 -->
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="card" style="border: 2px solid #E8C547; border-radius: 8px; background: white;">
                                        <div class="card-header" style="background-color: #fef9f0; border-color: #E8C547;">
                                            <h5 class="card-title" style="color: #D97A26; margin: 0;">Arroz Premium</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Arroz blanco de alta calidad, 1kg</p>
                                            <p style="color: #688B3E; font-weight: bold;">$2.50</p>
                                            <p style="color: #999;">Stock: 150 unidades</p>
                                        </div>
                                        <div class="card-footer" style="background-color: #faf9f8; border-top: 1px solid #E8C547;">
                                            <button class="btn btn-sm" style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Producto 2 -->
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="card" style="border: 2px solid #E8C547; border-radius: 8px; background: white;">
                                        <div class="card-header" style="background-color: #fef9f0; border-color: #E8C547;">
                                            <h5 class="card-title" style="color: #D97A26; margin: 0;">Leche Entera</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Leche fresca pasteurizada, 1L</p>
                                            <p style="color: #688B3E; font-weight: bold;">$1.80</p>
                                            <p style="color: #999;">Stock: 89 unidades</p>
                                        </div>
                                        <div class="card-footer" style="background-color: #faf9f8; border-top: 1px solid #E8C547;">
                                            <button class="btn btn-sm" style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Producto 3 -->
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="card" style="border: 2px solid #E8C547; border-radius: 8px; background: white;">
                                        <div class="card-header" style="background-color: #fef9f0; border-color: #E8C547;">
                                            <h5 class="card-title" style="color: #D97A26; margin: 0;">Pan Integral</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Pan de trigo integral, 500g</p>
                                            <p style="color: #688B3E; font-weight: bold;">$1.20</p>
                                            <p style="color: #999;">Stock: 45 unidades</p>
                                        </div>
                                        <div class="card-footer" style="background-color: #faf9f8; border-top: 1px solid #E8C547;">
                                            <button class="btn btn-sm" style="background-color: #D97A26; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Editar</button>
                                            <button class="btn btn-sm" style="background-color: #e74c3c; color: white; border: none; border-radius: 4px; padding: 0.4rem 0.8rem;">Eliminar</button>
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Agregar Producto -->
<div class="modal fade" id="modalAgregarProducto" tabindex="-1" role="dialog"
    aria-labelledby="modalAgregarProductoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: white; border: 1px solid #E8C547;">
            <div class="modal-header" style="background-color: #fafafa; border-bottom: 2px solid #E8C547;">
                <h5 class="modal-title" id="modalAgregarProductoLabel" style="color: #D97A26; font-weight: bold;">Agregar Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombreProducto" style="color: #4A2E14; font-weight: 600;">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombreProducto" placeholder="Ingrese el nombre" style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="descripcionProducto" style="color: #4A2E14; font-weight: 600;">Descripción</label>
                        <textarea class="form-control" id="descripcionProducto" rows="3"
                            placeholder="Ingrese la descripción" style="border: 1px solid #E8C547; border-radius: 4px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="precioProducto" style="color: #4A2E14; font-weight: 600;">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="precioProducto" placeholder="0.00" style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="stockProducto" style="color: #4A2E14; font-weight: 600;">Stock Inicial</label>
                        <input type="number" class="form-control" id="stockProducto" placeholder="0" style="border: 1px solid #E8C547; border-radius: 4px;">
                    </div>
                    <div class="form-group">
                        <label for="categoriaProducto" style="color: #4A2E14; font-weight: 600;">Categoría</label>
                        <select class="form-control" id="categoriaProducto" style="border: 1px solid #E8C547; border-radius: 4px;">
                            <option>Alimentos</option>
                            <option>Bebidas</option>
                            <option>Limpieza</option>
                            <option>Otros</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color: #fafafa; border-top: 1px solid #E8C547;">
                <button type="button" class="btn btn-sm" style="background-color: #999; color: white; border: none; border-radius: 4px;" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-sm" style="background-color: #688B3E; color: white; border: none; border-radius: 4px;">Guardar Producto</button>
            </div>
        </div>
    </div>
</div>
@endsection