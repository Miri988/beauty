<?php

namespace App\Service;

use Closure;
use App\Dto\ProductDto;
use App\Models\Product;
use App\Dto\ProductCardDto;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
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

    public function getBestsellers ()
    {
        return Product::orderBy('rating', 'desc') -> take(8) -> get() -> map(function ($el) {
            return new ProductDto($el);
        });
    }

    public function toDto ($collection)
    {
        return $collection -> map(function ($el) {
            return new ProductDto($el);
        });
    }

    public function getPage ($page)
    {
        return [
            'page' => $page -> currentPage(),
            'count' => $page -> total(),
            'list' => $this -> toDto(collect($page -> items())),
        ];
    }

    public function getProductCard($id)
    {
        $product = Product::findOrFail($id);
        return new ProductCardDto($product);
    }
}