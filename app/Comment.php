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


    public function childComment($parent_id) {
        $childComments = $this::where('parent_id', '=', $parent_id)->get();

        return $childComments;
    }

    public function post() {
        return $this->belongsTo('App\Post', 'posts_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'users_id');
    }
}
