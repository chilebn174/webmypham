<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('trang-chu')}}" class="nav-link">Trang chủ</a>
        </li>

    </ul>

    <!-- SEARCH FORM -->
    @yield('search')
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                    class="fa fa-th-large"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                <a href="{{route('users.edit',['id'=>auth()->id()])}}" class="dropdown-item">
                    Thay đổi thông tin cá nhân
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('admin-logout')}}" class="dropdown-item">
                    Đăng xuất
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
