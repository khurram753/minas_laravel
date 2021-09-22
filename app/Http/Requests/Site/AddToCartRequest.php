<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest
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
            'product_id'=>'required',
            'quantity'=>'required',
//            'cord_id' => 'required',
//            'material_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cord_id.required' => 'Cord is a required field',
            'material_id.required' => 'Material is a required field',
        ];
    }
}
