<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateProductRequest extends FormRequest
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
            "title"=>"required",
            "categorie_id"=>"required",
        ];
    }

    public function messages()
    {
       return [
        "title.required"=>"Le titre est requis !",
        "categorie_id.required"=>"La catégorie est requise !",
       ];
    }
}
