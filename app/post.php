<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function popst_profile()
    {
        return $this->belongsTo('App\profile');
    }
}
