<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveStatistiqueRequest extends FormRequest
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
            'title'=>'required|unique:statistiques,title',
            'number'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>"Le titre est requis",
            'title.unique'=>"Le titre existe déjà",
            'number.required'=>"Le nombre est requis",
        ];
    }
}
