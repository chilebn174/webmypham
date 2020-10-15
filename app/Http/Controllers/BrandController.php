<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function index()
    {
        $brands = $this->brand->latest()->paginate(5);
        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        $data = $this->brand->all();
        return view('admin.category.add', compact('data'));
    }

    public function store(Request $request)
    {

    }
}
