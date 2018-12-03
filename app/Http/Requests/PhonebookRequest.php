<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use app\Phonebook;


class PhonebookRequest extends FormRequest
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
            'name'=>  'required|max:255',
            'phone'=> 'required|digits_between:1,15|numeric',
            'email'=> 'required|email|unique:phonebooks'

        ];
    }
}
