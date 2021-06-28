@extends('layouts.admin')

@section('title')
    <title>Order Detail</title>
@endsection
@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/list.js')}}"></script>
@endsection
@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Order', 'key' => 'Detail'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="" class="btn @if($order->status==0) btn-danger
                            @else btn-primary disabled
                            @endif float-left m-2">@if($order->status==0) Giao hàng
                            @else Đã giao hàng
                            @endif</a>
                        <a href="{{route('orders.print',['id'=>$order->id ])}}"

                           class="btn btn-primary float-right"> <i class="fa fa-print" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $productItem)
                                <tr>
                                    <th scope="row">{{$productItem->id}}</th>
                                    <td>{{$productItem->name}}</td>
                                    <td>{{number_format($productItem->price)}}</td>
                                    <td>{{$productItem->number}}</td>
                                    <td>{{number_format($productItem->money)}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $products->links() }}
                    </div>
                    <div class="col-md-4 form1">
                        <form action="{{route('orders.update',['id'=>$order->id])}}" method="post">
                            @csrf
                            @foreach($numbers as $number)

                                <b>Tổng số lượng: </b><span
                                    class="float-right number">{{number_format($number->number)}}</span><br>
                                <b>Tổng : </b><span class="float-right number">{{number_format($number->money)}}</span>
                                <br>
                                <div class="form-group">
                                    <b>Phí ship</b>
                                    <input type="text"
                                           class="form-control fee"
                                           name="fee" value="{{number_format($order->fee)}}"
                                    >
                                </div>
                                <input type="hidden" value="{{$order->status}}" name="status">
                                <input type="hidden" value="{{$order->fee}}" name="old_fee">
                                <div class="form-group">
                                    <b>Tổng tiền: </b><span
                                        class="float-right number">{{number_format($number->money-$order->fee)}}</span><br>
                                </div>

                            @endforeach
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
