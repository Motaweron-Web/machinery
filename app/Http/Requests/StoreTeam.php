<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTeam extends FormRequest
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
            'image'             => 'nullable|mimes:jpeg,jpg,png,gif,webp',
            'name_it'          => 'required',
            'name_en'          => 'required',
            'title_it'          => 'required',
            'title_en'          => 'required',
            'facebook'    => 'nullable|url',
            'whatsapp'    => 'nullable|url',
            'instagram'    => 'nullable|url',

        ];
    }

    public function messages()
    {
        return [
            'image.required'          => 'Image Required',
            'image.mimes'          => 'Image not matches requirements',
            'name_it.required'          => 'Name IT Required',
            'name_en.required'          => 'Name EN Required',
            'title_it.required'          => 'Title IT Required',
            'title_en.required'          => 'Title EN Required',
        ];
    }
}
