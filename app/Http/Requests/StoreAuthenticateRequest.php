<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Usuário é obrigatório',
            'password.required' => 'Senha é obrigatório'
            //'name.min' => 'O nome deve ter ao menos 3 letras.',
            //'institution.required' => 'Instituição é obrigatório.',
        ];
    }
}
