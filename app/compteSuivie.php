<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compteSuivie extends Model
{
    public function compte_suivie()
    {
        return $this->hasMany('App\compteSuivie');
    }
    public function mesure()
    {
        return $this->hasMany('App\mesure');
    }
}
