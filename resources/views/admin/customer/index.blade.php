@extends('layouts.admin')

@section('title')
    <title>List Customer</title>
@endsection
@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/list.js')}}"></script>
@endsection
@section('search')
    <form class="form-inline ml-3" method="" action="{{route('customers.search')}}">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="key" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
@endsection
@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Customer', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('customers.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($customers as $customer)

                                <tr>
                                    <th scope="row">{{$customer->id}}</th>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>
                                        <a href="{{route('customers.edit',['id'=>$customer->id])}}"
                                           class="btn btn-default">Edit</a>
                                        <a href=""
                                           data-url="{{route('customers.delete',['id'=>$customer->id])}}"
                                           class="btn btn-danger action_delete">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $customers->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

