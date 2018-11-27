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
        return $this->hasMany('City::class');
    }

    /**
     * Get the county's name.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return mb_convert_encoding($value, "ISO-8859-2");
    }
}
