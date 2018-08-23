<?php

Route::resource('/site/concurso','Site\ConcursoController'); 
Route::resource('/site/usuario','Site\UsuarioController');

//$this->get('','');

Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index');
	Route::get('/teste','UsuarioController@teste');
	
});