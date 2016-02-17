<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileFormRequest extends Request
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
                return [];
            }
            case 'PUT': {
                return [
                    'name' => 'required',
                    'email' => 'required|unique:users,'.auth()->user()->email,
                    'password' => 'required|min:8|same:password_confirmation',
                    'password_confirmation' => 'required|min:8'
                ];
            }
        }
    }
    public function attributes()
    {
        return [
            'username' => 'nome de usuário',
            'email' => 'email',
            'password' => 'senha',
            'password_confirmation' => 'confirmação da senha'
        ];
    }
}
