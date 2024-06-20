<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSlideRequest extends FormRequest
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
            'title'=>'required',
            'numero'=>'required',
            'subtitle'=>'required',
            'libelle'=>'required',
            'lien'=>'required',

        ];
    }

    public function messages()
    {
        return [
            "title.required"=>"Le titre est requis",
            "numero.required"=>"Le titre est requis",
            "subtitle.required"=>"Le sous-titre est requis",
            "libelle.required"=>"Le Libelle est requis",
            "lien.required"=>"Le lien est requis",
        ];
    }
}
