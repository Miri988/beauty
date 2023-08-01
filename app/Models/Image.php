<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'url_img',
    ];

    public function imgable (): MorphTo
    {
        return $this -> morphTo();
    }

}
