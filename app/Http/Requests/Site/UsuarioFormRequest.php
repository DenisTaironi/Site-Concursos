<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
                    'usu_nome'      => 'required|min:3|max:100',
                    'usu_cpf'       => 'required|numeric',
                    'usu_tel2'      => 'numeric',
        ];
    }

    public function messages()
    {
        return [
                    //'usu_nome.required' => 'O campo nome é de preenchimento obrigatório!',
                    //'usu_cpf.required' => 'O campo CPF é de preenchimento obrigatório!',
        ];
    }
}
