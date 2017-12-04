<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'last_name', 'second_last_name', 'career_id', 'group_id', 'type', 'active', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->hasMany('App\Rol');
    }

    public function polls() {
        return $this->hasMany('App\Poll');
    }

    public function answers() {
        return $this->belongsToMany('App\Poll', 'answers')->withPivot('answer', 'active')->withTimestamps();
    }

    public function tutor_de() {
        return $this->hasMany('App\Group');
    }

    public function alumno_de() {
        return $this->belongsTo('App\Group');
    }

    public function career() {
        return $this->belongsTo('App\Career');
    }

    public function anexos19() {
        return $this->hasMany('App\Anexo19');
    }
}
