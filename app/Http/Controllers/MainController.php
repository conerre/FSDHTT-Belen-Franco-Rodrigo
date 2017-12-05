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
    
}
