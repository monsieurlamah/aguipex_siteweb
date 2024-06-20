<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Le nom est requis !',
            'email.required'=>'L\'email est requis !',
            'email.email'=>'Entrer un e-mail correct !',
            'subject.required'=>'Le sujet est requis !',
            'message.required'=>'Le message est requis !',
        ];
    }
}
