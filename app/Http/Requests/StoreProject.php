<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
            'image'      => 'nullable|image',
            'title_ar' => 'nullable',
            'title_en'          => 'required',
            'description_ar'            => 'nullable',
            'description_en'            => 'required',
            'machine'            => 'required|numeric',
            'address'            => 'required',
            'year'            => 'required',
            'salary'            => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
//            'image.required'        => 'image Required',
            'title_it.required' => 'title it Required',
            'title_en.required' => 'title en Required',
            'description_it.required' => 'description it Required',
            'description_en.required' => 'description en Required',
            'machine.required' => 'machine Required',
            'address.required' => 'address Required',
            'year.required' => 'year Required',
            'salary.required' => 'salary Required',
        ];
    }
}
