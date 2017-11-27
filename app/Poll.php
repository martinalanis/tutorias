<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    //
    protected $table = 'polls';

    protected $fillable = ['name', 'user_id', 'poll', 'active'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
