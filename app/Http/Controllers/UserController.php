<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Components\CountCart;
use App\Product;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\CartController;

class UserController extends Controller
{
    private $category;
    private $brand;
    private $product;
    private $slider;

    public function __construct(Category $category, Brand $brand, Product $product, Slider $slider)
    {
        $this->category = $category;
        $this->brand = $brand;
        $this->product=$product;
        $this->slider =$slider;
    }
    public function getCountCart(){
        $countCart= new CountCart();
        $arr=$countCart->countCart();
        return $arr;
    }
    public function getIndex()
    {
        $num=$this->getCountCart()['num'];
        $user=session()->get('user');
        $category= $this->category->all();
        $brand=$this->brand->paginate(10);
        $product=Product::all();
        $productLat=$this->product->latest()->paginate(3);
        $slider=Slider::all()->random(4);

         return view('user/trangchu', compact('category','num', 'brand','product', 'slider','productLat','user'));


    }

    public function getDetail(Request $req)
    {
        $num=$this->getCountCart()['num'];
        $user=session()->get('user');
        $slider=Slider::all()->random(4);
        $brand = Brand::all();
        $category = Category::all();
        $produc = Product::where('id', $req->id)->first();
        $productLat=$this->product->latest()->paginate(4);
        return view('user/product-details', compact('user','category','num', 'produc','brand', 'slider','productLat'));
    }


    public function getCategory($id)
    {
        $num=$this->getCountCart()['num'];
        $category = Category::all();
        $user=session()->get('user');
        $cateID = Category::find($id);
        $prAll = Product::where('category_id', '=', $id)->paginate(12);
        $pro=$this->product->latest()->paginate(3);
        $product=Product::where('category_id', '=', $id)->paginate(12);
        if(isset($_GET['soft_by'])){
            if($_GET['soft_by']=="tang_dan")
                $product=Product::where('category_id', '=', $id)->orderBy('price')->paginate(12);
            else if($_GET['soft_by']=="tang_dan")
                $product=Product::where('category_id', '=', $id)->orderBy('price','desc')->paginate(12);
            else if($_GET['soft_by']=="kytu_az")
                $product=Product::where('category_id', '=', $id)->orderBy('name')->paginate(12);
            else if($_GET['soft_by']=="kytu_za")
                $product=Product::where('category_id', '=', $id)->orderBy('name','desc')->paginate(12);

        }

        $brand = Brand::all();
        return view('user/list-item', compact( 'user','category','num','cateID','pro', 'product', 'brand', 'prAll'));
    }
    public function getShop(){
        $num=$this->getCountCart()['num'];
        $user=session()->get('user');
        $slider=Slider::all()->random(4);
        $brand = Brand::all();
        $category = Category::all();
        $prAll=Product::all();
        $i=0;
        $pro= $this->product->latest()->paginate(3);
        $product=$this->product->paginate(12);
        if(isset($_GET['tag'])){
            $product=DB::table('products')->join('product_tags','product_tags.product_id','=','products.id')->where('tag_id',$_GET['tag'])->paginate(12);
        }
        return view('user/list-item', compact('user','product','num','slider','i', 'category','brand','prAll','pro'));
    }
    public function getBrand(Request $request)
    {
        $num=$this->getCountCart()['num'];
        $user=session()->get('user');
        $category = Category::all();
        $brand = Brand::all();
        $slider=Slider::all()->random(4);
        $productBr=Product::where('brand_id', $request->id)->get();
        $nProduct=$productBr->count();
        $brandsp = Brand::where('id', $request->id)->first();
        $numBr=$this->brand->numBr()->count();
        return view('user/brand', compact('user','category', 'num','brand', 'brandsp', 'slider', 'numBr','productBr','nProduct'));
    }


    public function getlienhe(){
        return view('user.lien-he');
    }
}
