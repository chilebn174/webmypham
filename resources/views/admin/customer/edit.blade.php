@extends('layouts.admin')

@section('title')
    <title>Customer | Edit</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Customer', 'key' => 'Edit'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('customers.update',['id'=>$customer->id])}}" method="post">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên khách hàng</label>
                                    <input type="text"
                                           class="form-control "
                                           name="name"
                                           placeholder="Nhập tên khách hàng..."
                                           value="{{$customer->name}}"
                                    >

                                </div>

                                <div class="form-group">
                                    <label>Điện thoại </label>
                                    <input type="text"
                                           class="form-control "
                                           name="phone"
                                           placeholder="Nhập số điện thoại..."
                                           value="{{$customer->phone}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text"
                                           class="form-control"
                                           name="address"
                                           placeholder="Nhập địa chỉ..."
                                           value="{{$customer->address}}"
                                    >

                                </div>
                            </div>
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

