<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    public function agency()
    {
    	return $this->belongsTo('App\Agency');
    }

    public function contacts()
    {
        return $this->belongsToMany('App\Contact');
    }

    public function certificates()
    {
        return $this->hasMany('App\Certificate');
    }


}
