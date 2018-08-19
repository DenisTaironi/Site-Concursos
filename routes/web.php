<?php

Route::resource('/site/concursos','Site\ConcursoController'); 
Route::resource('/site/usuario','Site\UsuarioController'); 

Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index');
	
});