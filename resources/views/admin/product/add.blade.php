
@extends('layouts.admin')

@section('title')
    <title>Product | Add</title>
@endsection




@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])
        <form action="{{route('products.create')}}" method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Nhập tên sản phẩm..."
                                >
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text"
                                       class="form-control"
                                       name="price"
                                       placeholder="Nhập giá sản phẩm..."
                                >
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
                                       name="image[]"
                                >
                            </div>
                            <div class="form-group ">
                                <label>Chọn danh mục </label>
                                <select class="form-control select2_init" name="parent_id">
                                    <option value="">Chọn danh mục</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhập tag cho sản phẩm:</label>
                                <select class="form-control tags_select_choose" name="tags[]" multiple="multiple">

                                </select>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label >Nội dung</label>
                            <textarea class="form-control tinymce_editor_init" name="content" rows="8"></textarea>
                        </div>

                    </div>
                    <div class="col-md-12"><button type="submit" class="btn btn-primary">Submit</button></div>
                </div>
            </div>
        </div>
        </form>
    </div>

@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('//cdn.tinymce.com/4/tinymce.min.js')}}"></script>
    <script src="{{asset('admins/product/product.js')}}"></script>
@endsection


