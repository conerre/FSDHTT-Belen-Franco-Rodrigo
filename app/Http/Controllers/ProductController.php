<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function show($id){
    	$product = Product::find($id);
    	$VAC = compact("product");
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

      $product = new Product();

      $product->name = $request["name"];
      $product->price = $request["price"];
      $product->stock = $request["stock"];
      $product->description = $request["description"];
      $product->article_code = $request["article_code"];
      $product->category_id = $request["category"];


      $product->save();

      return redirect("/agregarProducto");
    }

      public function todos(){
      $products = Product::all();
      $VAC = compact("products");
      return view("productosAdmin", $VAC);
    }
}
