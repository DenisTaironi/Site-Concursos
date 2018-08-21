@extends('site.templates.template1')
@section('content')

<h1 class="title-pg">formulario de cadastro<h1>

<form class="form" method="post" action="{{route('usuario.store')}}">
	<!--token para impedir ataque de csrf-->
	{!! csrf_field() !!}

	<!--
	<div id="conteiner-cad" class="container-cad">
		<div id="conteudo">
			<div class="row marg-b-100">
				<div calss="col-md-6 col-sm-6 col-xs-12">
					<table border="0" class="table c">
						<tbody>
							<tr>
								<td><span id="dado_usu_nome" class="control-label">Nome: </span></td>
								<td>
									<input type="text" nome="dado_usu_nome" placeholder="Nome"
									 class="form-control capitalize" maxlength="100">
								</td>
							</tr>
							
						</tbody>						
					</table>					
				</div>				
			</div>			
		</div>		
	</div>
	-->
	<div class="container">

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Nome</span>
			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" placeholder="Nome" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">CEP</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">CPF</span>
			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" placeholder="CPF" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Tipo de Logradouro</span>
  			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Data de Nascimento</span>
			</div>
  			<div class="col">
  				<input type="date" nome="dado_usu_nome" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Endereço</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Número de Filhos</span>
			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Número</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Nome da Mãe</span>
			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Complemento</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Nome do Pai</span>
			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Bairro</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Identidade</span>
			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">UF</span>
  			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Orgão Emissor</span>
			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Município</span>
  			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">UF do orgão Emissor</span>
			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Telefone 1</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>
		
		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Data de Emissão</span>
			</div>
  			<div class="col">
  				<input type="date" nome="dado_usu_nome" class="form-control">
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Telefone 2</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Nacionalidade</span>
			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Email</span>
  			</div>
  			<div class="col">
  				<input type="text" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>

		<div class="row">
			<div class="col-md-3">
				<span id="dado_usu_nome" class="control-label">Naturalidade</span>
			</div>
  			<div class="col-md-3">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>
  			<div class="col align-self-center">
  				<span id="dado_usu_nome" class="control-label">Dados de Senha</span>
  			</div>
  			
		</div>

		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Sexo</span>
			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				@foreach($sexo as $sexo)
				<option value="{{$sexo}}">{{$sexo}}</option>
				@endforeach
				</select>
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Senha</span>
  			</div>
  			<div class="col">
  				<input type="password" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>	
		
		<div class="row">
			<div class="col">
				<span id="dado_usu_nome" class="control-label">Estado Civil</span>
			</div>
  			<div class="col">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>
  			<div class="col">
  				<span id="dado_usu_nome" class="control-label">Confirmar Senha</span>
  			</div>
  			<div class="col">
  				<input type="password" nome="dado_usu_nome" class="form-control">
  			</div>	
		</div>

			<div class="row">
			<div class="col-md-3">
				<span id="dado_usu_nome" class="control-label">Cor/Raça</span>
			</div>
  			<div class="col-md-3">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
				</select>
  			</div>
  			<div class="col-auto">
  				<input type="checkbox" name="nome" >
  				<span id="dado_usu_nome" class="control-label">Concordo com os termos do site</span>
  			</div>  				
		</div>

		<div class="row">
			<div class="col-md-3">
				<span id="dado_usu_nome" class="control-label">Nível de Escolaridade</span>
			</div>
  			<div class="col-md-3">
  				<select name="sexo" class="form-control">
				<option>Selecione</option>
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