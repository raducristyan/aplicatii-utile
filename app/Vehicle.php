<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'mark',
        'type',
        'displacement',
        'engine_series',
        'power',
        'color',
        'card_series',
        'card_number',
        'registration_number'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    /**
    * Get all of the owning vehicleable models.
    */
    public function vehicleable()
    {
        return $this->morphTo();
    }
}
