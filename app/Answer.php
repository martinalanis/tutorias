<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    protected $fillable = ['user_id', 'answer', 'active'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
