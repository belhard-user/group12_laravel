<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as Form;

class FormRequest extends Form
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
            'name' => ['required','min:3'],
            'age' => 'required|integer|between:18,65'
        ];
    }

    public function messages()
    {
        return [
            'age.between' => 'Что то сострить'
        ];
    }
}
