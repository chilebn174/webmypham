<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">recommended items</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($productRc as $rc)
                <a href="{{route('product-details',['id'=>$rc->id])}}">
                <div class="item active">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{url($rc->feature_image)}}" alt="" />
                                    <h2>{{ number_format($rc->price) }} VND</h2>
                                    <p style="height: 50px;">{{$rc->name}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div></a>
            @endforeach
        </div>
        <a class="left recommended-item-control" href="{{$productRc->previousPageUrl()}}" data-slide="prev">
            <i class="fa fa-angle-left"></i>

        </a>
        <a class="right recommended-item-control" href="{{$productRc->nextPageUrl()}}" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>

    </div>
</div>

