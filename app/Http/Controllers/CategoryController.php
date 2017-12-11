<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function showCategory($id){
    	$category = Category::find($id);
      $category->products = Product::paginate(12);
    	$VAC = compact("category", " category->products");
    	return view("category", $VAC);
    }

     public function add(){
      $categories = Category::all();
      $VAC = compact("categories");
    	return view("agregarCategoria", $VAC);
    }

     public function save(Request $request) {

      $reglas = [
          "name" => "required|string",
      ];

      $mensajes = [
        "required" => "El nombre es requerido",
      ];

      $this->validate($request, $reglas, $mensajes);

      $category = new Category();

      $category->name = $request["name"];



      $category->save();

      return redirect("/agregarCategoria");
    }

      public function delete($id) {
      $category = Category::find($id);
      $category->delete();

      return redirect("/");
    }
}
