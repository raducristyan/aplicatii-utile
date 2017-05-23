<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
    * The institutions that belong to the application.
    */
    public function institutions()
    {
        return $this->belongsToMany(Institution::class, 'application_institution', 'application_id', 'institution_id');
    }
}
