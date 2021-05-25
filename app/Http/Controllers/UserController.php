<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\ProductImage;
use App\Slider;
use App\User;
use App\User\images\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function getIndex()
    {
        $slide = Slider::latest()->get();
        $categorys = Category::where('parent_id', 'id')->get();
        $products = Product::inRandomOrder()->limit(3)->get();
        $prod = Product::take(9)->get();
        return view('user/trangchu', compact('slide', 'categorys', 'products', 'prod'));
    }

    public function getDetail(Request $req)
    {
        $categorys = Category::where('parent_id', 'id')->get();
        $produc = Product::where('id', $req->id)->first();
        return view('user/product-details', compact('categorys', 'produc'));
    }
    public function getCart()
    {

        return view('user/cart');
    }
    public function getCheckout()
    {
        return view('user/checkout');
    }
    public function getShop($id)
    {
        $categorys = Category::where('parent_id', 'id')->get();
        $category = Category::find($id);
        $product = Product::where('category_id', '=', $id)->paginate(9);
        $brand = Brand::all();
        return view('user/shop', compact('categorys', 'category', 'product', 'brand'));
    }
    public function getBrand(Request $request)
    {
        $categorys = Category::where('parent_id', 'id')->get();
        $brand = Brand::all();
        $brandsp = Brand::where('id', $request->id)->first();
        return view('user/brand', compact('categorys', 'brand', 'brandsp'));
    }
    public function getLogin()
    {
        return view('user/login');
    }
    public function getRegister()
    {
        return view('user/register');
    }
    public function getContact()
    {
        return view('user/contact');
    }
    public function getSearch(Request $r)
    {
        $categorys = Category::where('parent_id', 'id')->get();
        $p = Product::where('name', 'like', '%' . $r->key . '%')
            ->orWhere('price', $r->key)->get();
        return view('user/search', compact('categorys', 'p'));
    }

    public function postRegister(Request $req)
    {
        $this->validate(
            $req,
            [
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6|max:20',
                'name' => 'required'
            ],
            [
                'email.email' => 'Không đúng định dang',
                'email.unique' => 'Đã có người sử dụng email này',
                'password.min' => 'Mật khẩu phải từ 6 tới 20 ký tự'

            ]
        );
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->back()->with('Success', 'Tạo tài khoản thành công');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'min:6|max:20'

        ], [
            'email.email' => 'Hãy nhập email đúng định dạng',
            'email.required' => 'Hãy nhập email',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu nhiều nhất 20 ký tự'

        ]);
        $credentials = array('email' => $req->email, 'password' => $req->password);
        if (Auth::attempt($credentials))
            return redirect()->route('trang-chu');
        else return redirect()->back()->with(['flag' => 'danger', 'message' => 'Đăng nhập thất bại! Email hoặc mật khẩu không đúng']);
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
