<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compteSuivie extends Model
{
    public function orderLines()
    {
        return $this->hasMany('App\compteSuivie');
    }
    public function mesure()
    {
        return $this->hasMany('App\mesure');
    }
}
