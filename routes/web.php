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
Route::get("/adminPanel", "AdminController@panel")->middleware('admin');
Route::get("/registerAdmin", "AdminController@addAdmin")->middleware('admin');
Route::get("/agregarProducto", "ProductController@add")->middleware('admin');
Route::post("/agregarProducto", "ProductController@save");

	//Productos	
Route::get("/productos", "ProductController@todos")->middleware('admin');
Route::get("/producto/{id}", "ProductController@show");
Route::get("/editarProducto", "ProductController@edit");
Route::put("/editarProducto", "ProductController@update");

	//Categorías
Route::get("/categoría/{id}", "CategoryController@showCategory");


	//Nosotros
Route::get("/experiencias", "MainController@aExperiencias");

Route::get("/nuestraHistoria", "MainController@aNuestraHistoria");

Route::get("/comoRealizarCompra", "MainController@aComoRealizarCompra");

Route::get("/preguntasFrecuentes", "MainController@aPreguntasFrecuentes");

Route::get("/comentarios", "MainController@aComentarios");

Route::get("/producto", "MainController@aProducto");

Route::get("/carrito", "MainController@aCarrito");

Route::get("/perfil", "MainController@aPerfil");
Route::get("/contacto", "MainController@aContacto");

Route::get("/", "MainController@aAsienta");

	//Logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//producto, productocontoller@index
//producto{id}, productocontoller@show

Auth::routes();