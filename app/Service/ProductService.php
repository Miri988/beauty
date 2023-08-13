<?php

namespace App\Service;

use App\Dto\ProductDto;
use Closure;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductService
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function getNewArrivals ()
    {
        return Product::latest() -> take(12) -> get() -> map(function ($el) {
            return new ProductDto($el);
        });
    }

    public function getBestsellers () : Collection
    {
        return Product::orderBy('id', 'asc') -> take(8) -> get() -> map(function ($el) {
            return new ProductDto($el);
        });
    }
}