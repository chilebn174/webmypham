<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang chủ</title>
    <base href="{{ asset('') }}">
    <link href="{{asset('users/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('users/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="users/css/prettyPhoto.css" rel="stylesheet">
    <link href="users/css/price-range.css" rel="stylesheet">
    <link href="users/css/animate.css" rel="stylesheet">
    <link href="users/css/main.css" rel="stylesheet">
    <link href="users/css/responsive.css" rel="stylesheet">
    <link href="{{asset('users/css/home.css')}}" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="users/images/ico/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="users/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="users/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="users/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="users/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <!--header-->
    @include('UserCommon.header')
    <!--/header-->

    <!--Contents-->
    @yield('content')
    <!--/Contents-->

    <!--Footer-->
    @include('UserCommon/footer')
    <!--/Footer-->



    <script src="users/js/jquery.js"></script>
    <script src="users/js/bootstrap.min.js"></script>
    <script src="users/js/jquery.scrollUp.min.js"></script>
    <script src="users/js/price-range.js"></script>
    <script src="users/js/jquery.prettyPhoto.js"></script>
    <script src="users/js/main.js"></script>
</body>

</html>
