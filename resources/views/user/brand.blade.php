@extends('user.brand')
@section('brand')
    <section>
<div class="tab-content">
    @foreach($brandId as $br)
        <div class="col-sm-3 product-item">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{url($br->feature_image)}}"  />
                        <h2>{{number_format($br->price)}} VND</h2>
                        <p style="height: 50px;">{{$br->name}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
