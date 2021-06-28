@extends('layouts.master')
@section('content')
    <section id="form" >
        <!--form-->
        <div class="container">
            <div class="row" style="margin-left: 350px;">
                <div class="col-sm-6 m-3">
                        <h2 class="m-3">Đăng nhập tài khoản</h2>
                        @if(isset($mess))
                            <div class="alert alert-{{$mess->flag}}">{{$mess->message}}</div>
                        @endif
                    <div class="social-login">
                        <button class="btn btn-danger m-2 col-md-12"  type="button"><span><i class="fa fa-google-plus-g"></i> <a  href="{{route('google')}}" style="color: white">Sign in with Google+</a></span> </button>
                    </div>
                        <form action="{{route('check-login')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12 m-2">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" placeholder="Email Address" required name="email"/>
                                </div>
                            </div>
                            <div class="col-lg-12 m-2">
                                <div class="checkout__input">
                                    <p>Password<span>*</span></p>
                                    <input type="password" placeholder="Password" name="password" required/>
                                </div>
                            </div>
                            <a href="#" id="forgot_pswd" class="list-inline-item m-3">Quên mật khẩu</a>
                            <hr>
                            <a href="{{route('register')}}" class="list-inline-item m-3">Bạn chưa có tài khoản? Đăng ký</a><br>
                            <button type="submit" class="site-btn" style="margin-left: 100px;" >Đăng nhập</button>
                        </form>
                    <!--/login form-->
                </div>
            </div>
        </div>
    </section>
@endsection
