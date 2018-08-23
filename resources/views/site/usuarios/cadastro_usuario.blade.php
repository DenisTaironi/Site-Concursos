@extends('site.templates.template1')
@section('content')

<h1 class="title-pg">formulario de cadastro<h1>

<form class="form" method="post" action="{{route('usuario.store')}}">
	<!--token para impedir ataque de csrf-->
	{!! csrf_field() !!}

	<div class="container">

		<div class="row">
			<div class="col">
				<span class="control-label">Nome</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_nome" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">CEP</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_cep" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">CPF</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_cpf" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">Tipo de Logradouro</span>
  			</div>
  			<div class="col">
  				<select name="usu_logradouro" class="form-control">
				<option>Selecione</option>
				@foreach($logradouro as $logradouro)
				<option value="{{$logradouro}}">{{$logradouro}}</option>
				@endforeach
				</select>
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Data de Nascimento</span>
			</div>
  			<div class="col">
  				<input type="date" name="usu_nascimento" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">Endereço</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_endereco" class="form-control">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span class="control-label">Número de Filhos</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_num_filhos" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">Número</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_end_num" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Nome da Mãe</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_mae" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">Complemento</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_end_complemento" class="form-control">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span class="control-label">Nome do Pai</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_pai" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">Bairro</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_bairro" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Identidade</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_rg" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">UF</span>
  			</div>
  			<div class="col">
  				<select name="usu_uf" class="form-control">
				<option>Selecione</option>
				@foreach($uf as $uf)
				<option value="{{$uf}}">{{$uf}}</option>
				@endforeach
				</select>
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span class="control-label">Orgão Emissor</span>
			</div>
  			<div class="col">
  				<select name="usu_org_emissor_rg" class="form-control">
				<option>Selecione</option>
				@foreach($orgao_emissor as $orgao_emissor)
				<option value="{{$orgao_emissor}}">{{$orgao_emissor}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Município</span>
  			</div>
  			<div class="col">
  				<select name="usu_municipio" class="form-control">
				<option>Selecione</option>
				@foreach($municipio as $municipio)
				<option value="{{$municipio}}">{{$municipio}}</option>
				@endforeach
				</select>
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">UF do orgão Emissor</span>
			</div>
  			<div class="col">
  				<select name="usu_uf_orgao_emissor_rg" class="form-control">
				<option>Selecione</option>
				@foreach($uf_orgao_emissor as $uf_orgao_emissor)
				<option value="{{$uf_orgao_emissor}}">{{$uf_orgao_emissor}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Telefone 1</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_tel" class="form-control">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span class="control-label">Data de Emissão</span>
			</div>
  			<div class="col">
  				<input type="date" name="usu_data_emissao_rg" class="form-control">
  			</div>
  			<div class="col">
  				<span class="control-label">Telefone 2</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_tel2" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Nacionalidade</span>
			</div>
  			<div class="col">
  				<select name="usu_nacionalidade" class="form-control">
				<option>Selecione</option>
				@foreach($nacionalidade as $nacionalidade)
				<option value="{{$nacionalidade}}">{{$nacionalidade}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Email</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_email" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col-md-3">
				<span class="control-label">Naturalidade</span>
			</div>
  			<div class="col-md-3">
  				<select name="usu_naturalidade" class="form-control">
				<option>Selecione</option>
				@foreach($naturalidade as $naturalidade)
				<option value="{{$naturalidade}}">{{$naturalidade}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Login</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_login" class="form-control">
  			</div>	
  			
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Sexo</span>
			</div>
  			<div class="col">
  				<select name="usu_sexo" class="form-control">
				<option>Selecione</option>
				@foreach($sexo as $sexo)
				<option value="{{$sexo}}">{{$sexo}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Senha</span>
  			</div>
  			<div class="col">
  				<input type="password" name="usu_senha" class="form-control">
  			</div>	
		</div>	
		
		<div class="row">
			<div class="col">
				<span class="control-label">Estado Civil</span>
			</div>
  			<div class="col">
  				<select name="usu_estado_civil" class="form-control">
				<option>Selecione</option>
				@foreach($estado_civil as $estado_civil)
				<option value="{{$estado_civil}}">{{$estado_civil}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Confirmar Senha</span>
  			</div>
  			<div class="col">
  				<input type="password" name="usu_conf_senha" class="form-control">
  			</div>	
		</div>

			<div class="row">
			<div class="col-md-3">
				<span class="control-label">Cor/Raça</span>
			</div>
  			<div class="col-md-3">
  				<select name="usu_raca" class="form-control">
				<option>Selecione</option>
				@foreach($raca as $raca)
				<option value="{{$raca}}">{{$raca}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col-auto">
  				<input type="checkbox" name="usu_autorizacao" >
  				<span class="control-label">Concordo com os termos do site</span>
  			</div>  				
		</div>

		<div class="row">
			<div class="col-md-3">
				<span class="control-label">Nível de Escolaridade</span>
			</div>
  			<div class="col-md-3">
  				<select name="usu_escolaridade" class="form-control">
				<option>Selecione</option>
				@foreach($escolaridade as $escolaridade)
				<option value="{{$escolaridade}}">{{$escolaridade}}</option>
				@endforeach
				</select>
  			</div>  			
  			<div class="col-auto">
  				<button class="btn btn-primary">Cadastrar</button>
  			</div>	
  		</div>						
	</div>
</form>
	
@include('site.includes.rodape')

@endsection