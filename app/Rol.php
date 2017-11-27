<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    protected $fillable = ['user_id', 'rol', 'career_id'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
