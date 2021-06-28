@extends('layouts.admin')

@section('title')
    <title>List Order</title>
@endsection
@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/list.js')}}"></script>
@endsection
@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Order', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Giá trị đơn hàng</th>
                                <th scope="col">Phí ship</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order)
                                <tr>
                                    <th scope="row">{{$order->order_id}}</th>
                                    <td>{{$order->name}}</td>
                                    <td>{{number_format($order->money)}}</td>
                                    <td>{{ number_format($order->fee     )}}</td>
                                    <td>@if($order->STATUS==0) Chưa giao hàng
                                        @else Đã giao hàng
                                        @endif</td>

                                    <td>
                                        <a href="{{route('orders.detail',['id'=>$order->order_id])}}"
                                           class="btn btn-default">Chi tiết</a>
                                        <a href=""
                                           data-url="{{route('orders.delete',['id'=>$order->order_id])}}"
                                           class="btn btn-danger action_delete">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $orders->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

