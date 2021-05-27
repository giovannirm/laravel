<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name' => 'required|max:10',
            'price' => 'required',
            'category' => 'required|min:10'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del producto'
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Debe ingresar una categoría del producto'
        ];
    }
}
