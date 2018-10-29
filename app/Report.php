<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    const CANCELED = 0;

    const PENDING = 1;

    const APPROVED = 2;

    protected $table = "reports";


    protected $fillable = [
        'reporter_id',
        'reported_posts_id',
        'reported_users_id',
        'content',
        'report_status'
    ];


    public function isCanceled() {
        if($this->report_status == self::CANCELED) {
            return true;
        }

        return false;
    }

    public function isPending() {
        if($this->report_status == self::PENDING) {
            return true;
        }

        return false;
    }

    public function isApproved() {
        if($this->report_status == self::APPROVED) {
            return true;
        }

        return false;
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function post(){
    	return $this->belongsTo('App\Post');

    }
}
