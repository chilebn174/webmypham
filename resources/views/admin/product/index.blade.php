@extends('layouts.admin')

@section('title')
    <title>Admin | Products</title>
@endsection
@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/list.js')}}"></script>
@endsection
@section('search')
    <form class="form-inline ml-3" method="" action="{{route('products.search')}}">
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
        @include('partials.content-header', ['name' => 'Product', 'key' => 'List'])


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('products.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Thương hiệu</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $productItem)

                                <tr>
                                    <th scope="row">{{$productItem->id}}</th>
                                    <td>{{$productItem->name}}</td>
                                    <td>{{ number_format($productItem->price)}}</td>
                                    <td>{{$productItem->quantity}}</td>
                                    <td>
                                        <img class="image" src="{{ url($productItem->feature_image)}}" alt=""/></td>
                                    <td>{{optional($productItem->category) ->name}}</td>
                                    <td>{{ optional($productItem->brand)->ten}}</td>
                                    <td>
                                        <a href="{{route('products.edit',['id'=>$productItem->id])}}"
                                           class="btn btn-default">Edit</a>
                                        <a href=""
                                           data-url="{{ route('products.delete', ['id' => $productItem->id]) }}"
                                           class="btn btn-danger action_delete">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$products->links()}}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

