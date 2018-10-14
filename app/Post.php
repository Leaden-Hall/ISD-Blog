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

    public function user() {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }
}
