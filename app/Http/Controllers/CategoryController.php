<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function showCategory($id){
    	$category = Category::find($id);
    	$VAC = compact("category");
    	return view("category", $VAC);
    }
}
