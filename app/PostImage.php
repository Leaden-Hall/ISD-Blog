<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $table = "posts_image";

    protected $fillable = [
        'posts_id',
        'url',
        'caption'
    ];
}
