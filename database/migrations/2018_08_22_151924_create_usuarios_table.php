<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('usu_id');
            $table->string('usu_login', 100)->unique();
            $table->string('usu_senha', 100);
            $table->string('usu_nome', 100);
            $table->date( 'usu_nascimento');
            $table->string('usu_cpf', 100); 
            $table->integer( 'usu_num_filhos'); 
            $table->string( 'usu_mae', 100); 
            $table->string('usu_pai', 100); 
            $table->string('usu_rg', 100); 
            $table->string('usu_org_emissor_rg', 100); 
            $table->string('usu_uf_orgao_emissor_rg', 100); 
            $table->date('usu_data_emissao_rg'); 
            $table->string('usu_nacionalidade', 100); 
            $table->string('usu_sexo', 100); 
            $table->string('usu_estado_civil', 100); 
            $table->string('usu_raca', 100); 
            $table->string('usu_escolaridade', 100); 
            $table->string('usu_cep', 100); 
            $table->string('usu_logradouro', 100); 
            $table->string('usu_endereco', 100); 
            $table->string('usu_end_num', 100); 
            $table->string('usu_end_complemento', 100); 
            $table->string('usu_bairro', 100); 
            $table->string('usu_uf', 100); 
            $table->string('usu_municipio', 100); 
            $table->string('usu_tel', 100);
            $table->string('usu_tel2', 100); 
            $table->string('usu_email', 100); 
            $table->boolean('usu_autorizacao'); 
            $table->string('usu_naturalidade', 100);
            $table->rememberToken();
            $table->timestamps();

            //coluna de chave estrangeira
            /*
            $table->integer('tabelaestrangeira_id')->unsigned();
            $table->foreign('tabelaestrangeira_id')
                    ->references('tabela_id')
                    ->on('tabelaestrangeiranoplural')
                    ->onDelete('cascade');
            *
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
