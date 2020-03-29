<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * This class describes a rate scale.
 * 
 * @property id integer
 * @property label string
 * @property description string
 */
class RateScale extends Model
{
	protected $fillable = [
        'label',
        'description'
    ];

    public function rates()
    {
        return $this->hasMany(Rate::class, 'scale_id');
    }
}
