@extends('layouts/master')
@section('content')
<!--slider-->
<section>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i=0;$i<count($sliders);$i++)<li data-target="#slider-carousel" data-slide-to="{{$i}}" class="{{$i==0?'active':''}}"></li>@endfor
                </ol>
                <div class="carousel-inner">
                    @foreach($sliders  as $key=>$slider)
                        <div class="item {{$key==0? 'active' : ''}}">
                            <div class="col-xs-12">
                                <img src="{{url($slider->image_path) }}" class="girl"
                                     style="width: 1300px;margin-left: -30px;" />
                            </div>
                        </div>
                    @endforeach
                </div>

                <a href="#slider-carousel" style="margin-left: 15px;" class="left control-carousel hidden-xs" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

        </div>
    </div>
</div>
</section>
<!--/slider-->
<!--Content-->
<section>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-sm-12 padding-right">
                @include('user.new-product')

                <!--features_items-->
                @include('user.recommend-product')

            </div>
        </div>
    </div>
</section>
<!--/Contents-->
@endsection
