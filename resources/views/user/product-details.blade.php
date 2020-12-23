@extends('layouts/master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach($categories as $key=>$category)

                            @if($category->parent_id==0)
                        <div class="panel panel-default">
                            <div class="panel-heading dropdown">
                                <h4 class="panel-title">
                                    <a  data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        {{$category->name}}
                                    </a>
                                </h4>
                            </div>


                            <div id="sportswear" class="panel-collapse ">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($categories as $cate)
                                        @if($cate->parent_id==$category->id)<li><a href="">{{$cate->name}} </a></li>@endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div>
                    <!--/category-products-->

                    <div class="brands_products">
                        <!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                @foreach($brands as $brand)
                                <li><a href=""> <span class="pull-right">
                                            3</span>{{$brand->ten}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--/brands_products-->

                    <div class="price-range">
                        <!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div>
                    <!--/price-range-->

                    <!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{url($product->feature_image)}}" style="height: 310px;" />
                        </div>

                        <div id="similar-product" class="carousel slide" data-ride="carousel">
                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            @foreach($product->productImage as $image)
                            <img src="{{url($image->image)}}" style="height: 100px;" />@endforeach

                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2>{{$product->name}}</h2>
                            <p>Web ID: 1089772</p>
                            <span>
                                <span>{{number_format($product->price)}} VNĐ</span>
                                <label>Số lượng:</label>
                                <input type="number" value="1" />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>
                            <p><b>Danh mục:</b> {{$cateSelect->name}}</p>
                            <p><b>Thương hiệu:</b> <a >{{$brandSelect->ten}}</a></p>
                            <p><b>Tags:</b>@foreach($product->tags as $tags)
                                    <a class="btn btn-link" >
                                    {{$tags->name}}</a>
                                @endforeach</p>
                        </div>
                        <!--/product-information-->
                    </div>
                </div>
                <!--/product-details-->

                <div class="category-tab shop-details-tab" style="margin-top: 30px;">
                    <!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Chi tiết</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">Thương hiệu</a></li>
                            <li><a href="#tag" data-toggle="tab">Tag</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="details">
                            <div class="col-sm-12">
                                <div class="product-image-wrapper">
                                    {!! $product->content !!}
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="companyprofile">
                            <div class="col-sm-12">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{url($brandSelect->image)}}" style="width: 600px;" />
                                            <h2>{{$brandSelect->name}}</h2>
                                            {!! $brandSelect->content !!}
                                            <a  class="btn btn-primary" href=""><i class="fa fa-plus"></i>Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!--/category-tab-->

                @include('user.recommend-product')
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
@endsection
