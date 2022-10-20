<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSetting extends FormRequest
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
            'title_it'                  => 'nullable',
            'title_en'                  => 'nullable',
            'subtitle_it'               => 'nullable',
            'subtitle_en'               => 'nullable',

            'phone'                     => 'nullable|numeric',
            'phone2'                    => 'nullable',
            'email'                     => 'nullable',
            'address'                   => 'nullable',
            'address_map'               => 'nullable',
            'footer_content_it'         => 'nullable',
            'footer_content_en'         => 'nullable',

            'facebook'                  => 'nullable|url',
            'youtube'                   => 'nullable|url',
            'instagram'                 => 'nullable|url',
            'linkedin'                  => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [

            'title_it.required'             => 'title_it',
            'title_en.required'             => 'title_en',
            'subtitle_it.required'          => 'subtitle IT',
            'subtitle_en.required'          => 'subtitle EN',
            'phone.required'                => 'phone',
//            'phone2.required' => 'phone 2',
            'email.required'                => 'email',
            'address.required'              => 'address',
            'address_map.required'          => 'address map',
            'footer_content_it.required'    => 'footer_content IT',
            'footer_content_en.required'    => 'footer_content EN',
            'facebook.required'             => 'facebook',
            'youtube.required'              => 'youtube',
            'instagram.required'            => 'instagram',
            'linkedin.required'             => 'linkedin',

        ];
    }
}
