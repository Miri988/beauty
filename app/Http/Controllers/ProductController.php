<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Service\NewService;
use App\Service\BestService;
use App\Service\SearchService;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{

    protected $newService;
    protected $bestService;
    protected $search;

    public function __construct(NewService $newService, BestService $bestService, SearchService $search)
    {
        $this -> newService = $newService;
        $this -> bestService = $bestService;
        $this -> search = $search;
    }
    /**
     * Display a listing of the resource.
     */
    public function index() : Collection
    {
        $products = Product::all() -> image() -> paginate(15);
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product = Product::create([
            'title' => $request -> post ('title'),
            'rating' => 0,
            'price' => $request -> post ('price'),
            'description' => $request -> post('description'), 
            'size' => $request -> post('size'),
            'quantity' => $request -> post('quantity'), 
            'vendor_code' => $request -> post('vendor_code'),
        ]);
        return $product -> with('status', 'Product added successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id) -> image();
        return response() -> json($product, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product -> update([
            'title' => $request -> input('title'),
            'price' => $request -> input('price'),
            'description' => $request -> input('description'),
            'size' => $request -> input('size'),
            'quantity' => $request -> input('quantity'),
            'vendor_code' => $request -> input('vendor_code'),
            'specification' => $request -> input('specification'),
            'ingredients' => $request -> input('ingredients'),
            'use' => $request -> input('use'),
        ]);
        return $product -> with('status', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::truncate($id);
        return redirect('/')-> with('status', 'Product delete successful');
    }

    public function addCard(Product $product)
    {
        //
    }

    public function newArrival (Product $product)
    {
        return $this -> newService -> getData();
    }

    public function bestSellers (Product $product)
    {
        return $this -> bestService -> getData();
    }

    public function search (Product $product)
    {
        return $this -> search -> getData();
    }


}
