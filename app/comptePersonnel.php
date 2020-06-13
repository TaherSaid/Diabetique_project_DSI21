<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comptePersonnel extends Model
{
    public function comptesuivie()
    {
        return $this->hasMany('App\compteSuivie');
    }
}
