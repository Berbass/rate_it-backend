<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * This class describes a thing.
 * 
 * @property id integer
 * @property scale RateScale
 * @property thing Thing
 */
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
