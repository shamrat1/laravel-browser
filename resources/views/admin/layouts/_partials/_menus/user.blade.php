<li class="nav-item has-treeview  active(['admin/user*']) }}">
            <a href="#" class="nav-link  active(['admin/user*']) }}">
                <i class="nav-icon fa fa-user text-white"></i>
                <p>Users<i class="fas fa-angle-left right"></i> </p>
            </a>
                
                <ul class="nav nav-treeview" >
                    <li class="nav-item  {{ active('admin/users/customer*') }}">
                        <a href="#" class="nav-link  {{ active('admin/users/customer*') }}">
                            <i class="nav-icon fa fa-users text-white"></i>
                            <p>Customers</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/users/seller*') }}">
                        <a href="#" class="nav-link  {{ active('admin/users/seller*') }}">
                            <i class="nav-icon fa fa-store text-white"></i>
                            <p>Sellers</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/users/admin*') }}">
                        <a href="#" class="nav-link  {{ active('admin/users/admin*') }}">
                            <i class="nav-icon fa fa-user-shield text-white"></i>
                            <p>Admins</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/users/role*') }}">
                        <a href="#" class="nav-link  {{ active('admin/users/role*') }}">
                            <i class="nav-icon fa fa-user-tag text-white"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/users/permission*') }}">
                        <a href="#" class="nav-link  {{ active('admin/users/permission*') }}">
                            <i class="nav-icon fa fa-user-check text-white"></i>
                            <p>Permission</p>
                        </a>
                    </li>
                    
                </ul>
        </li>