<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
session_start();
class CartController extends Controller
{

    public function getCart(Request $request){
        $categories = $this->category->get();
        $brands = $this->brand->get();
        $menus = $this->menu->get();
        $sliders = $this->slider->get();
        $productId=$request->product_id;
        $number=$request->number;
        $product=$this->product->find($productId);
        return view('user/cart', compact('categories','brands','menus','sliders'));
    }

}
