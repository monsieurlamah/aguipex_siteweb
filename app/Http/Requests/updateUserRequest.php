<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateUserRequest extends FormRequest
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
            "email"=>"required|email",
            "name"=>"required",
            "first_name"=>"required",
            "phone"=>"required",
            "apRole"=>"required",
            "address"=>"required",
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>"L'adresse email est requise !",
            'email.email'=>"Mauvaise adresse email !",
            'name.required'=>"Le nom est requis",
            'first_name.required'=>"Le nom est requis",
            'address.required'=>"L'adresse est requise",
            'phone.required'=>"Le numéro de téléphone est requis",
            'apRole.required'=>"Le rôle est requis",
        ];
    }
}
