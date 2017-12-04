<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function addAdmin(){
    	return view ("adminRegister");
    }

    public function panel(){
    	return view ("adminPanel");
    }
}
