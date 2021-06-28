<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\BrandAddRequest;
use App\Traits\StorageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminBrandController extends Controller
{
    use StorageImage;

    private $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function index()
    {
        $brands = $this->brand->paginate(5);
        return view('admin.brand.index', compact('brands'));
    }
    public function search(Request $r)
    {
        $brands = Brand::where('ten', 'like', '%' . $r->key . '%')
            ->orWhere('id', $r->key)->paginate(5);
        return view('admin.brand.index', compact('brands'));
    }
    public function create()
    {
        return view('admin.brand.add');
    }

    public function store(BrandAddRequest $request)
    {
            $dataInsert = [
                'ten' => $request->ten,
                'content' => $request->contents
            ];
            $dataImage = $this->storageTraitUpload($request, 'image', 'brand');
            if (!empty($dataImage)) {
                $dataInsert['image'] = $dataImage['file_path'];
                $dataInsert['img_name'] = $dataImage['file_name'];
            }
            $this->brand->create($dataInsert);
            return redirect()->route('brands.index');

    }

    public function edit(Request $request, $id)
    {
        $brand = $this->brand->find($id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        try {
            $dataUpdate = [
                'ten' => $request->ten,
                'content' => $request->contents
            ];
            $dataImage = $this->storageTraitUpload($request, 'image', 'brand');
            if (!empty($dataImage)) {
                $dataUpdate['image'] = $dataImage['file_path'];
                $dataUpdate['img_name'] = $dataImage['file_name'];
            }
            $this->brand->find($id)->update($dataUpdate);
            return redirect()->route('brands.index');
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        try {
            $this->brand->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => ' Delete success'
            ], 200);


        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => ' Delete fail'
            ], 500);
        }
    }
}
