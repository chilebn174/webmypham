@extends('layouts/master')
@section('content')
@foreach($slider->random(1) as $sl)
    <section class="blog-details-hero set-bg" data-setbg="{{url($sl->image_path)}}">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>The Moment You Need To Remove Product From The Menu</h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endforeach
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($brand as $br)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg">
                                <img src="{{url($br->image)}}" style="width: 70%; padding-top: 100px;padding-left: 70px;">
                                <h5 ><a style="border: 1px solid #b2b2b2;" href="{{route('brand', ['id'=>$br->id])}}">{{$br->ten}}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sẩn phẩm nổi bật</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach($category as $cate)
                                @if($cate->parent_id==0)
                                    @foreach($category as $c)
                                        @if($cate->id==$c->parent_id)
                            <li data-filter=".cate{{$c->id}}">{{$c->name}}</li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($product as $pr)
                <div class="col-lg-3 col-md-4 col-sm-6 mix cate{{$pr->category_id}} ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{url($pr->feature_image)}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{route('addtocart',['id'=>$pr->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('product-detail', ['id'=>$pr->id])}}">{{$pr->name}}</a></h6>
                            <h5>{{number_format($pr->price)}} VND</h5>
                        </div>
                    </div>

                </div>

                @endforeach
            </div>
        </div>
{{--        <div class="float-right">{{$product->links()}}</div>--}}
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                @foreach($slider as $sl)
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic" style="margin-bottom: 20px;">
                        <img src="{{url($sl->image_path)}}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">

                            <div class="latest-prdouct__slider__item">
                                @foreach($productLat as $pr)
                                <a href="{{route('product-detail', ['id'=>$pr->id])}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img style="width: 100px;" src="{{url($pr->feature_image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$pr->name}}</h6>
                                        <span>{{number_format($pr->price)}} VND</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach($product->random(3) as $pr)
                                    <a href="{{route('product-detail', ['id'=>$pr->id])}}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px;" src="{{url($pr->feature_image)}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$pr->name}}</h6>
                                            <span>{{number_format($pr->price)}} VND</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach($product->random(3) as $pr)
                                    <a href="{{route('product-detail', ['id'=>$pr->id])}}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px;" src="{{url($pr->feature_image)}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$pr->name}}</h6>
                                            <span>{{number_format($pr->price)}} VND</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach($product->random(3) as $pr)
                                    <a href="{{route('product-detail', ['id'=>$pr->id])}}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px;" src="{{url($pr->feature_image)}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$pr->name}}</h6>
                                            <span>{{number_format($pr->price)}} VND</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach($product->random(3) as $pr)
                                    <a href="{{route('product-detail', ['id'=>$pr->id])}}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px;" src="{{url($pr->feature_image)}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$pr->name}}</h6>
                                            <span>{{number_format($pr->price)}} VND</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach($product->random(3) as $pr)
                                    <a href="{{route('product-detail', ['id'=>$pr->id])}}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img style="width: 100px;" src="{{url($pr->feature_image)}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$pr->name}}</h6>
                                            <span>{{number_format($pr->price)}} VND</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
@endsection
