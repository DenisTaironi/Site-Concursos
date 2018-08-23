<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   
   //quando nome da tabela é diferente do nome da classe model
    //protected $table = 'usuarios';


	
	//diz o quais atributos da tabela podem ser criados (Create)
    protected $fillable = [
    			'usu_login',
		    	'usu_senha',
		    	'usu_nome', 
		    	'usu_nascimento',
		    	'usu_cpf', 
		    	'usu_num_filhos', 
		    	'usu_mae', 
		    	'usu_pai', 
		    	'usu_rg', 
		    	'usu_org_emissor_rg', 
		    	'usu_uf_orgao_emissor_rg', 
		    	'usu_data_emissao_rg', 
		    	'usu_nacionalidade', 
		    	'usu_sexo', 
		    	'usu_estado_civil', 
		    	'usu_raca', 
		    	'usu_escolaridade', 
		    	'usu_cep', 
		    	'usu_logradouro', 
		    	'usu_endereco', 
		    	'usu_end_num', 
		    	'usu_end_complemento', 
		    	'usu_bairro', 
		    	'usu_uf', 
		    	'usu_municipio', 
		    	'usu_tel',
		    	'usu_tel2', 
		    	'usu_email', 
		    	'usu_autorizacao', 
		    	'usu_naturalidade'
    ];

   	
	/*
    protected $hidden = [
        
    ];

    //metodo de relacionamento 1 para 1
    /*
    public function dados_usuario()
    {
    	return $this->hasOne(Dados_usuario::class);
    }
    */
}
