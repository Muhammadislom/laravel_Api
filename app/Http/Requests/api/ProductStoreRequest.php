<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'img' => 'required|string|max:255',
            'category_id' => 'exists:App\Models\Category,id|integer'
        ];
    }
}
