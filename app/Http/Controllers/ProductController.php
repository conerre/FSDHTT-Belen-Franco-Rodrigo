<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function show($id){
    	$producto = Product::find($id);
    	$VAC = compact("producto");
    	return view("producto", $VAC);
    }

      public function add(){
      $categories = Category::all();
      $VAC = compact("categories");
    	return view("agregarProducto", $VAC);
    }

     public function save(Request $request) {

      $reglas = [
          "name" => "required|string",
          "price" => "required|numeric|min:0",
          "stock" =>  "required|numeric|min:0",
          "description" => "required|string",
          "article_code" => "required|string",
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "min" => "El campo :attribute debe tener un mínimo de :min caractéres"
      ];

      $this->validate($request, $reglas, $mensajes);

      $producto = new Product();

      $producto->name = $request["name"];
      $producto->price = $request["price"];
      $producto->stock = $request["stock"];
      $producto->description = $request["description"];
      $producto->article_code = $request["article_code"];
      $producto->category_id = $request["category"];


      $producto->save();

      return redirect("/agregarProducto");
    }

      public function todos(){
      $products = Product::all();
      $VAC = compact("products");
      return view("productosAdmin", $VAC);
    }
}
