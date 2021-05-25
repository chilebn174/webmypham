@extends('layouts/master')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Tìm thấy {{count($p)}} sản phẩm</h2>
                    @foreach($p as $prd)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{url($prd->feature_image)}}" alt="" />
                                    <h2>{{@number_format($prd->price,0)}} VNĐ</h2>
                                    <p style="height: 50px;">{{$prd->name}}</p>
                                </div>
                                <div class="contxt">
                                    <ul>
                                        <li>
                                            <a href="cart" style="margin-right: 10px; margin-left:25px;" class="btn"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="{{route('product-details',['id'=>$prd->id])}}" class="btn">Xem chi tiết</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Contents-->
@endsection