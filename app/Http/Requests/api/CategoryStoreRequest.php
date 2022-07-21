<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|unique:categories|max:255',
            'parent_category_id' => 'exists:App\Models\Category,id|integer'
        ];
    }
}
