<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateEquipeRequest extends FormRequest
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
            "name"=>"required",
            "fonction"=>"required",
            "email"=>"required",
            "contact"=>"required",
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>"Le nom est requis",
            'email.required'=>"L'email est requis",
            'email.email'=>"Mauvais format d'email",
            'contact.required'=>"Le numéro de téléphone est requis",
            'fonction.required'=>"La fonction est requise",
        ];
    }
}
