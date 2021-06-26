<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getRegister()
    {
        $num=0;
        $category = Category::all();
        $brand = Brand::all();
        return view('user/register', compact('category', 'brand','num'));
    }
    public function postRegister(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->save();
        if($user->id){
            return redirect()->route('login');
        }else return redirect()->back();

    }
}
