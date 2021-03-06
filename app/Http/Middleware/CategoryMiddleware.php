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
        $request->merge(array('categories' => Category::all()));
        return $next($request);
    }
}
