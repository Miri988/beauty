<?php

namespace App\Dto;

use App\Models\Product;

class ProductDto
{
    public $id;
    public $title;
    public $price;
    public $rating;
    public $image;
    public $description;

    public function __construct(Product $product)
    {
        $this -> id = $product -> id;
        $this -> title = $product -> title;
        $this -> price = $product -> price;
        $this -> rating = $product -> rating;
        $this -> description = $product -> description;
        $images = $product -> images;
        if ($images -> count() > 0) {
            $this -> image = $images -> get(0) -> url_img;
        }
    }
}