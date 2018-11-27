<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street',
        'number',
        'bl',
        'sc',
        'ap',
        'postal_code'
    ];

    /**
     * Get all of the owning adressable models.
     */
    public function addressable()
    {
        return $this->morphMany();
    }

    /**
    * Set the adresses's street.
    *
    * @param  string  $value
    * @return void
    */
    public function setStreetAttribute($value)
    {
        $this->attributes['street'] = ucwords(strtolower($value));
    }

    /**
     * Get tha city of the address
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
