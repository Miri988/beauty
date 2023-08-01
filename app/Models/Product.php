<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'rating',
        'price',
        'description',
        'size',
        'quantity',
        'vendor_code',
    ];

    public function category (): HasOne
    {
        return $this -> hasOne(Category::class);
    }

    public function review (): HasMany
    {
        return $this -> hasMany (Review::class);
    }

    public function order (): HasMany
    {
        return $this -> hasMany (Order::class);
    }

    public function image (): MorphMany
    {
        return $this -> morphMany (Image::class, 'imgable');
    }
}
