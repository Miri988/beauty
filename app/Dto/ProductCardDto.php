<?php

namespace App\Dto;

use App\Models\Product;

class ProductCardDto
{
    public $id;
    public $title;
    public $price;
    public $rating;
    public $images;
    public $description;
    public $use;
    public $size;
    public $specification;
    public $ingredients;

    public function __construct(Product $product)
    {
        $this -> id = $product -> id;
        $this -> title = $product -> title;
        $this -> price = $product -> price;
        $this -> rating = $product -> rating;
        $this -> description = $product -> description;
        $this -> use = $product -> use;
        $this -> size = $product -> size;
        $this -> specification = $product -> specification;
        $this -> ingredients = $product -> ingredients;
        $this -> images = $product -> images -> map(function ($el) {
            return $el -> url_img;
        });
    }
}