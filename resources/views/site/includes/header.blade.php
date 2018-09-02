<div class="row" style="padding-top: 30px;">
  	<div class="col-md-8">
  		<a href="{{route('home')}}"><img src="assets/site/images/Logo2.png" class="rounded float-left" alt="Logo"></a>
  	</div>
  	<div class="col-md-4 align-self-end">
      <div class="row">       
          <div class="col"><a href="{{route('usuario.index')}}"><span>Logar</span></a></div>
          <div class="col"><a href="{{route('usuario.create')}}"><span>Cadastrar</span></a></div>
          <div class="col-6"><a href="{{route('painel.index')}}"><span>Área Restrita</span></a></div>   
      </div>
  		<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      		<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    	</form>    	
  	</div>
</div>