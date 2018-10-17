<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'title',
        'summary',
        'content',
        'posts_status',
        'users_id'
    ];
}
