<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Components\CountCart;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contact;
    public function __construct(Contact $contact){
        $this->contact=$contact;
    }
    public function getCountCart(){
        $countCart= new CountCart();
        $arr=$countCart->countCart();
        return $arr;
    }
    public function getContact()
    {
        $num=$this->getCountCart()['num'];
        $user=session()->get('user');
        $category = Category::all();
        $brand = Brand::all();
        return view('user/contact', compact('num','user','category','brand'));
    }
    public function postContact(Request $request)
    {
        $this->contact->create($request->except('_token'));
        return redirect()->back();
    }
}
