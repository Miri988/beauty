<?php

namespace App\Service;

use Closure;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchService
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function getData () : Collection
    {
        $search = $_GET['query'];
        $products = Product::where('title', 'LIKE', "%$search%") 
        -> orWhere('description', 'LIKE', "%$search%")
        -> orWhere('specification', 'LIKE', "%$search%")
        -> orWhere('ingredients', 'LIKE', "%$search%")
        -> orWhere('use', 'LIKE', "%$search%")
        -> image() -> get();
        return $products;
    }
}