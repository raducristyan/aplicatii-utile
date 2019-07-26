<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    /**
     * Get the city that owns the model.
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_siruta', 'siruta');
    }

    /**
     * Get all addresses of a city
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
