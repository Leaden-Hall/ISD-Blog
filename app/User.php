<?php

namespace App;

use App\Report;
use App\Role;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function role(){
	    return $this->belongsTo('App\Role');
	}

	protected $fillable = [
        'username', 'email', 'password',
    ];

    public function reports(){
    	return $this->hasMany('App\Report');
    }

}
