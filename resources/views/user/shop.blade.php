@extends('layouts/master')
@section('content')
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">

                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục</h4>
                                        <ul>
                                            <li><a href="{{route('shop')}}"><b>All</b></a></li>
                                            @foreach($category as $cat)
                                                @if($cat->parent_id==0)
                                                    <li><a href="{{route('category',['id'=>$cat->categoryChirldrent()->first()->id])}}"><b>{{$cat->name}}</b></a>
                                                        @foreach($category as $c)
                                                            @if($c->parent_id==$cat->id)
                                                                <ul style="margin-left: 30px;">
                                                                    <li><a href="{{route('category',['id'=>$c->id])}}">{{$c->name}} ({{$c->numCate()->count()}})</a></li>
                                                                </ul>
                                                            @endif
                                                        @endforeach
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>

                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                     data-min="{{$prAll->min('price')}}" data-max="{{$prAll->max('price')}}">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <form method="" action="{{route('search-price')}}">
                                        @csrf
                                    <div class="price-input">
                                        <input type="text" id="minamount" name="minamount">
                                        <input type="text" id="maxamount" name="maxamount"><br>
                                        <button class="btn btn-dark" style="margin-top: 20px;">Lọc</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Sản phẩm mới</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        @foreach($pro as $p)
                                        <a href="{{route('product-detail',['id'=>$p->id])}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{url($p->feature_image)}}" alt="" style="width: 100px">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$p->name}}</h6>
                                                <span>{{number_format($p->price)}} VND</span>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('list-item')
            </div>
        </div>
    </section>
@endsection
