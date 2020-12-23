@extends('layouts.admin')

@section('title')
    <title>Product | Edit</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Product', 'key' => 'Edit'])
        <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post"
              enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text"
                                       class="form-control"
                                       value="{{$product->name}}"
                                       name="name"
                                       placeholder="Nhập tên sản phẩm..."
                                >
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text"
                                       class="form-control"
                                       value="{{$product->price}}"
                                       name="price"
                                       placeholder="Nhập giá sản phẩm..."
                                >
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file"
                                       class="form-control-file"
                                       name="feature_image" onchange="readURL(this);">
                                <div class="col-md-12" style="margin: 5px;">
                                    <div class="row">
                                        <img class="image" id="blah" src="{{ url($product->feature_image)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file"
                                       multiple
                                       class="form-control-file"
                                       name="image_path[]">
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach($product->productImage as $item)
                                            <div class="col-md-3" style="margin: 5px;">
                                                <img style="width: 125px;" src="{{ url($item->image)}}">
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Chọn danh mục </label>
                                <select class="form-control select2_init" name="category_id">
                                    <option value="">Chọn danh mục</option>
                                    {!! $htmlOptionCategory !!}
                                </select>
                            </div>
                            <div class="form-group ">
                                <label>Chọn thương hiệu </label>
                                <select class="form-control select2_init line_height" name="brand_id">
                                    <option value="">Chọn thương hiệu</option>
                                    {!! $htmlOptionBrand !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhập tag cho sản phẩm:</label>
                                <select class="form-control tags_select_choose" name="tags[]" multiple="multiple">
                                    @foreach($product->tags as $tags)
                                        <option value="{{$tags->name}}" selected> {{$tags->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" id="froala-editor" name="contents"
                                          rows="8">{{$product->content}}</textarea>
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
    <script src="{{asset('admins/user/uploadImg.js')}}"></script>
@endsection


