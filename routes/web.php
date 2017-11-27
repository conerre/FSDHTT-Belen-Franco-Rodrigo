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



//Páginas estáticas

	//Categorías
Route::get("/accesorio", "MainController@aExp");

Route::get("/dormitorio", "MainController@aExp");

Route::get("/comedor", "MainController@aExp");

Route::get("/living", "MainController@aExp");

Route::get("/exteriores", "MainController@aExp");

	//Nosotros
Route::get("/experiencias", "MainController@aExp");

Route::get("/nuestraHistoria", "MainController@aNH");

Route::get("/comoRealizarCompra", "MainController@aCRP");

Route::get("/preguntasFrecuentes", "MainController@aPF");



Route::get("/contacto", "MainController@aContacto");

Route::get("/asienta", "MainController@aAsienta");

Route::get("/master", "MainController@aMaster");

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
