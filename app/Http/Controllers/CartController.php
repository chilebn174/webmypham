<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Category;
use App\Components\CountCart;
use App\Product;
use App\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class CartController extends Controller
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
    public function getCart()
    {
        $arr=$this->getCountCart();
        $cart=session()->get('cart'.Auth::id());
        $brand = Brand::all();
        $category = Category::all();
        $user=session()->get('user');
        $total=$arr['total'];
        $num=$arr['num'];
        return view('user/cart', compact('user','category','num', 'brand','cart','total'));
    }

    public function  addToCart($id){
        $product=$this->product->find($id);
        $cart=session()->get('cart'.Auth::id());
        if(isset($cart[$id])){
            $cart[$id]['qty']=$cart[$id]['qty']+1;
        }else{
            $cart[$id]=[
                'name'=>$product->name,
                'price'=>$product->price,
                'qty'=>1,
                'image'=>$product->feature_image
            ];
        }
        session()->put('cart'.Auth::id(),$cart);

        return redirect('cart');

    }
    public function updateCart(Request $request){
        $cart=session()->get('cart'.Auth::id());
        if($cart!=array()){
            foreach ($cart as $key=> $item){

                $cart[$request->id_.$key]['qty']=$request['qty_'.$key];
            }}
        session()->put('cart'.Auth::id(),$cart);
        return redirect('cart');
    }
    public function deleteCart( $id){
        $cart=session()->get('cart'.Auth::id());
        unset($cart[$id]);
        session()->put('cart'.Auth::id(),$cart);
        return redirect('cart');
    }

}
