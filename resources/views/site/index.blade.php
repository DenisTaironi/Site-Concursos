@extends('site.templates.template1')

@section('content')

@include('site.includes.header')

@include('site.includes.menu')

<br>

<div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin: 0px auto; visibility: visible;">
		<ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="assets/site/images/01.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="assets/site/images/02.png" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="assets/site/images/03.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="row">
  	<div class="col-sm-6">
		<div class="card border-secondary mb-3" style=" margin-bottom: 30px; margin-top: 30px;">
			<div class="card-header">Header</div>
		  	<img class="card-img-top" src="assets/site/images/choro01.jpg" alt="Card image cap">
		  	<div class="card-body text-dark">
		   		<h5 class="card-title">Card title</h5>
			    <p class="card-text" >"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			    <a href="#" class="btn btn-primary">Saiba mais</a>
			 </div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="card border-secondary mb-3" style=" margin-bottom: 30px; margin-top: 30px;">
			<div class="card-header">Header</div>
		  	<img class="card-img-top" src="assets/site/images/choro02.jpg" alt="Card image cap">
		  	<div class="card-body text-dark">
		   		<h5 class="card-title">Card title</h5>
			    <p class="card-text" >"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			    <a href="#" class="btn btn-primary">Saiba mais</a>
			 </div>
		</div>
	</div>
</div>


<!--<input type="button" onclick="funcao1()" value="Exibir Alert" /> -->
<!--<input id="botao1" type="button" onclick="botao1_Click" value="Click me" -->

@include('site.includes.rodape')

@endsection



