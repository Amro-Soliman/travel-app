<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    public function stations()
    {
        return $this->hasMany('App\Station');
    }
}
