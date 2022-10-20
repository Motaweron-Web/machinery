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
            'image1' => 'nullable',
            'image2' => 'nullable',
            'image3' => 'nullable',
            'image4' => 'nullable',
            'image5' => 'nullable',
            'title_en' => 'nullable',
            'title_it' => 'nullable',
            'price' => 'nullable',
            'discount' => 'nullable',
            'desc_en' => 'nullable',
            'desc_it' => 'nullable',
            'product_type' => 'nullable',
            'vendor' => 'nullable',
            'tag' => 'nullable',

        ];
    }

    public function messages()
    {
        return [
//            'image.required'        => 'image Required',
//            'title_it.required' => 'title it Required',
//            'title_en.required' => 'title en Required',
//            'description_it.required' => 'description it Required',
//            'description_en.required' => 'description en Required',
//            'machine.required' => 'machine Required',
//            'address.required' => 'address Required',
//            'year.required' => 'year Required',
//            'salary.required' => 'salary Required',
        ];
    }
}
