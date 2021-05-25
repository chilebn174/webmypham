@extends('layouts/master')
@section('content')
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h3 style="margin-left: 10px;">Thương hiệu</h3>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach($brand as $br)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a href="{{route('brand',['id'=>$br->id])}}">
                                        {{$br->ten}}
                                    </a>
                                </h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/category-productsr-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">{{$category->name}}</h2>
                    @foreach($product as $pr)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{url($pr->feature_image)}}" alt="" />
                                    <h2>{{@number_format($pr->price,0)}} VNĐ</h2>
                                    <p style="height: 80px;">{{$pr->name}}</p>
                                </div>
                                <div class="contxt">
                                    <ul>
                                        <li>
                                            <a href="cart" style="margin-left: -20px; margin-right:5px;" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="{{route('product-details',['id'=>$pr->id])}}" class="btn">Xem chi tiết</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    {{$product->links()}}
                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection