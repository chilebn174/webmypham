@extends('layouts.admin')

@section('title')
    <title>Admin | Brands</title>
@endsection
@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/list.js')}}"></script>
@endsection

@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Brands', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('brands.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên thương hiệu</th>
                                <th scope="col">Ảnh đại điện</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <th scope="row">{{$brand->id}}</th>
                                    <td>{{$brand->ten}}</td>
                                    <td>
                                        <img src="{{ url($brand->image )    }}" alt=""/></td>
                                    <td>
                                        <a href="{{route('brands.edit',['id'=>$brand->id])}}"
                                           class="btn btn-default">Edit</a>
                                        <a href=""
                                           data-url="{{route('brands.delete',['id'=>$brand->id])}}"
                                           class="btn btn-danger action_delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$brands->links()}}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

