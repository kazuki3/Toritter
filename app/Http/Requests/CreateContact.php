<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContact extends FormRequest
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
            'Name' => 'required | Max:255',
            'Phonenumber' => 'required | numeric | digits_between:8,11',
            'Email' => 'required | email | Max:255',
            'Requirement' => 'required',
            'WayToContact' => 'required',
            'TimeZone' => 'required',
        ];
    }
}
