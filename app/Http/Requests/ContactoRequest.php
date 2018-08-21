<?php

namespace Serfar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
          'nombre' => 'required',
          'empresa' => 'required',
          'correo' => 'required|email|max:255|unique:users',
          'telefono' => 'required',
          'mensaje' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El Nombre es requerido',
            'empresa.required'  => 'La Empresa es requerida',
            'correo.required' => 'El Correo es requerido',
            'telefono.required'  => 'La Telefono es requerido',
            'mensaje.required' => 'La Descripción es requerido'
        ];
    }

}
