<?php

namespace App;

use App\User;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    protected $fillable = [
        'title',
        'description'
    ];


    public function users() {
        return $this->hasMany('App\User');
    }

}
