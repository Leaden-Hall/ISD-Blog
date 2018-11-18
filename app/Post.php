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
    public function isActive() {
        if($this->posts_status == self::ACTIVE) {
            return true;
        }
        return false;
    }
    public function isPending() {
        if($this->posts_status == self::PENDING) {
            return true;
        }
        return false;
    }
    public function isCanceled() {
        if($this->posts_status == self::CANCELED) {
            return true;
        }
        return false;
    }
    public function allComments($post_id) {
        $allComments = new Comment;
        $numberOfComments = count($allComments::where('posts_id', '=', $post_id)->get());
        return $numberOfComments;
    }
    public function user() {
        return $this->belongsTo('App\User', 'users_id');
    }
    public function comments() {
        return $this->hasMany('App\Comment', 'posts_id');
    }
}