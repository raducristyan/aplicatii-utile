<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'county_siruta',
    ];

    /**
     * Get the county that owns the model.
     */
    public function county()
    {
        return $this->belongsTo(County::class);
    }

    /**
     * Get all addresses of a city
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
