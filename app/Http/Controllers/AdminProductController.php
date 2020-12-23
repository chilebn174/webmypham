<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Components\Recusive;
use App\Http\Requests\ProductAddRequest;
use App\Product;
use App\ProductImage;
use App\ProductTag;
use App\Tag;
use App\Traits\StorageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminProductController extends Controller
{
    use StorageImage;

    private $category;
    private $brand;
    private $product;
    private $productImage;
    private $productTag;
    private $tag;

    public function __construct(Category $category, Brand $brand, Product $product, ProductImage $productImage
        , Tag $tag, ProductTag $productTag)
    {
        $this->category = $category;
        $this->brand = $brand;
        $this->product = $product;
        $this->productImage = $productImage;
        $this->productTag = $productTag;
        $this->tag = $tag;
    }

    public function index()
    {
        $products = $this->product->paginate(5);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $htmlOptionCategory = $this->getCategory($parentId = '');
        $htmlOptionBrand = $this->getBrand();
        return view('admin.product.add', compact('htmlOptionCategory'), compact('htmlOptionBrand'));
    }

    public function store(ProductAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataProductImage = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id
            ];
            $data = $this->storageTraitUpload($request, 'feature_image', 'product');
            if (!empty($data)) {
                $dataProductImage['feature_image'] = $data['file_name'];
                $dataProductImage['feature_image'] = $data['file_path'];
            }
            $product = $this->product->create($dataProductImage);
            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $fileItem) {
                    $dataProductImageDetail = $this->storageTraitUploadMutiple($fileItem, 'product');
                    $product->images()->create([
                        'image' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name']
                    ]);
                    $this->productImage::create([
                        'product_id' => $product->id,
                        'image' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name']
                    ]);
                }
            }
            //insert tags
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    $tagIntance = $this->tag->firstOrCreate(['name' => $tagItem]);
                    $tagIds[] = $tagIntance->id;
                }
            }
            $product->tags()->attach($tagIds);
            DB::commit();
            return redirect()->route('products.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
        }

    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->recusive($parentId);
        return $htmlOption;
    }

    public function getBrand()
    {
        $data = $this->brand->all();
        $htmlSlelect = '';
        foreach ($data as $value) {
            $id = $value['id'];
            if (!empty($id)) {
                $htmlSlelect .= "<option  value='" . $value['id'] . "'>" . $value['ten'] . "</option>";
            }

        }
        return $htmlSlelect;
    }

    public function edit($id)
    {
        $product = $this->product->find($id);
        $htmlOptionCategory = $this->getCategory($product->category_id);
        $htmlOptionBrand = $this->getBrand($product->brand_id);
        return view('admin.product.edit', compact('htmlOptionCategory', 'htmlOptionBrand', 'product'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataProductUpdate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image', 'product');
            if (!empty($dataUploadFeatureImage)) {
                $dataProductUpdate['image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductUpdate['feature_image'] = $dataUploadFeatureImage['file_path'];
            }
            $this->product->find($id)->update($dataProductUpdate);
            $product = $this->product->find($id);

            // Insert data to product_images
            if ($request->hasFile('image_path')) {
                $this->productImage->where('product_id', $id)->delete();
                foreach ($request->image_path as $fileItem) {
                    $dataProductImageDetail = $this->storageTraitUploadMutiple($fileItem, 'product');
                    $product->images()->create([
                        'image' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name']

                    ]);
                }
            }

            // Insert tags for product
            $tagIds = [];
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    // Insert to tags
                    $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                    $tagIds[] = $tagInstance->id;
                }

            }
            $product->tags()->sync($tagIds);
            DB::commit();
            return redirect()->route('products.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
        }

    }

    public function delete($id)
    {
        try {
            $this->product->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);

        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }

}

