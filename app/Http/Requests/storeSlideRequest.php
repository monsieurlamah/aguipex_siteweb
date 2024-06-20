<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeSlideRequest extends FormRequest
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
            'title'=>'required|unique:slides,title',
            'numero'=>'required|unique:slides,numero',
            'subtitle'=>'required|unique:slides,subtitle',
            'libelle'=>'required|unique:slides,libelle',
            'lien'=>'required|unique:slides,lien',

        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"Le titre est requis",
            "title.unique"=>"Le titre est déjà utilisé",
            "numero.required"=>"Le titre est requis",
            "numero.unique"=>"Le titre est déjà utilisé",
            "subtitle.required"=>"Le sous-titre est requis",
            "subtitle.unique"=>"Le sous-titre est déjà utilisé",
            "libelle.required"=>"Le Libelle est requis",
            "libelle.unique"=>"Le Libelle est déjà utilisé",
            "lien.required"=>"Le lien est requis",
            "lien.unique"=>"Le lien est déjà utilisé",
        ];
    }
}
