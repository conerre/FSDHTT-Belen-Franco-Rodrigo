<?php

namespace App\Http\Middleware;

use Closure;

class ProductMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {     $carrito = session("carrito");
          if ($carrito && in_array($id, $carrito)) {
            $enCarrito = true;
          } else {
            $enCarrito = false;
          }

          
        return $next($request);
    }
}
