<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
@yield('title')
<!-- Font Awesome Icons -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('admins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admins/fontawesome-free/css/font-awesome.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" rel="stylesheet">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/product/css/froala_editor.pkgd.min.css')}}" rel="stylesheet">
    <link href="{{asset('admins/product/add.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/product/list.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/order/detail.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/boostrap/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/dist/css/adminlte.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('partials.header')
    @include('partials.siderbar')
    @yield('content')
    @include('partials.footer')
</div>
<!-- jQuery -->
<script src="{{ asset('admins/js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admins/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admins\dist\js\adminlte.min.js') }}"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- OPTIONAL SCRIPTS -->


@yield('js')
</body>
</html>
