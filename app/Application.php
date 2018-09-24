<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'description',
        'path'
    ];
    
    /**
    * The institutions that belong to the application.
    */
    public function institutions()
    {
        return $this->belongsToMany(Institution::class, 'institutions_applications', 'institution_id', 'application_id');
    }
}
