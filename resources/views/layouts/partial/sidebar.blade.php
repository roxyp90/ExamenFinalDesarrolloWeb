<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2c3e50;">
    <!-- Brand Logo -->
    <a href="{{ url('home') }}" class="brand-link" style="background-color: white; border-bottom: 2px solid #E8C547;">
        <img src="{{asset('img/logos/logoMercado.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"
            style="color: #D97A26; font-weight: bold;">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{('clientes')}}" class="nav-link" style="color: #ecf0f1;">
                        <i class="nav-icon fas fa-users" style="color: #E8C547;"></i>
                        <p style="color: #ecf0f1;">
                            Clientes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{('productos')}}" class="nav-link" style="color: #ecf0f1;">
                        <i class="nav-icon fas fa-box" style="color: #E8C547;"></i>
                        <p style="color: #ecf0f1;">
                            Productos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{('facturas')}}" class="nav-link" style="color: #ecf0f1;">
                        <i class="nav-icon fas fa-file-invoice" style="color: #E8C547;"></i>
                        <p style="color: #ecf0f1;">
                            Facturas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{('proveedores')}}" class="nav-link" style="color: #ecf0f1;">
                        <i class="nav-icon fas fa-truck" style="color: #E8C547;"></i>
                        <p style="color: #ecf0f1;">
                            Proveedores
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>