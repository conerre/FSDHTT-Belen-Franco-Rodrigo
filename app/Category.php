<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App/Product;

class Category extends Model
{	
	protected $guarded = [];
    public function productos(){
    	return $this->hasMany(Product::class, "category_id");
    }
}
