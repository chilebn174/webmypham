<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="{{ asset('') }}">
    <link href="users/css/bootstrap.min.css" rel="stylesheet">
    <link href="users/css/font-awesome.min.css" rel="stylesheet">
    <link href="users/css/prettyPhoto.css" rel="stylesheet">
    <link href="users/css/price-range.css" rel="stylesheet">
    <link href="users/css/animate.css" rel="stylesheet">
    <link href="users/css/main.css" rel="stylesheet">
    <link href="users/css/responsive.css" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="users/images/ico/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="users/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="users/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="users/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="users/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
@include("UserCommon.topbar");
<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>Đăng nhập tài khoản</h2>
                    @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                    <form action="login" method="POST">
                        @csrf                        
                        <input type="email" placeholder="Email Address" required name="email"/>
                        <input type="password" placeholder="Password" name="password" required/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Nhớ mật khẩu
                        </span>
                        <a href="register">Bạn chưa có tài khoản? Đăng ký</a>
                        <input type="submit" class="btn btn-primary" value="Đăng nhập">
                    </form>
                </div>
                <!--/login form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->
</body>
</html>