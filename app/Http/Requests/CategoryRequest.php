<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|max:200',
            'category_slug' => 'required|alpha_dash|max:200|unique:categories,category_slug',
        ];

    }

    public function messages()
    {
        return [
            //
        ];
    }
}