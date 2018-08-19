@extends('site.templates.template1')

@section('content')

<h1 class="title-pg">HomePage do site<h1>

@include('site.includes.menu')

	<a href="{{route('usuario.create')}}" class="btn btn-primary btn-add">
		<span class="fas fa-plus">Cadastrar</span>
	</a>


@include('site.includes.rodape')

@endsection

