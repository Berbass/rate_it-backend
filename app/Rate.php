<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function scale()
    {
        return $this->belongsTo(RateScale::class, 'scale_id');
    }

    public function thing()
    {
        return $this->belongsTo(Thing::class);
    }
}
