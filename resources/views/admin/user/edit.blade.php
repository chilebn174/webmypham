@extends('layouts.admin')

@section('title')
    <title>User | Edit</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'User', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <form action="{{route('users.update',['id'=>$user->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-5 d-inline-block">
                                <div class="form-group">
                                    <label>Tên </label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           placeholder="Nhập tên user..."
                                           value="{{$user->name}}"
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
                                           value="{{$user->email}}"
                                    >
                                    @error('name')
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
                                    <br>
                                    <select name="role_id[]" class="form-control select2_init" multiple>
                                        <option value=""></option>
                                        @foreach($roles as $role)
                                            <option {{$roleOfUser->contains('id', $role->id) ? 'selected':''}}
                                                    value="{{$role->id}}">{{$role->display_name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-5 d-inline-block float-right">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label><br><br>
                                    <img class="avatar avatar-96 img-thumbnail img-circle"
                                         style="margin-bottom:20px;width: 200px;height: 200px;"
                                         src="@if($user->image_path==null) {{asset('admins/avatar_default.jpg')}}
                                         @else {{url($user->image_path)}}

                                         @endif" id="blah"
                                    />
                                    <input type="file"
                                           class="form-control" style=" margin-top:16px"
                                           name="image_path"
                                           onchange="readURL(this);"
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
    <script src="{{asset('admins/user/uploadImg.js')}}"></script>
@endsection
