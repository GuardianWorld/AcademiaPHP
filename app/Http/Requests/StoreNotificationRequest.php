<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotificationRequest extends FormRequest
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
            'description' => 'required|string|max:255',
            'user_email' => 'required|email|exists:users,email',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'A descrição é obrigatória.',
            'description.max' => 'A descrição não pode ter mais de 255 caracteres.',
            'user_email.required' => 'O campo de email é obrigatório.',
            'user_email.email' => 'O email fornecido não é válido.',
            'user_email.exists' => 'Nenhum usuário encontrado com esse email.',
        ];
    }
}
