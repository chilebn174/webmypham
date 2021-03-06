@extends('layouts.admin')

@section('title')
    <title>List Slider</title>
@endsection
@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@10.js')}}"></script>
    <script src="{{asset('admins/product/list.js')}}"></script>
@endsection
@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'SLider', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('slider.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên slider</th>
                                <th scope="col">Description</th>
                                <th scope="col">Hinh ảnh</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sliders as $slider)

                                <tr>
                                    <th scope="row">{{$slider->id}}</th>
                                    <td>{{$slider->name}}</td>
                                    <td>{{$slider->description}}</td>
                                    <td><img src="{{ url($slider->image_path) }}" class="image"></td>
                                    <td>
                                        <a href="{{route('slider.edit',['id'=>$slider->id])}}"
                                           class="btn btn-default">Edit</a>
                                        <a href=""
                                           data-url="{{route('slider.delete',['id'=>$slider->id])}}"
                                           class="btn btn-danger action_delete">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $sliders->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

