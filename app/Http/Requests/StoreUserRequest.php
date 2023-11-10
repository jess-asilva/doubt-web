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
            'name' => 'required|min:5|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'ra/rm' => 'numeric|unique:users,ra/rm',
            'password' => 'required|between:3,15|confirmed',
            'password_confirmation' => 'required|min:6',
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
            'name.required' => 'Preencha o nome.',
            'name.min' => 'O nome deve ter ao menos 5 letras.',
            'email.required' => 'E-mail é obrigatório.',
            'email.unique' => 'E-mail já cadastrado',
            'ra/rm.required' => 'RA/RM é obrigatório.',
            'ra/rm.unique' => 'RA/RM já cadastrado',
            'password.required' => 'Digite sua senha.',
            'password.between' => 'A senha deve ter entre 3 e 15 caracteres.',
            'password.confirmed' => "As senhas devem ser iguais.",
        ];
    }
}
