<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAboutUs extends FormRequest
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
            'image'             => 'required|mimes:jpeg,jpg,png,gif,webp',
            'title_it'          => 'required',
            'title_en'          => 'required',
            'subtitle_it'       => 'required',
            'subtitle_en'       => 'required',
            'description_it'    => 'required',
            'description_en'    => 'required',

        ];
    }

    public function messages()
    {
        return [
            'image.mimes'        => 'صيغة الصورة غير مسموحة',
            'title_ar.required' => 'يجب إدخال الاسم بالايطالي',
            'title_en.required' => 'يجب إدخال الاسم بالانجليزية',
            'subtitle_ar.required' => 'يجب إدخال الهامش بالايطالي',
            'subtitle_en.required' => 'يجب إدخال الهامش بالانجليزية',
            'description_ar.required' => 'يجب إدخال الوصف بالايطالي',
            'description_en.required' => 'يجب إدخال الوصف بالانجليزية',
        ];
    }
}
