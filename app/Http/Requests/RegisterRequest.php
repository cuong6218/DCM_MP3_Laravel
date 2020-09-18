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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:2'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên đăng kí không được để trống ',
            'email.required'=>'Email không được để trống',
            'password.required'=>'Password không được để trống',
            'password.min'=>'Password không được ít hơn 2 kí tự'
        ];
    }
}
