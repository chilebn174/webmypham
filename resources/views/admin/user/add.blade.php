@extends('layouts.admin')

@section('title')
    <title>User | Add</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'User', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên </label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           placeholder="Nhập tên user..."
                                           value="{{old('name')}}"
                                    >
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email"
                                           placeholder="Nhập email..."
                                           value="{{old('email')}}"
                                    >
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               placeholder="Nhập password..."
                                        >
                                        <div class="input-group-addon border">
                                            <a href=""
                                            ><i class="fa fa-eye-slash" style="padding: 10px;"
                                                aria-hidden="true"></i></a>
                                        </div>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Chọn vai trò</label>
                                    <select name="role_id[]" class="form-control select2_init" multiple>
                                        <option value=""></option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->display_name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>ảnh dại diện</label><br>
                                    <img class="avatar avatar-128 img-circle img-thumbnail w-50"
                                         src="{{asset('admins/avatar_default.jpg')}}"/>

                                    <input type="file"
                                           class="form-control"
                                           name="image_path"
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
@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admins/user/add.js')}}"></script>
    <script>
        $(".select2_init").select2({
            placeholder: "Chọn  vai trò...",
            allowClear: true
        })
    </script>
@endsection
