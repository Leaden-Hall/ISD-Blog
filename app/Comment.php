<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'posts_id',
        'users_id',
        'parent_id',
        'content'
    ];
}
