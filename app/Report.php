<?php

namespace App;

use App\User;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    

    protected $fillable = [
        'reporter_id',
        'reported_posts_id',
        'reported_users_id',
        'content',
        'report_status'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function post(){
    	return $this->belongsTo('App\Post');
    }
}
