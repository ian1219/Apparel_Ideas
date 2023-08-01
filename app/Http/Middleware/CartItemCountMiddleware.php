<?php

namespace App\Http\Middleware;


use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CartItemCountMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            view()->share('cartItemCount', $cartCount);
        } else {
            view()->share('cartItemCount', 0);
        }

        return $next($request);
    }
}


