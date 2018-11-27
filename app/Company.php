<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'cif',
        'j',
        'email',
        'phone',
        'ibank',
        'bank'
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
    * Get the user that owns the company.
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * Get all of the company's addreses.
    */
    public function address()
    {
        return $this->morphMany(Address::class, "addressable");
    }

    /**
    * Get all of the company's vehicles.
    */
    public function vehicles()
    {
        return $this->morphMany(Vehicle::class, "vehicleable");
    }
}
