@extends('layouts.admin')

@section('title')
    <title>Brand | Add</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Brand', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('brands.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên thương hiệu</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Nhập tên thương hiệu"
                                >
                            </div>

                            <div class="form-group">
                                <label>Chọn ảnh đại diện</label>
                                <input type="file"
                                       class="form-control"
                                       name="image"
                                >
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" name="content" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

