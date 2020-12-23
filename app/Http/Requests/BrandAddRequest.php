<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandAddRequest extends FormRequest
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

    public function rules()
    {
        return [
            'ten' => 'bail|required|unique:brands|max:255',
            'image' => 'required',
            'contents' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'ten.required' => 'Tên không được bỏ trống',
            'ten.unique' => 'Tên không được trùng nhau',
            'ten.max' => 'Tên không được vượt quá 255 ký tự',
            'contents.required' => ' Nội dung không được bỏ trống',
            'image.required' => 'Ảnh không được bỏ trống',
        ];
    }
}
