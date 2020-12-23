<header id="header">

    <div class="header-middle">
        <!--header-top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="trang-chu"><img src="users/images/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                            <li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                            <li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-top-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="trang-chu" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="#">Danh mục sản phẩm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($categories as $category)
                                        @if($category->parent_id==0)<li><a href="product"> {{$category->name}} </a>
                                        <ul role="menu" class="sub-menu-content" >
                                            @foreach($categories as $cate)
                                                @if($cate->parent_id==$category->id)<li><a href="#"> {{$cate->name}} </a></li>@endif
                                            @endforeach
                                        </ul>
                                    </li>@endif
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Thương hiệu<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($brands as $brand)
                                                <li>
                                                    <a href="product"> {{$brand->ten}} </a>
                                                </li>
                                    @endforeach
                                </ul>
                            </li>
                            @foreach($menus as $menu)
                            <li><a href="users/404.html">{{$menu->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Tìm kiếm sản phẩm" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
