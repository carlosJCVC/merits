<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostulantRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required|max:100',
                    'lastname' => 'required|max:100',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|numeric',
                    'gender' => 'required',
                    'password' => 'required|between:3,32',
                    'password_confirm' => 'required|same:password',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|max:100',
                    'lastname' => 'required|max:100',
                    'email' => 'required|email|unique:users,email,' . $this->user->id,
                    'phone' => 'required|numeric',
                    'gender' => 'required',
                    'password' => 'required|between:3,32',
                    'password_confirm' => 'required|same:password',
                ];
            }
        }

        return [
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo :attribute es obligatorio.',
            'lastname.required' => 'El campo :attribute es obligatorio.',
            'email.required' => 'El campo :attribute es obligatorio.',
            'phone.required' => 'El campo :attribute es obligatorio.',
            'gender.required' => 'El campo :attribute es obligatorio.',
            'password.required' => 'El campo :attribute es obligatorio.',

            'phone.numeric' => 'El campo :attribute debe contener solo numeros.',
            'email.unique' => 'El campo :attribute ya existe.',

            'password.between' => 'El campo :attribute debe tener 6 a 32 caracteres.',
            'password_confirm.same' => 'Este campo no coincide con el Password.',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'lastname' => 'Apellido',
            'email' => 'E-mail',
            'phone' => 'Telefono/Celular',
            'gender' => 'Genero',
            'password' => 'Password',
        ];
    }
}
