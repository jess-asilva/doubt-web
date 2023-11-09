<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'usuario' => 'required|min:3|max:255',
            'email' => 'required|email:rfc,dns|unique users, e-mail',
            'ra/rm' => 'numeric',
            'senha' => 'required|min:3|max:255|confirmed',
            'confirmarSenha' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nome é obrigatório.',
            'name.min' => 'O nome deve ter ao menos 3 letras.',
            'email.required' => 'E-mail é obrigatório.',
            'ra/rm.required' => 'RA/RM é obrigatório.',
            'senha.required' => 'Digite uma senha.',
            'confirmarSenha.required' => 'Confirme a senha.',
        ];
    }
}
