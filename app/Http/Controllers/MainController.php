<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Category;
use App\Product;


class MainController extends Controller
{
    public function aAsienta(){
        $destacados = Product::where("stock", "<", 2)->take(4)->get();
        $products = Product::orderBy('id', 'desc')->take(4)->get();
        $carrito = session("carrito");

        foreach ($products as $product) {
            if ($carrito && in_array($product->id, $carrito)) {
                $enCarrito = true;
            } else {
                $enCarrito = false;
              }
        }
        foreach ($destacados as $destacado) {
            if ($carrito && in_array($destacado->id, $carrito)) {
                $enCarrito = true;
            } else {
                $enCarrito = false;
              }
        }

        $VAC = compact("products", "destacados", "enCarrito");

        return view("asienta", $VAC);
    }

    public function aContacto(){
        return view("contacto");
    }

    public function aPerfil(){
        return view("perfil");
    }

    //Nosotros
    public function aExperiencias(){
    	return view("experiencias");
    }

    public function aNuestraHistoria(){
    	return view("nuestraHistoria");
    }

    public function aComoRealizarCompra(){
    	return view("comoRealizarCompra");
    }

    public function aPreguntasFrecuentes(){
    	return view("preguntasFrecuentes");
    }

    public function aProducto(){
        return view("producto");
    }

    public function aComentarios(){
        return view("comentarios");
    }

    public function aCarrito(){
        return view("carrito");
    }

    //Categorías
    public function aAcces(){
        return view("accesorio");
    }

    public function aDorm(){
        return view("dormitorio");
    }

    public function aComdeor(){
        return view("comedor");
    }

    public function aLiving(){
        return view("living");
    }

    public function aExt(){
        return view("exteriores");
    }

    public function aMaster(){
        return view("masterPage");
    }
}
