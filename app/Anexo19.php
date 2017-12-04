<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo19 extends Model
{
    //

    protected $fillable = ['dpto', 'user_id', 'programa', 'group_id', 'data'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
