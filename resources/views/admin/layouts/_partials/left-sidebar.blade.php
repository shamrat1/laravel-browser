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
            <li class="nav-item has-treeview  {{ active(['/','admin']) }}">
            <a href=" route('admin') }}" class="nav-link  {{ active(['/','admin']) }}">
                    <i class="nav-icon fas fa-chart-line text-warning"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item has-treeview  active(['admin/user*']) }}">
                <a href="#" class="nav-link  active(['admin/user*']) }}">
                    <i class="nav-icon fa fa-file-alt text-white"></i>
                    <p>Pages<i class="fas fa-angle-left right"></i> </p>
                </a>
            </li>
            
            <!-- @include('admin.layouts._partials._menus.user') -->
            <!-- @include('admin.layouts._partials._menus.product') -->
            
            
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
