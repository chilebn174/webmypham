<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderAddRequest;
use App\Slider;
use App\Traits\StorageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminSliderController extends Controller
{
    use StorageImage;

    private $slider;

    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $sliders = $this->slider->paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.add');
    }

    public function store(SliderAddRequest $request)
    {
        try {
            $dataInsert = [
                'name' => $request->name,
                'description' => $request->description
            ];
            $dataImage = $this->storageTraitUpload($request, 'image_path', 'slider');
            if (!empty($dataImage)) {
                $dataInsert['image_path'] = $dataImage['file_path'];
                $dataInsert['image_name'] = $dataImage['file_name'];
            }
            $this->slider->create($dataInsert);
            return redirect()->route('slider.index');
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
        }

    }

    public function edit($id)
    {
        $slider = $this->slider->find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        try {
            $dataUpdate = [
                'name' => $request->name,
                'description' => $request->description
            ];
            $dataImage = $this->storageTraitUpload($request, 'image_path', 'slider');
            if (!empty($dataImage)) {
                $dataUpdate['image_path'] = $dataImage['file_path'];
                $dataUpdate['image_name'] = $dataImage['file_name'];
            }
            $this->slider->find($id)->update($dataUpdate);
            return redirect()->route('slider.index');
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        try {
            $this->slider->find($id)->delete();
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
