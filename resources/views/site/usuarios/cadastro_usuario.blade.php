@extends('site.templates.template1')
@section('content')

<h1 class="title-pg">formulario de cadastro<h1>


@if( isset($errors) && count($errors) > 0)
<div  class="alert alert-danger">
	@foreach( $errors->all() as $error)
	<span class="alerta"><p>{{$error[0]}}</p></span>
	@endforeach
</div>
@endif

<!--
@foreach($errors->getMessages() as $key => $error )
   Key: {{ $key }}
   Value: {{ $error[0] }}
@endforeach

-->




<form class="form" method="post" action="{{route('usuario.store')}}">
	<!--token para impedir ataque de csrf-->
	{!! csrf_field() !!}

	<div class="container">

		<div class="row">
			<div class="col">
				<span class="control-label">Nome</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_nome" class="form-control" value="{{old('usu_nome')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">CEP</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_cep" class="form-control" value="{{old('usu_cep')}}">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">CPF</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_cpf" class="form-control" value="{{old('usu_cpf')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">Tipo de Logradouro</span>
  			</div>
  			<div class="col">
  				<select name="usu_logradouro" class="form-control">
					<option value="">Selecione</option>
					@foreach($logradouro as $logradouro)
					<option value="{{$logradouro}}" 
					{{ old('usu_logradouro') == $logradouro ? 'selected' : '' }}>
					{{$logradouro}}
					</option>
					@endforeach
				</select>
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Data de Nascimento</span>
			</div>
  			<div class="col">
  				<input type="date" name="usu_nascimento" class="form-control" value="{{old('usu_nascimento')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">Endereço</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_endereco" class="form-control" value="{{old('usu_endereco')}}">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span class="control-label">Número de Filhos</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_num_filhos" class="form-control" value="{{old('usu_num_filhos')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">Número</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_end_num" class="form-control" value="{{old('usu_end_num')}}">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Nome da Mãe</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_mae" class="form-control" value="{{old('usu_mae')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">Complemento</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_end_complemento" class="form-control" value="{{old('usu_end_complemento')}}">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span class="control-label">Nome do Pai</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_pai" class="form-control" value="{{old('usu_pai')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">Bairro</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_bairro" class="form-control" value="{{old('usu_bairro')}}">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Identidade</span>
			</div>
  			<div class="col">
  				<input type="text" name="usu_rg" class="form-control" value="{{old('usu_rg')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">UF</span>
  			</div>
  			<div class="col">
  				<select name="usu_uf" class="form-control">
					<option value="">Selecione</option>
					@foreach($uf as $uf)
					<option value="{{$uf}}" {{ old('usu_uf') == $uf ? 'selected' : '' }}
					>{{$uf}}</option>
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
					<option value="">Selecione</option>
					@foreach($orgao_emissor as $orgao_emissor)
					<option value="{{$orgao_emissor}}" 
					{{ old('usu_org_emissor_rg') == $orgao_emissor ? 'selected' : '' }}>
					{{$orgao_emissor}}</option>
					@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Município</span>
  			</div>
  			<div class="col">
  				<select name="usu_municipio" class="form-control">
					<option value="">Selecione</option>
					@foreach($municipio as $municipio)
					<option value="{{$municipio}}" {{ old('usu_municipio') == $municipio ? 'selected' : '' }}
					>{{$municipio}}</option>
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
					<option value="">Selecione</option>
					@foreach($uf_orgao_emissor as $uf_orgao_emissor)
					<option value="{{$uf_orgao_emissor}}" 
					{{ old('usu_uf_orgao_emissor_rg') == $uf_orgao_emissor ? 'selected' : '' }}
					>{{$uf_orgao_emissor}}</option>
					@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Telefone 1</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_tel" class="form-control" value="{{old('usu_tel')}}">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span class="control-label">Data de Emissão</span>
			</div>
  			<div class="col">
  				<input type="date" name="usu_data_emissao_rg" class="form-control" value="{{old('usu_data_emissao_rg')}}">
  			</div>
  			<div class="col">
  				<span class="control-label">Telefone 2</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_tel2" class="form-control" value="{{old('usu_tel2')}}">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Nacionalidade</span>
			</div>
  			<div class="col">
  				<select name="usu_nacionalidade" class="form-control">
					<option value="">Selecione</option>
					@foreach($nacionalidade as $nacionalidade)
					<option value="{{$nacionalidade}}" 
					{{ old('usu_nacionalidade') == $nacionalidade ? 'selected' : '' }}>
					{{$nacionalidade}}</option>
					@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Email</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_email" class="form-control" value="{{old('usu_email')}}">
  			</div>	
		</div>

		<div class="row">
			<div class="col-md-3">
				<span class="control-label">Naturalidade</span>
			</div>
  			<div class="col-md-3">
  				<select name="usu_naturalidade" class="form-control">
					<option value="">Selecione</option>
					@foreach($naturalidade as $naturalidade)
					<option value="{{$naturalidade}}" 
					{{ old('usu_naturalidade') == $naturalidade ? 'selected' : '' }}>{{$naturalidade}}</option>
					@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Login</span>
  			</div>
  			<div class="col">
  				<input type="text" name="usu_login" class="form-control" value="{{old('usu_login')}}">
  			</div>	
  			
		</div>

		<div class="row">
			<div class="col">
				<span class="control-label">Sexo</span>
			</div>
  			<div class="col">
  				<select name="usu_sexo" class="form-control">
					<option value="">Selecione</option>
					@foreach($sexo as $sexo)
					<option value="{{$sexo}}" 
					{{ old('usu_sexo') == $sexo ? 'selected' : '' }}>{{$sexo}}</option>
					@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Senha</span>
  			</div>
  			<div class="col">
  				<input type="password" name="usu_senha" class="form-control" value="{{old('usu_senha')}}">
  			</div>	
		</div>	
		
		<div class="row">
			<div class="col">
				<span class="control-label">Estado Civil</span>
			</div>
  			<div class="col">
  				<select name="usu_estado_civil" class="form-control">
					<option value="">Selecione</option>
					@foreach($estado_civil as $estado_civil)
					<option value="{{$estado_civil}}" 
					{{ old('usu_estado_civil') == $estado_civil ? 'selected' : '' }}>{{$estado_civil}}</option>
					@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span class="control-label">Confirmar Senha</span>
  			</div>
  			<div class="col">
  				<input type="password" name="usu_conf_senha" class="form-control" value="{{old('usu_conf_senha')}}">
  			</div>	
		</div>

			<div class="row">
			<div class="col-md-3">
				<span class="control-label">Cor/Raça</span>
			</div>
  			<div class="col-md-3">
  				<select name="usu_raca" class="form-control">
					<option value="">Selecione</option>
					@foreach($raca as $raca)
					<option value="{{$raca}}" 
					{{ old('usu_raca') == $raca ? 'selected' : '' }}>{{$raca}}</option>
					@endforeach
				</select>
  			</div>
  			<div class="col-auto">
  				<input type="checkbox" name="usu_autorizacao" value="{{old('usu_autorizacao')}}">
  				<span class="control-label">Concordo com os termos do site</span>
  			</div>  				
		</div>

		<div class="row">
			<div class="col-md-3">
				<span class="control-label">Nível de Escolaridade</span>
			</div>
  			<div class="col-md-3">
  				<select name="usu_escolaridade" class="form-control">
					<option value="">Selecione</option>
					@foreach($escolaridade as $escolaridade)
					<option value="{{$escolaridade}}" 
					{{ old('usu_escolaridade') == $escolaridade ? 'selected' : '' }}
					>{{$escolaridade}}</option>
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