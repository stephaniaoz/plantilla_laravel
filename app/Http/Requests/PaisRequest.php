<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaisRequest extends FormRequest
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
        return [
            'pais_nombre' => 'required|unique:pais,pais_nombre',
            'pais_coddane' => 'required',
            'pais_codiso' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'pais_nombre.required' => 'El :attribute es obligatorio.',
            'pais_nombre.unique' => 'El :attribute ya existe.',
            'pais_coddane.required' => 'El un :attribute es obligatorio',
            'pais_codiso.required' => 'El :attribute es obligatorio'
        ];
    }

    public function attributes()
    {
        return [
            'pais_nombre' => 'nombre del pais',
            'pais_coddane' => 'código Dane',
            'pais_codiso' => 'código Iso',
        ];
    }

}
