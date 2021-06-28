@extends('layouts.master')
@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="user/img/images.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('trang-chu')}}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table class="update_cart_url" data-url="{{route('updatecart')}}">
                            <thead>
                            <tr>
                                <th class="shoping__product">Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <form action="{{route('updatecart')}}">
                                @if($cart!= null)
                            @foreach($cart as $key => $item)
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="{{url($item['image'])}}" alt="" style="width: 100px">
                                    <h5>{{$item['name']}}  </h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{number_format($item['price'])}}
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{$item['qty']}}" name="qty_{{$key}}">
                                            <input type="hidden"  value="{{$key}}" name="id_{{$key}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{number_format($item['qty']*$item['price'])}}
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a href="{{route('deletecart',['id'=>$key])}}"><span class="icon_close"></span></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{route('trang-chu')}}" class="primary-btn cart-btn">TIẾP TỤC MUA HÀNG</a>
                        <button type="submit" class="primary-btn cart-btn cart-btn-right" style="border: 0px"><span class="icon_loading"></span>
                            CẬP NHẬT</button>
                    </div>
                    </form>
                </div>
                <div class="col-lg-6">
{{--                    <div class="shoping__continue">--}}
{{--                        <div class="shoping__discount">--}}
{{--                            <h5>Discount Codes</h5>--}}
{{--                            <form action="#">--}}
{{--                                <input type="text" placeholder="Enter your coupon code">--}}
{{--                                <button type="submit" class="site-btn">APPLY COUPON</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng tiền</h5>
                        <ul>
                            <li>Tạm Tính <span>{{number_format($total)}} VND </span></li>
                            <li>Tổng <span>{{number_format($total)}} VND </span></li>
                        </ul>
                        <a href="@if(isset($user)){{route('checkout')}}  @else {{route('login')}}@endif" class="primary-btn">ĐẶT HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
