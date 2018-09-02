@extends('site.templates.template1')

@section('content')

@include('site.includes.header')

@include('site.includes.menu')

<br>
<h1>Concursos Realizados</h1><br>

<div class="row">
	<div class="col-md-9 order-md-1 pt-2">
		<div class="list-group">
		  	<div class="list-group-item flex-column align-items-start">
		    	<div class="d-flex w-100 justify-content-between">
		      		<h5 class="mb-1">Concurso Polícia Federal</h5>
		      		<small>3 days ago</small>
		    	</div>
		    	<p class="mb-1">Informações sobre o concurso público para a Polícia Federal podem ser obtidas pelo telefone 0800 0000000 e pelo e-mail concursos@fdt.br a partir de 24/08/2018. O concurso oferece vagas para cargos de Nível Superior e Nível Médio, conforme consta do Edital.</p>
		    	<a href="#" class="btn btn-secondary btn-lg btn-sm active" tabindex="-1" role="button" aria-disabled="true">Ler mais >></a>
		  	</div>
		  	<div class="list-group-item flex-column align-items-start">
		    	<div class="d-flex w-100 justify-content-between">
		      		<h5 class="mb-1">Concurso Polícia Civil</h5>
		      		<small class="text-muted">3 days ago</small>
		    	</div>
		    	<p class="mb-1">Informações sobre o concurso público para a Polícia Civil podem ser obtidas pelo telefone 0800 0000000 e pelo e-mail concursos@fdt.br a partir de 24/08/2018. O concurso oferece vagas para cargos de Nível Superior e Nível Médio, conforme consta do Edital.</p>
		   		<a href="#" class="btn btn-secondary btn-lg btn-sm active" tabindex="-1" role="button" aria-disabled="true">Ler mais >></a>
		  	</div>
			 <div class="list-group-item flex-column align-items-start">
			    <div class="d-flex w-100 justify-content-between">
			      	<h5 class="mb-1">Concurso Polícia Militar</h5>
			      	<small class="text-muted">3 days ago</small>
			    </div>
			    <p class="mb-1">Informações sobre o concurso público para a Polícia Militar podem ser obtidas pelo telefone 0800 0000000 e pelo e-mail concursos@fdt.br a partir de 24/08/2018. O concurso oferece vagas para cargos de Nível Superior e Nível Médio, conforme consta do Edital.</p>
			    <a href="#" class="btn btn-secondary btn-lg btn-sm active" tabindex="-1" role="button" aria-disabled="true">Ler mais >></a>
		  	</div>
		</div>
	</div>

	<div class="col-md-3 order-md-2 pt-3">
	    <div class="bg-faded mb-3">
	        <h5 class="card-header">Por Data</h5>
	        <div>
	            <ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
					    <a href="#"><p>> Janeiro</p></a>
					    <span class="badge badge-primary badge-pill">14</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
					    <a href="#"><p>> Fevereiro</p></a>
					    <span class="badge badge-primary badge-pill">2</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
					    <a href="#"><p>> Março</p></a>
					    <span class="badge badge-primary badge-pill">1</span>
					</li>
				</ul>
	        </div>
	    </div>
	</div>
</div>
<br>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Próximo</a>
    </li>
  </ul>
</nav>

@include('site.includes.rodape')

@endsection