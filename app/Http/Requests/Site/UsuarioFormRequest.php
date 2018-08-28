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
                    'usu_login'                 => 'required',
                    'usu_senha'                 => 'required|min:8',
                    'usu_conf_senha'            => 'required|min:8|same:usu_senha',
                    'usu_nome'                  => 'required|min:3|max:100', 
                    'usu_nascimento'            => 'required',
                    'usu_cpf'                   => 'required|numeric', 
                    'usu_num_filhos'            => 'required',
                    'usu_mae'                   => 'required',
                    'usu_pai'                   => 'required',
                    'usu_rg'                    => 'required', 
                    'usu_org_emissor_rg'        => 'required',
                    'usu_uf_orgao_emissor_rg'   => 'required', 
                    'usu_data_emissao_rg'       => 'required',
                    'usu_nacionalidade'         => 'required',
                    'usu_sexo'                  => 'required',
                    'usu_estado_civil'          => 'required',
                    'usu_raca'                  => 'required',
                    'usu_escolaridade'          => 'required',
                    'usu_cep'                   => 'required',
                    'usu_logradouro'            => 'required',
                    'usu_endereco'              => 'required',
                    'usu_end_num'               => 'required',
                    //'usu_end_complemento'          
                    'usu_bairro'                => 'required',
                    'usu_uf'                    => 'required',
                    'usu_municipio'             => 'required',
                    'usu_tel'                   => 'required',
                    'usu_tel2'                  => 'numeric', 
                    'usu_email'                 => 'required',
                    'usu_autorizacao'           => 'required',
                    'usu_naturalidade'          => 'required'
                    
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
