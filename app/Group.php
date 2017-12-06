<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = ['identifier', 'name', 'periodo', 'carrer_id', 'user_id'];

    public function tutor() {
    	return $this->belongsTo('App\User');
    }

    public function career() {
    	return $this->belongsTo('App\Career', 'career_id', 'identifier');
    }

    public function alumnos() {
    	return $this->hasMany('App\User');
    }

    public function anexo19() {
        return $this->hasOne('App\Anexo19');
    }
}
