<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
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
        'first_name',
        'last_name',
        'cnp',
        'email',
        'phone'
    ];
    
    
    /**
    * Get the institution that owns the model.
    */
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

        /**
     * Get the person's full name attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    /**
     * Get the person's address
     *
     */
    public function address()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

}
