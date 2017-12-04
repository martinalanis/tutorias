<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
	protected $primaryKey = 'identifier';

	public $incrementing = false;

	protected $keyType = 'string';

    protected $fillable = ['identifier', 'name'];

    public function alumnos() {
    	return $this->hasMany('App\User');
    }

    public function career() {
    	return $this->hasMany('App\Group');
    }
}
