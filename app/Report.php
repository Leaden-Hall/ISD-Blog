<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";

    protected $fillable = [
        'reporter_id',
        'reported_posts_id',
        'reported_users_id',
        'content',
        'report_status'
    ];
}
