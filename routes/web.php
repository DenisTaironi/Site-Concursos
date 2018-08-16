<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
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