<!-- Brand Logo -->
<a href=" url('/') }}" class="brand-link">
    <img src="https://via.placeholder.com/600/92c952" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Ecommerce</span>
</a>

<!-- Sidebar -->
<div class="sidebar nano">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="https://via.placeholder.com/600/92c952" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">John Doe</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview  {{ active('admin') }}">
            <a href=" route('backend.dashboard') }}" class="nav-link  {{ active('admin/') }}">
                    <i class="nav-icon fas fa-chart-line text-warning"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item has-treeview  active(['admin/page*']) }}">
                <a href="{{ route('admin.page.index') }}" class="nav-link  active(['admin/page*']) }}">
                    <i class="nav-icon fa fa-file-alt text-white"></i>
                    <p>Pages </p>
                </a>
            </li>
            <li class="nav-item has-treeview  active(['admin/user*']) }}">
                <a href="{{ route('admin.setting.index') }}" class="nav-link  active(['admin/user*']) }}">
                    <i class="nav-icon fa fa-gears text-white"></i>
                    <p>Setting </p>
                </a>
            </li>
            
            <!-- @include('admin.layouts._partials._menus.user') -->
            <!-- @include('admin.layouts._partials._menus.product') -->
            
            
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
