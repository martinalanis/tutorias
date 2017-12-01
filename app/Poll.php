<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    //
    protected $table = 'polls';

    protected $fillable = ['name', 'user_id', 'poll', 'active'];

    public function answers() {
    	return $this->belongsToMany('App\User', 'answers')->withPivot('answer', 'active')->withTimestamps();
    }
}
