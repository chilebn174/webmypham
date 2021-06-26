<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('admins/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image" style="height: 40px;">
                <img src="{{url(auth()->user()->image_path)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info"  style="margin-left: -150px">
                <a href="{{route('users.edit',['id'=>auth()->id()])}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{route('statistical.index')}}" class="nav-link active">
                        <i class="nav-icon fa fa-tachometer"></i>
                        <p>
                            Thống kê
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Danh mục sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('brands.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-handshake-o"></i>
                        <p>
                            Thương hiệu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-product-hunt"></i>
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slider.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-sliders"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Danh sách Nhân viên
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customers.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-male"></i>
                        <p>
                            Khách hàng
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('orders.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                            Đơn hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin-logout')}}" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
