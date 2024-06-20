<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveServiceBasRequest extends FormRequest
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
            'title'=>'required|unique:bas_slides,title',
            'icone'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Le titre est requis',
            'title.unique'=>'Le titre exite déjà',
            'icone.required'=>'L\icône est requis'
        ];

    }
}
