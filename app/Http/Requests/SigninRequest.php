<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:15',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'You should write your email',
            'email.email' => 'A valid email is required',
            'password.required' => 'You should write a password, 6 to 15 characters',
        ];
    }
}