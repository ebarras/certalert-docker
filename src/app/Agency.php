<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public function agreements() 
    {
    	return $this->hasMany('App\Agreement')
    }
}
