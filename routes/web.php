<?php

Route::resource('/site/concurso','Site\ConcursoController'); 
Route::resource('/site/usuario','Site\UsuarioController');


//$this->get('','');

Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index')->name('home');
	Route::get('/about', 'SiteController@about')->name('about');
	Route::get('/artigos', 'SiteController@artigos')->name('artigos');
	Route::get('/eventos', 'SiteController@eventos')->name('eventos');
	Route::get('/fale_conosco', 'SiteController@fale_conosco')->name('fale_conosco');
	Route::get('/noticias', 'SiteController@noticias')->name('noticias');
	Route::get('/videos', 'SiteController@videos')->name('videos');
	Route::get('/teste','UsuarioController@teste');
	
});