@extends('layouts/master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{url($produc->feature_image)}}" alt="" />
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""><img src="" alt=""></a>
                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2 style="margin-left:-10px;">{{$produc->name}}</h2>
                            <p>@for($i=1; $i<=5; $i++) <i class="fa fa-star-o"></i>@endfor</p>
                            <span>
                                <p style="color: #f76e90; font-size:25px;">
                                    {{@number_format($produc->price,0)}} VNĐ</p><br>
                                <label>Số lượng: <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1"></label>
                            </span>
                            <br>
                            <p><b>Thương hiệu:</b> E-SHOPPER</p><br>
                            <p><b>Tình trạng: </b>Còn hàng</p>
                            <div class="contxt">
                                <ul>
                                    <li>
                                        <a href="cart" style="margin-top: 50px; margin-left: -40px; margin-right:10px;" class="btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                        <a href="checkout" style="margin-top: 50px;" class="btn">Mua ngay</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/product-information-->
                        </div>

                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#" data-toggle="tab">Chi tiết</a></li>
                                <li><a href="#reviews" data-toggle="tab">Đánh giá (5)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <p style="font-family: 'Roboto', sans-serif; margin-top:30px;">{!!$produc->content!!}</p>
                                    <p><b>Viết đánh giá</b></p>
        
                                    <form action="#" method="POST">
                                        <span>
                                            <input type="text" placeholder="Tên" />
                                            <input type="email" placeholder="Địa chỉ email" />
                                        </span>
                                        <textarea name=""></textarea>
                                        <button type="button" class="btn btn-default pull-right">
                                            Gửi đánh giá
                                        </button>
                                    </form> 
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/category-tab-->
                </div>
            </div>
        </div>
</section>
@endsection