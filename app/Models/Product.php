<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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
        'specification',
        'ingredients',
        'use',
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

    // public function image (): MorphOne
    // {
    //     return $this -> morphOne (Image::class, 'imgable');
    // }

    public function images() {
        return $this->hasMany(Image::class, 'imgable_id');
    }
}
