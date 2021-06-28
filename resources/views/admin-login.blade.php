<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admins/fontawesome-free/css/font-awesome.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{asset('admins/product/css/froala_editor.pkgd.min.css')}}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('admins/boostrap/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/dist/css/adminlte.min.css')}}" rel="stylesheet"/>
    <title>Admin Login</title>
</head>
<body>
<div id="logreg-forms" style="margin-left: 500px;">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
        <form  style="margin-top: 90px" action="{{route('post-admin')}}" method="post">
            @csrf
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Đăng nhập</h1>

            @if(isset($fail))
                <div class="alert alert-danger" role="alert">{{ $fail }}</div>
            @endif
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Địa chỉ  Email" required="" autofocus="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <span class="m-3">Nhớ mật khẩu</span>
        <button class="btn btn-success btn-block" type="submit"><i class="fa fa-sign-in"></i> Đăng nhập</button>

    </form>

    </div>
        </div>
        </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/script.js"></script>
</body>
</html>
