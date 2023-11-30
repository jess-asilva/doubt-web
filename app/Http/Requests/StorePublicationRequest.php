<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicationRequest extends FormRequest
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
            'title' => 'required|between:1,100',
            'content' => 'required|between:2,500',
            'image' => 'image',
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
            'title.required' => 'Título da publicação é obrigatório',
            'title.between' => 'Título deve ter entre 1 e 100 caracteres',
            'content.required' => 'Conteúdo da publicação é obrigatório',
            'content.between' => 'Conteúdo deve ter entre 1 e 100 caracteres',
            'image.image' => 'Deve ser uma imagem válida (jpg, jpeg, png, bmp, gif, svg, ou webp).',
        ];
    }
}
