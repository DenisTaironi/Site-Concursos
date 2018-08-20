@extends('site.templates.template1')
@section('content')

<h1 class="title-pg">formulario de cadastro<h1>

<form class="form" method="post" action="{{route('usuario.store')}}">
	{!! csrf_field() !!}
	<div class="form-inline">
		<label >Nome:</label>
		<input type="text" nome="dado_usu_nome" placeholder="Nome" class="form-control">
	</div>
	
	<div class="form-inline">
		<label >Data de nascmento:</label>
		<input type="date" name="dado_usu_nascimento" placeholder="Data de nascimento" class="form-control">
	</div>
	<div class="form-inline">
		<label >Número de CPF:</label>
		<input type="text" name="dado_usu_cpf" placeholder="CPF" class="form-control">
	</div>
	<div class="form-inline">
		<label >Número de filhos:</label>
		<input type="text" name="dado_usu_num_filhos" placeholder="Número de filhos" class="form-control">
	</div>
	<div class="form-inline">
		<label >Nome da mãe:</label>
		<input type="text" name="dado_usu_mae" placeholder="Nome da mãe" class="form-control">
	</div>
	<div class="form-inline">
		<label >Nome do pai:</label>
		<input type="text" name="dado_usu_pai" placeholder="Nome do pai" class="form-control">
	</div>
	<div class="form-inline">
		<label >Sexo:</label>
		<select name="sexo" class="form-control">
			<option>Escolha o sexo</option>
			@foreach($sexo as $sexo)
			<option value="{{$sexo}}">{{$sexo}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>
		<input type="checkbox" name="nome" placeholder="Nome:">
		Concordo com os termos.
		</label>
	</div>

	<button class="btn btn-primary">Cadastrar</button>

</form>
	
@include('site.includes.rodape')

@endsection