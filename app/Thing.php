<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * This class describes a thing.
 * 
 * @property id integer
 * @property label string
 * @property description string
 */
class Thing extends Model
{
    protected $fillable = [
        'label', 'description'
    ];

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
