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


//Admin

Route::get("/adminPanel", "AdminController@panel")->middleware('admin');
Route::get("/registerAdmin", "AdminController@addAdmin")->middleware('admin');
	//Categorias-admin
Route::get("/agregarCategoria", "CategoryController@add")->middleware('admin');
Route::post("/agregarCategoria", "CategoryController@save")->middleware('admin');
Route::get("/borrarCategoria/{id}", "CategoryController@delete")->middleware('admin');
	//Productos-admin
Route::get("/agregarProducto", "ProductController@add")->middleware('admin');
Route::post("/agregarProducto", "ProductController@save")->middleware('admin');
Route::get("/borrarProductoDeDetalle/{id}", "ProductController@deleteDetalle")->middleware('admin');
Route::get("/borrarProducto/{id}", "ProductController@delete")->middleware('admin');
Route::get("/editarProducto/{id}", "ProductController@edit")->middleware('admin');
Route::post("/editarProducto", "ProductController@store")->middleware('admin');

	//Buscador
Route::get("/buscador", "ProductController@buscar");

	//Compras
Route::get("/compro/{id}", "CompraController@menosStock");


	//Productos	
Route::get("/productos", "ProductController@todos");
//Route::get("/productosTodos", "ProductController@todosProd");
Route::get("/producto/{id}", "ProductController@show");	

	//Carrito
Route::get("/carrito", "CarritoController@listar")->middleware("auth");
Route::post("/quitarCarrito", "CarritoController@remove");
Route::post("/agregarCarrito", "CarritoController@add");
Route::post("/vaciarCarrito", "CarritoController@vaciar");

	//Categorías
Route::get("/categoria/{id}", "CategoryController@showCategory");


	//Nosotros
Route::get("/experiencias", "MainController@aExperiencias");

Route::get("/nuestraHistoria", "MainController@aNuestraHistoria");

Route::get("/comoRealizarCompra", "MainController@aComoRealizarCompra");

Route::get("/preguntasFrecuentes", "MainController@aPreguntasFrecuentes");

//Route::get("/productosTodos", "MainController@productosTodos");

Route::get("/comentarios", "MainController@aComentarios");



Route::get("/perfil", "MainController@aPerfil");
Route::get("/contacto", "MainController@aContacto");

Route::get("/", "MainController@aAsienta");

	//Logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//producto, productocontoller@index
//producto{id}, productocontoller@show

Auth::routes();