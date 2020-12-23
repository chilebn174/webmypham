<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">New products</h2>
    @foreach($product as $pr)
        <a href="{{route('product-details',['id'=>$pr->id])}}"><div class="col-sm-3 product-item">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{url($pr->feature_image)}}"  />
                        <h2>{{number_format($pr->price)}} VND</h2>
                        <p style="height: 50px;">{{$pr->name}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        </a>
    @endforeach
</div>
