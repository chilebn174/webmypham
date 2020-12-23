<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Menu;
use App\Product;
use App\Slider;
use App\Tag;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $category;
    private $brand;
    private $menu;
    private $slider;
    private $product;
    private $tag;
    public function __construct(Category $category, Brand $brand, Menu $menu,
                                Slider $slider, Product $product, Tag $tag){
        $this->category = $category;
        $this->brand = $brand;
        $this->menu = $menu;
        $this->slider = $slider;
        $this->product = $product;
        $this->tag = $tag;
    }
    public function getCate()
    {
        $categories = $this->category->get();
        $brands = $this->brand->get();
        $menus = $this->menu->get();
        $sliders = $this->slider->get();
        $product = $this->product->skip(0)->take(4)->get();
        $productRc = $this->product->latest()->paginate(4);
        return view('user.trangchu', compact('categories',
            'brands','menus', 'sliders','product','productRc'));
    }
    public function getBrand($id)
    {
        $data = $this->brand->all();
//        $htmlSlelect = '';
//        foreach ($data as $value) {
//            if (!empty($value['id'])&&$value['id']==$id) {
//                $htmlSlelect .= $value['ten'];
//            }
//        }

//        return $htmlSlelect;
    }
    public function getCategory($id)
    {
        $data = $this->category->all();
        $htmlSlelect = '';
        foreach ($data as $value) {
            if (!empty($value['id'])&&$value['id']==$id) {
                $htmlSlelect .= $value['name'];
            }
        }
        return $htmlSlelect;
    }
        public function getDetail($id){
        $sliders = $this->slider->get();
        $categories = $this->category->get();
        $product=$this->product->find($id);
            $productRc=$this->product->latest()->paginate(4);
        $brandSelect=$this->brand->find($product->brand_id);
        $cateSelect=$this->category->find($product->category_id);
        $tag=$this->product->tags();
        $productImage=$this->product->productImage();
        $brands = $this->brand->get();
//            $countbrand=$this->getCountBrand($brands->id);
        $menus = $this->menu->get();
        return view('user.product-details', compact('categories','brandSelect',
            'sliders', 'brands','product', 'menus', 'cateSelect','tag','productRc', 'productImage'));
    }
//    public function getCountBrand($id){
//        $data = $this->product->all();
//        $brand=$this->brand->find($data->id);
//        $countbrand = 0;
//        foreach ($data as $value) {
//            if (!empty($value['id'])&&$value['id']==$id) {
//                $countbrand ++;
//            }
//        }
//        return $countbrand;
//    }
    public function getCart(){
        return view('user/cart');
    }
    public function getCheckout(){
        return view('user/checkout');
    }
    public function getShop(){
        return view('user/shop');
    }
    public function getLogin(){
        return view('user/login');
    }
    public function getContact(){
        return view('user/contact');
    }


}
