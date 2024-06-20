<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateFoireRequest extends FormRequest
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
            "designation"=>"required",
            "pays"=>"required",
            "lieu"=>"required",
        ];
    }

    public function messages()
    {
        return [
            "designation.required"=>"La designation est requise",
            "pays.required"=>"La Pays est requis",
            "lieu.required"=>"La lieu est requis",
        ];
    }
}
