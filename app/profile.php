<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function post()
    {
        return $this->hasMany('App\post');
    }
    public function mesure()
    {
        return $this->hasMany('App\mesure');
    }
}
