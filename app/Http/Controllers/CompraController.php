<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class CompraController extends Controller
{
    public function menosStock($id){
    	$product = Product::find($id);
    	$stock = $product->stock;
    	if ($stock > 1) {
    		$product->decrement('stock', 1);
    		return redirect("/producto/$id");
    	}
    	if ($stock === 1) {
    		$product->decrement('stock', 1);
    		$product->delete();
    		return redirect("/");
    	}
    }
}
