<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index(){
        $messages=Contact::all();
        return view('admin.contact.index', compact('messages'));
    }
}
