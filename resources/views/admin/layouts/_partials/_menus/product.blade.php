<li class="nav-item has-treeview  active(['admin/user*']) }}">
            <a href="#" class="nav-link  active(['admin/user*']) }}">
                <i class="nav-icon fas fa-box text-white"></i>
                <p>Products<i class="fas fa-angle-left right"></i> </p>
            </a>
                
                <ul class="nav nav-treeview" >
                    <li class="nav-item  {{ active('admin/products/customer*') }}">
                        <a href="#" class="nav-link  {{ active('admin/products/customer*') }}">
                            <i class="nav-icon fas fa-box text-white"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active(['admin/products/category*','admin/products/catgories*']) }}">
                        <a href="#" class="nav-link  {{ active(['admin/products/category*','admin/products/catgories*']) }}">
                            <i class="nav-icon fa fa-border-all text-white"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active(['admin/products/sub_category*','admin/products/sub_categories*']) }}">
                        <a href="#" class="nav-link  {{ active(['admin/products/sub_category*','admin/products/sub_categories*']) }}">
                            <i class="nav-icon fa fa-border-all text-white"></i>
                            <p>SubCategories</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active(['admin/products/child_category*','admin/products/child_categories*']) }}">
                        <a href="#" class="nav-link  {{ active(['admin/products/child_category*','admin/products/child_categories*']) }}">
                            <i class="nav-icon fa fa-border-all text-white"></i>
                            <p>ChildCategories</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/products/tag*') }}">
                        <a href="#" class="nav-link  {{ active('admin/products/tag*') }}">
                            <i class="nav-icon fas fa-tags text-white"></i>
                            <p>Tags</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/products/color*') }}">
                        <a href="#" class="nav-link  {{ active('admin/products/color*') }}">
                            <i class="nav-icon fa fa-palette text-white"></i>
                            <p>Product Colors</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/products/size*') }}">
                        <a href="#" class="nav-link  {{ active('admin/products/permission*') }}">
                            <i class="nav-icon fas fa-greater-than text-white"></i>
                            <p>Product Sizes</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/products/brand*') }}">
                        <a href="#" class="nav-link  {{ active('admin/products/brand*') }}">
                            <i class="nav-icon fab fa-bootstrap text-white"></i>
                            <p>Brands</p>
                        </a>
                    </li>
                    <li class="nav-item  {{ active('admin/products/permission*') }}">
                        <a href="#" class="nav-link  {{ active('admin/products/warranty*') }}">
                            <i class="nav-icon fa fa-certificate text-white"></i>
                            <p>Warranty</p>
                        </a>
                    </li>
                    
                </ul>
        </li>