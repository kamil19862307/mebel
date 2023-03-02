<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:35'],
            'active' =>['required', 'boolean'],
            'price' =>['required', 'integer'],
            'color_id' =>['required', 'integer'],
            'brand_id' =>['required', 'integer'],
            'category_id' =>['required', 'integer'],
            'weight' =>['required', 'max:50'],
            'size' =>['required', 'max:50'],
            'material' =>['required', 'string', 'max:50'],
            'description' =>['required', 'string', 'min:5', 'max:1000'],
            'image' =>['image'],
        ];
    }
}
