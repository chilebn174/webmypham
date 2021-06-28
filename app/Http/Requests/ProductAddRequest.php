<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|unique:products|max:255|min:5',
            'price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'contents' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'name.unique' => 'Tên không được trùng nhau',
            'name.max' => 'Tên không được vượt quá 255 ký tự',
            'name.min' => 'Tên không được nhỏ hơn 5 ký tự',
            'price.required' => ' Giá không được bỏ trống',
            'category_id.required' => ' Danh mục không được bỏ trống',
            'brand_id.required' => 'Thương hiệu không được bỏ trống',
            'contents.required' => 'Nội dung không được bỏ trống',
        ];
    }
}
