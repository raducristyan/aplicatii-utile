<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'siruta',
    ];

    /**
     * Get the cities for the model model.
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'county_siruta', 'siruta');
    }
}
