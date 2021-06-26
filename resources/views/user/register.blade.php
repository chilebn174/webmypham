@extends('layouts.master')
@section('content')
    <section id="form" >
        <!--form-->
        <div class="container" >
            <div class="row"style="margin-left:400px ;">
                <div class="col-sm-9 m-3" >
                    <h2>Tạo một tài khoản mới</h2>
                    <form action="{{route('post-register')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-9 m-2">
                            <div class="checkout__input">
                                <p>Tên tài khoản<span>*</span></p>
                                <input type="text" placeholder="Tên tài khoản..." required name="name"/>
                            </div>
                        </div>
                        <div class="col-lg-9 m-2">
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="email" placeholder="Email Address" required name="email"/>
                            </div>
                        </div>
                        <div class="col-lg-9 m-2">
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="password" placeholder="Password" name="password" required/>
                            </div>
                        </div>
                        <div class="col-lg-9 m-2">
                            <div class="checkout__input">
                                <p>Confirm Password<span>*</span></p>
                                <input type="password" placeholder="Confirm Password" name="confirm" required/>
                            </div>
                        </div>

                        <button type="submit" class="site-btn" style="margin-left: 170px">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
