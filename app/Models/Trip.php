<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    public function plans()
    {
        return $this->hasMany('App\Models\Plan');
    }
}
