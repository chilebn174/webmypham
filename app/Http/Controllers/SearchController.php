<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Components\CountCart;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private $product;
    public function __construct(Product $product){
        $this->product=$product;
    }
    public function getCountCart(){
        $countCart= new CountCart();
        $arr=$countCart->countCart();
        return $arr;
    }
    public function getSearch(Request $r)
    {
        $num=$this->getCountCart()['num'];
        $category = Category::all();
        $user=session()->get('user');
        $pro=$this->product->latest()->paginate(3);
        $prAll=Product::where('name', 'like', '%' . $r->key . '%')->get();
        if(isset($_GET['soft_by'])){
            if($_GET['soft_by']=='tang_dan')
                    $prAll=Product::where('name', 'like', '%' . $r->key . '%')->orderBy('price','ASC')->paginate(12);
            else if($_GET['soft_by']=='thap_dan')
                    $prAll=Product::where('name', 'like', '%' . $r->key . '%')->orderBy('price','DESC')->paginate(12);
            else if($_GET['soft_by']=='kytu_az')
                    $prAll=Product::where('name', 'like', '%' . $r->key . '%')->orderBy('name','ASC')->paginate(12);
            else if($_GET['soft_by']=='kytu_za')
                    $prAll=Product::where('name', 'like', '%' . $r->key . '%')->orderBy('name','DESC')->paginate(12);
            }
        $brand = Brand::all();
        return view('user/search', compact( 'user','prAll','category','num','pro', 'brand'));


    }
    public function getSearchPrice(Request $r)
    {
        $num=$this->getCountCart()['num'];
        $category = Category::all();
        $user=session()->get('user');
        $pro=$this->product->latest()->paginate(3);
        $prAll=\DB::table('products')
            ->whereBetween('price', [substr($r->minamount, 0, -4), substr($r->maxamount, 0, -4)])
            ->get();
        $brand = Brand::all();
        if(isset($_GET['soft_by'])){
            if($_GET['soft_by']=='tang_dan')
                    $prAll=\DB::table('products')
                        ->whereBetween('price', [substr($r->minamount, 0, -4), substr($r->maxamount, 0, -4)])
                        ->orderBy('price',' ASC')->get();
            else if($_GET['soft_by']=='thap_dan')
                    $prAll=\DB::table('products')
                        ->whereBetween('price', [substr($r->minamount, 0, -4), substr($r->maxamount, 0, -4)])
                        ->orderBy('price',' DESC')->get();
            else if($_GET['soft_by']=='kytu_az')
                    $prAll=\DB::table('products')
                        ->whereBetween('price', [substr($r->minamount, 0, -4), substr($r->maxamount, 0, -4)])
                        ->orderBy('name ','ASC')->get();
            else if($_GET['soft_by']=='kytu_za')
                    $prAll=\DB::table('products')
                        ->whereBetween('price', [substr($r->minamount, 0, -4), substr($r->maxamount, 0, -4)])
                        ->orderBy('name ','DESC')->get();
        }
       return view('user/search', compact( 'user','prAll','category','num','pro', 'brand'));

    }
}
