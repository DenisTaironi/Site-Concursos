@extends('site.templates.template1')

@section('content')

<h1 class="title-pg">HomePage do site<h1>

@include('site.includes.menu')

<div class="mySlider">
	<div class="itemSlide">
		<img src="assets/site/images/01.jpg" alt="Imagem 01">
	</div>
	<div class="itemSlide">
		<img src="assets/site/images/02.png" alt="Imagem 01">
	</div>
	<div class="itemSlide">
		<img src="assets/site/images/03.jpg" alt="Imagem 01">
	</div>
</div>


<a href="{{route('usuario.create')}}" class="btn btn-primary btn-add">
	<span class="fas fa-plus">Cadastrar</span>
</a>

<!--<input type="button" onclick="funcao1()" value="Exibir Alert" /> -->
<!--<input id="botao1" type="button" onclick="botao1_Click" value="Click me" -->

@include('site.includes.rodape')

@endsection

