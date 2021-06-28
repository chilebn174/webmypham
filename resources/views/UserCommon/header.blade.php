<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> abc@beauty.com</li>
                            <li>Miễn phí vận chuyển cho đơn hàng từ 100K trở lên</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="header__top__right__auth">
                            @if(isset($user)) <i class="fa fa-user"></i> {{ $user['email']}}
                                    <a href="{{route('logout')}}">Đăng xuất</a>
                            @else <a href="{{route('login')}}"><i class="fa fa-user"></i> Đăng nhập</a> @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('trang-chu')}}"><img src="{{asset('user/img/logo.jpg')}}" alt="" ></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ (request()->is('trang-chu*')) ? 'active' : '' }}"><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                        <li class="{{ (request()->is('shop*')) ? 'active' : '' }}"><a href="{{route('shop')}}">Cửa hàng</a></li>
                        <li class="{{ (request()->is('brand*')) ? 'active' : '' }}"><a href="{{route('brand',['id'=>$brand->first()])}}">Thương hiệu</a>
                            <ul class="header__menu__dropdown">
                                @foreach($brand as $br)
                                <li><a href="{{route('brand',['id'=>$br->id])}}">{{$br->ten}}</a></li>@endforeach
                            </ul>
                        </li>
                        <li class="{{ (request()->is('contact*')) ? 'active' : '' }}"><a href="{{route('contact')}}">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="@if(!isset($login)){{route('cart')}}@endif "><i class="fa fa-shopping-bag"></i> <span>{{$num}} </span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
<!-- Hero Section Begin -->
<div style="clear: both"></div>
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục sản phẩm</span>
                    </div>

                            <div id="menu">
                                <ul >
                                    @foreach($category as $cate)
                                        @if($cate->parent_id==0)
                                    <li><a href="{{route('category',['id'=>$cate->categoryChirldrent()->first()->id]) }}"><b>{{$cate->name}}</b></a>

                                        <ul class="sub-menu" >
                                            @foreach($category as $c)
                                                @if($c->parent_id==$cate->id)
                                                    <li><a href="{{route('category',['id'=>$c->id])}}">{{$c->name}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>

                                    </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{route('search')}}" method="get">
                            @csrf
                            <input type="text" placeholder="Hãy nhập sản phẩm bạn muốn tìm kiếm..." name="key">
                            <button type="submit" class="site-btn">SEARCH</button>

                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+84982260668</h5>
                            <span>Hỗ trợ  24/7</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

