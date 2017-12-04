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


	//Admin
Route::get("/adminPanel", "AdminController@panel");
Route::get("/registerAdmin", "AdminController@addAdmin")->middleware('admin');

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

Route::get("/", "MainController@aAsienta");



	//Para la masterPage (Mandar info de Usuarios, no utilizable)
Route::get("/master", "MainController@aMaster");

	//Logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



	//De Laravel
Auth::routes();

Route::resource('producto', 'ProductoController');

//producto, productocontoller@index
//producto{id}, productocontoller@show

