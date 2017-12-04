<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App/Category;

class Product extends Model
{
	protected $guarded = [];
    public function categorias(){
    	return $this->belongsTo(Category::class,"category_id");
    }
}
