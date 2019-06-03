<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'search' => 'regex:/^[a-z\d\s]+$/',
        ];
    }

    public function messages()
    {
        return [
                //
            ];
       
    }
}