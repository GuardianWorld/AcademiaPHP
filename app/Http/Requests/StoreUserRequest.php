<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=> "required|string",
            "cpf"=> "required|string|size:11|unique:users,cpf",
            "email"=> "required|email|unique:users,email",
            "password"=> "required|string|min:6|confirmed",
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Nome é obrigatório',
            'email.required' => 'Email é obrigatório',
            'email.email' => 'Email inválido',
            'email.unique' => 'Email já cadastrado',
            'cpf.required' => 'CPF é obrigatório',
            'cpf.size' => 'CPF deve ter 11 caracteres',
            'cpf.unique' => 'CPF já cadastrado',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'Senha deve ter no mínimo 6 caracteres',
            'password.confirmed' => 'Senhas não conferem',
        ];
    }
}
