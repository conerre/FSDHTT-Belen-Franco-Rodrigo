<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    public function show($id){
    	$producto = Product::find($id);
    	$VAC = compact("producto");
    	return view("producto", $VAC);
    }

      public function add(){
    	return view("agregarProducto");
    }

     public function save(Request $request) {

      $reglas = [
          "name" => "required|string",
          "price" => "required|integer|min:0",
          "stock" =>  "required|numeric|min:0",
          "description" => "required|string",
          "category_id" => "required|integer",
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "min" => "El campo :attribute debe tener un mínimo de :min caractéres"
      ];

      $this->validate($request, $reglas, $mensajes);

      $producto = new Product();

      $producto->name = $request["name"];
      $producto->price = $request["premios"];
      $producto->stock = $request["duracion"];
      $producto->description = $request["description"];
      $producto->category_id = $request["cateogry"];

      $producto->save();

      return redirect("/productos");
    }
}
