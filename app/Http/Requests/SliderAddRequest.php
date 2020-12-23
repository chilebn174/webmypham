<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:sliders|max:255|min:5',
            'image_path' => 'required',
            'description' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'name.unique' => 'Tên không được trùng nhau',
            'name.max' => 'Tên không được vượt quá 255 ký tự',
            'name.min' => 'Tên không được nhỏ hơn 5 ký tự',
            'description.required' => ' Nội dung không được bỏ trống',
            'image_path.required' => 'Ảnh không được bỏ trống',
        ];
    }
}
