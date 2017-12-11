<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;

class CarritoController extends Controller
{
    public function add(Request $request){
    	$id = $request["id"];
    	$carrito = session("carrito");
    	if (!$carrito) {
    		$carrito = [];
    	}

    	$carrito[] = $id;

    	session(["carrito" => $carrito]);

    	return back();	 
    } 

     public function remove(Request $request){
		 $carrito = session("carrito");

		 foreach ($carrito as $key => $item) {
		 	if ($item == $request["id"]) {
		 		unset($carrito[$key]);
		 	}
		 } 

		 session(["carrito" => $carrito]);

		 return back();  
    } 

      public function listar(){
		$carritoIds = session("carrito");

		if (!$carritoIds) {
			$carritoIds = [];
		}
		
		$carrito = Product::find($carritoIds);
		
		$VAC = compact("carrito");

		return view("carrito", $VAC);
    } 
}
