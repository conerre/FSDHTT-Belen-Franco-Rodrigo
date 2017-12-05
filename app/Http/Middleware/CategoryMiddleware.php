<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;

class CategoryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        /*$categories = Category::all(); 

        $request->merge(array("categories" => "category"));
        $request['categories']= 'category';

        view()->share('categories', 'category');

            */
        $request->merge(array('categories' => Category::all()));

        //dd($request->get('categories'));
        return $next($request);
    }
}
