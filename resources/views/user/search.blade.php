@extends('user/shop')
@section('list-item')
{{--   <h3><b>{{$cateID->name}}</b></h3>--}}
    <div class="col-lg-9 col-md-7">
        <div class="filter__item">
            <div class="row">
                <div class="text-center"><h3><b>Tìm kiếm</b></h3></div>
                <div class="col-lg-4 col-md-5">
                    <div class="filter__sort">
                        <select name="soft-by" id="soft">
                            <option value="0">Tìm kiếm</option>
                            <option value="{{request()->url()}}?soft_by=tang_dan">Giá từ thấp đến cao</option>
                            <option value="{{request()->url()}}?soft_by=thap_dan">Giá từ cao đến thấp</option>
                            <option value="{{request()->url()}}?soft_by=kytu_az">Tên từ A -> Z</option>
                            <option value="{{request()->url()}}?soft_by=kytu_za">Tên từ Z -> A</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="filter__found">
                        <h6> Các kết quả tìm thấy: <span>{{$prAll->count()}}</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($prAll as $pr)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{url($pr->feature_image)}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{route('addtocart',['id'=>$pr->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="{{route('product-detail',['id'=>$pr->id])}}">{{$pr->name}}</a></h6>
                            <h5>{{number_format($pr->price)}} VND</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
{{--        {{$product->links()}}--}}
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#soft').on('change', function (){
                var url =$(this).val();
                if(url ){
                    window.location=url;
                }
                return false;
            });

        });
    </script>
@endsection
