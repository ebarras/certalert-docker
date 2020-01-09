<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function agreement()
    {
        return $this->belongsTo('App\Agreement');
    }
}
