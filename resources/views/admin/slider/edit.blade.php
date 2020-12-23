@extends('layouts.admin')

@section('title')
    <title>Slider | Edit</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Slider', 'key' => 'Edit'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('slider.update',['id'=>$slider->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên slider</label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           placeholder="Nhập tên slider..."
                                           value="{{$slider->name}}"
                                    >
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Hình ảnh </label>
                                    <input type="file"
                                           class="form-control @error('image_path') is-invalid @enderror"
                                           name="image_path" onchange="readURL(this);"
                                           value="{{$slider->image_path}}"
                                    >
                                    <div class="col-md-12" style="margin: 5px;">
                                        <div class="row">
                                            <img class="image" id="blah" src="{{ url($slider->image_path)}}">
                                        </div>
                                    </div>
                                    @error('image_path')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                              id="froala-editor"
                                              name="description" rows="8">
                                       {{$slider->description}}
                                    </textarea>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
@section('js')

    <script src="{{asset('admins/product/js/froala_editor.pkgd.min.js')}}"></script>
    <script> $(function () {

            var froalaEditor = new FroalaEditor('#froala-editor');

        })</script>
    <script src="{{asset('admins/user/uploadImg.js')}}"></script>
@endsection
