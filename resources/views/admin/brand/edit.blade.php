@extends('layouts.admin')

@section('title')
    <title>Brand | Edit</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Brand', 'key' => 'Edit'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('brands.update',['id'=>$brand->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên thương hiệu</label>
                                    <input type="text"
                                           class="form-control @error('ten') is-invalid @enderror"
                                           name="ten"
                                           placeholder="Nhập tên thương hiêuh..."
                                           value="{{$brand->ten}}"
                                    >
                                    @error('ten')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input type="file"
                                           class="form-control @error('image') is-invalid @enderror"
                                           name="image"
                                           onchange="readURL(this);"
                                    >
                                    <div class="col-md-12" style="margin: 5px;">
                                        <div class="row">
                                            <img id="blah" src="{{ url($brand->image)}}">
                                        </div>
                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control @error('contents') is-invalid @enderror"
                                              id="froala-editor"
                                              name="contents" rows="8">
                                       {{$brand->content}}
                                    </textarea>
                                    @error('contents')
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
