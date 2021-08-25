<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ContactUsRequest extends FormRequest
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
        
        if ($this->input('department') !== null) {
            return [
                'name' => ['required', 'string', 'min:3', 'max:256'],
                'email' =>[ 'required','email'],
                'subject'=>['required','string','max:30','min:3'],
                'department' => [
                    'nullable',
                    'string',
                    Rule::in(['authentification', 'connection', 'contability', 'administration','technique','other']),
                ],
                'text' => [
                    'required',
                    'string',
                    'min:10',
                    'max: 1000'
                ],
                'readTerms' => 'required|boolean',
            ];
        
            
        }
    }
}
