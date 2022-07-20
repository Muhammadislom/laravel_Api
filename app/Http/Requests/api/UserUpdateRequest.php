<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'nick_name' => 'string|unique:users',
            'email' => 'string|unique:users',
            'first_name' => 'string',
            'last_name' => 'string',
            'password' => 'string',
            'role_id' => 'integer|exists:App\Models\Role,id',
        ];
    }
}
