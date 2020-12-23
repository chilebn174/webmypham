@extends('layouts.admin')

@section('title')
    <title>Product | Add</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])

        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name"
                                       placeholder="Nhập tên sản phẩm..."
                                       value="{{old('name')}}"
                                >
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text"
                                       class="form-control @error('price') is-invalid @enderror"
                                       name="price"
                                       placeholder="Nhập giá sản phẩm..."
                                       value="{{old('price')}}"
                                >
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file"
                                       class="form-control-file"
                                       name="feature_image"
                                >
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file"
                                       multiple
                                       class="form-control-file"
                                       name="image_path[]"
                                >
                            </div>
                            <div class="form-group ">
                                <label>Chọn danh mục </label>
                                <select class="form-control select2_init @error('category_id') is-invalid @enderror"
                                        name="category_id">
                                    <option value="">Chọn danh mục</option>
                                    {!! $htmlOptionCategory !!}
                                </select>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label>Chọn thương hiệu </label>
                                <select
                                    class="form-control select2_init2 line_height @error('brand_id') is-invalid @enderror"
                                    name="brand_id">
                                    <option value="">Chọn thương hiệu</option>
                                    {!! $htmlOptionBrand !!}
                                </select>
                                @error('brand_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nhập tag cho sản phẩm:</label>
                                <select class="form-control tags_select_choose" name="tags[]" multiple="multiple">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control @error('contents') is-invalid @enderror"
                                          id="froala-editor" name="contents" rows="8">
                                {{old('contents')}}
                            </textarea>
                                @error('contents')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admins/product/js/froala_editor.pkgd.min.js')}}"></script>
    <script src="{{asset('admins/product/add.js')}}"></script>
    <script>
        $(".select2_init2").select2({
            placeholder: "Chọn  thương hiệu...",
            allowClear: true
        })
    </script>
@endsection


