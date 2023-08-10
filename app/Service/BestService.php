<?php

namespace App\Service;

use Closure;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BestService
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function getData () : Collection
    {
        $products = Product::orderBy() -> take(12) -> get();
        return $products;
    }
}