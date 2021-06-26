<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function homeIndex()
    {
        return view('home');
    }
    public function loginAdmin()
    {
        $auth=false;
        $role=['admin','developer','content'];
        if (auth()->check()){
        foreach ($role as $item){
            $auth= auth()->user()->checkUser($item);
        }
            if($auth==true) {
            return view('home')->with('success', 'Đăng nhập thành công.');
        }
    }
        return view('admin-login');
    }

    public function postLoginAdmin(Request $request)
    {
        $credentials = ['email' =>$request->email, 'password' =>$request->password];
        if (Auth::attempt($credentials)){

            return redirect()->to('home');
        }
        return view('admin-login')->with('fail', 'Đăng nhập không thành công, sai username hoặc password.');
    }
    public function getLogoutAdmin(){
        Auth::logout();
        return redirect()->route('admin');
    }
}
