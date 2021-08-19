<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class QualityRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required',
            'header_image'=>'mimes:jpeg,jpg,png',
//            'process.*.step_number' => 'required',
//            'process.*.title' => 'required',
//            'process.*.description' => 'required',
        ];
    }

    public function messages()
    {
        return [
//            'process.*.step_number.required' => 'All Process Steps is a required field',
//            'process.*.title.required' => 'All Process Steps is a required field',
//            'process.*.description.required' => 'All Process Steps is a required field',
        ];
    }
}
