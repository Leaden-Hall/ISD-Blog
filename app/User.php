<?php
namespace App;
use App\Report;
use App\Role;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    protected $table ="users";
    const MALE = 1;
    const FEMALE = 0;
    const UNDEFINED = 2;
    const ACTIVE = 1;
    const DEACTIVATED = 0;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'email',
        'is_notified',
        'avatar',
        'phone',
        'gender',
        'user_status',
        'roles_id'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isNotified() {
        if($this->is_notified == 1) {
            return "Enable";
        }else if ($this->is_notified == 0) {
            return "Disable";
        }
        return null;
    }

    public function gender() {
        if($this->gender == self::MALE) {
            return "Male";
        }else if ($this->gender == self::FEMALE) {
            return "Female";
        }else if ($this->gender == self::UNDEFINED){
            return "Rather not to say";
        }
        return null;
    }

    public function status() {
        if($this->user_status == self::ACTIVE) {
            return "Active";
        }else if ($this->user_status == self::DEACTIVATED) {
            return "Deactivated";
        }
        return null;
    }

    public function isActive() {
        if($this->user_status == self::ACTIVE) {
            return true;
        }
        return false;
    }

    public function isInactive() {
        if($this->user_status == self::DEACTIVATED) {
            return true;
        }
        return false;
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function role() {
        return $this->belongsTo('App\Role', 'roles_id');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
