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
            <div class="col-sm-12">
                <div class="features_items">
                    <h3 style="margin-bottom: 30px; text-transform: uppercase;">Thương hiệu</h3>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        <div class="single-products" style="margin-bottom: 50px; background-color:#c8f9e5;">
                            <div class="panel-heading">
                                <img src="{{url($brandsp -> image)}}" style="margin-bottom: 20px;" class="img-thumbnail"alt="" />
                                <h4  style="font-family:'Roboto', sans-serif; padding-bottom:20px;"> {!!$brandsp->content!!}
                                </h4>
                            </div>
                        </div>

                    </div>
                    <!--/category-productsr-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection