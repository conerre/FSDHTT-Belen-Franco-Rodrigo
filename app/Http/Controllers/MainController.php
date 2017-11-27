<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class MainController extends Controller
{
    public function aAsienta(){
    	return view("asienta");
    }

    public function aContacto(){
        return view("contacto");
    }

    //Nosotros
    public function aExp(){
    	return view("experiencias");
    }

    public function aNH(){
    	return view("nuestraHistoria");
    }

    public function aCRP(){
    	return view("comoRealizarCompra");
    }

    public function aPF(){
    	return view("preguntasFrecuentes");
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
