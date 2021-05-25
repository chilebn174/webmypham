@extends('layouts/master')
@section('content')

<!--slider-->
<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for($i=1; $i<=count($slide); $i++) <li data-target="#slider-carousel" data-slide-to="$i">
                            </li>
                            @endfor
                    </ol>
                    <div class="carousel-inner">
                        @foreach($slide as $key => $sl)
                        <div class="item {{$key == 0 ? 'active' : ''}}">
                            <div class="col-sm-12">
                                <img style="height:250px;" src="{{url($sl -> image_path)}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/slider-->
<!--Content-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Sản phẩm nổi bật</h2>
                    @foreach($products as $produ)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{url($produ->feature_image)}}" alt="" />
                                    <h2>{{@number_format($produ->price,0)}} VNĐ</h2>
                                    <p style="height: 50px;">{{$produ->name}}</p>
                                </div>
                                <div class="contxt">
                                    <ul>
                                        <li>
                                            <a href="cart" style="margin-right: 10px; margin-left:25px;" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="{{route('product-details',['id'=>$produ->id])}}" class="btn">Xem chi tiết</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--features_items-->

                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">Sản phẩm bán chạy</h2>
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($prod as $keyR => $pro)
                            @if($keyR % 3 == 0)
                            <div class="item {{$keyR == 0 ? 'active' : ''}}">
                                @endif
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{url($pro->feature_image)}}" alt="" />
                                                <h2>{{@number_format($pro->price,0)}} VNĐ</h2>
                                                <p style="height: 50px;">{{$pro->name}}</p>
                                            </div>
                                            <div class="contxt">
                                                <ul>
                                                    <li>
                                                        <a href="cart" style="margin-right: 10px; margin-left:25px;" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="{{route('product-details',['id'=>$pro->id])}}" class="btn">Xem chi tiết</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($keyR % 3 == 2)
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
<!--/Contents-->
@endsection