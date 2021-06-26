<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:6|max:30',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm' => 'required|same:password'
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'name.min' => 'Tên phải lớn hơn 6 ký tự',
            'name.max' => 'Tên không được vượt quá 30 ký tự',
            'email.required' => ' Nội dung không được bỏ trống',
            'password.required' => 'password không được bỏ trống',
            'email.email' => 'Theo format email',
            'confirm.same'=> 'Nội dung phải giống password'
        ];
    }
}
