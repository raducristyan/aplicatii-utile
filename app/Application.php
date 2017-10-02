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
        'slug',
        'description'
    ];
    
    /**
    * The institutions that belong to the application.
    */
    public function institutions()
    {
        return $this->belongsToMany(Institution::class, 'application_institution', 'application_id', 'institution_id');
    }
}
