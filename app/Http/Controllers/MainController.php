<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Category;

class MainController extends Controller
{
    public function aAsienta(Request $request){
        return view("asienta");
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
