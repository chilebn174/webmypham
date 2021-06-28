@extends('layouts/master')
@section('content')
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                 src="{{url($produc->feature_image)}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach($produc->productImage as $im)
                            <img data-imgbigurl="{{url($im->image)}}"
                                 src="{{url($im->image)}}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$produc->name}}</h3>
                        <div class="product__details__price">{{number_format($produc->price)}} VND</div>

                        <input type="hidden" value="{{$produc->id}}" id="id_pr">
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" id="qty" max="{{$produc->quantity}}">
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success" style="margin-left: 100px;"  href="@if($produc->quantity==0) # @else {{route('addtocart',['id'=>$produc->id])}}@endif" >
                            <i class="fa fa-shopping-cart">     THÊM VÀO GIỎ HÀNG</i></a>

                        <ul>
                            <li><b>Số lượng còn</b> <a><span>{{$produc->quantity}}</span></a></li>
                            <li><b>Danh mục</b> <a><span>{{$produc->category->name}}</span></a></li>
                            <li><b>Thương hiệu</b> <a href="{{route('brand',['id'=>$produc->brand->id])}}"><span>{{$produc->brand->ten}} </span></a></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </li>
                            <li><b>Tags:</b>
                                @foreach($produc->tags as $item)
                                    <span class="badge badge-dark p-2" style="font-size: 15px;"><a href="http://localhost:8080/web/public/shop?tag={{$item->id}}">{{$item->name}}</a></span>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab"
                                   aria-selected="true">Thông tin </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin sản phẩm</h6>
                                    <p>{!! $produc->content !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm mới nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($productLat as $pr)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{url($pr->feature_image)}}">
                            <ul class="product__item__pic__hover">
                                <form action="{{route('cart')}}" method="post">
                                    @csrf
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <input type="hidden" value="{{$pr->id}}" id="pr_id">
                                    <li><a href="{{route('addtocart',['id'=>$pr->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </form>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="{{route('product-detail',['id'=>$pr->id])}}">{{$pr->name}}</a></h6>
                            <h5>{{number_format($pr->price)}} VND</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->


@endsection
