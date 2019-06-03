<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SignupRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        
        return [
            'name' => 'required|min:2|max:15',
            'email' => 'required|email|unique:users,email' .$item_id,
            'password' => 'required|min:6|max:15',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You should write your name, min 2 characters',
            'email.required' => 'You should write a valid email',
            'password.required' => 'You should write a password, 6 to 15 characters',
        ];
    }
}
