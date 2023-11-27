<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactDoubtRequest extends FormRequest
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
            //
            'name'=>'required',
            'institution'=>'required',
            'telPhone'=>'required|max:11',
            'email'=>'required|email',
            'subject'=>'required|between:2,255'
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
            'name'=>'Nome é de preenchimento obrigatório',
            'institution'=>'Instituição é preenchimento obrigatório',
            'telPhone'=>'Telefone é preenchimento obrigatório',
            'telPhone.max'=>'Campo telefone tamanho máximo 11 caracteres',
            'email'=>'E-mail é preenchimento obrigatório',
            'email'=>'Necessário digitar e-mail corretamente , (examplo@ex.com)',
            'subject'=>'O campo assunto é obrigatório',
            'subject.between'=>'Campo assunto deve ter ao menos 3 caracteres'

        ];
    }
}
