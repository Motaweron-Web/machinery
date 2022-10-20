<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContact extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'whatsapp' => 'nullable|numeric',
            'subject'            => 'required',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Name Required',
            'email.required' =>'Email Required',
            'phone.required'=>'Phone Required',
            'message.required'=>'Message Required',
            'subject.required'=>'subject Required',
        ];
    }
}
