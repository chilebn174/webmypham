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
                <div class="col-sm-4">
                    <div class="signup-form">
                        <!--sign up form-->
                        <h2>Đăng ký tài khoản mới!</h2>
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors -> all() as $err)
                            {{$err}}
                            @endforeach
                        </div>
                        @endif

                        @if(Session::has('Success'))
                        <div class="alert alert-success">{{Session::get('Success')}}</div>
                        @endif
                        <form action="register" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                            <input type="text" placeholder="Name" name="name" required />
                            <input type="email" placeholder="Email Address" name="email" required />
                            <input type="password" placeholder="Password" name="password" required />
                            <input type="submit" class="btn btn-default" value="Đăng ký" >
                        </form>
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
    <!--/form-->
</body>

</html>