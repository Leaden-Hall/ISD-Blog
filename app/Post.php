<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	const ACTIVE = 1;
	const CANCELED = 0;
	const PENDING = 2;
    protected $table = "posts";

    protected $fillable = [
        'title',
        'summary',
        'content',
        'posts_status',
        'users_id'
    ];
}
