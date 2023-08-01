<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'title',
        'rating',
        'description',
    ];
    
    public function image (): MorphMany
    {
        return $this -> morphMany (Image::class, 'imgable');
    }
}
