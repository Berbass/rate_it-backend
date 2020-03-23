<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RateScale extends Model
{
    public function rates()
    {
        return $this->hasMany(Rate::class, 'scale_id');
    }
}
