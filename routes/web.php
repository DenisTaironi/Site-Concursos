<?php

/*Route::group(['prefix'=>'painel', 'middleware'=>'auth'], function(){

	Route::get('/users', function () {
	    return 'users';
	});
	Route::get('/concursos', function () {
	    return 'concursos';
	});
	Route::get('/', function () {
	    return 'pagina inicial do painel';
	});
});*/
Route::resource('/site/concursos','Site\ConcursoController'); 

Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index');
	
});