<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
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
    protected $fillable = ['cif', 'name', 'email', 'phone', 'fax', 'iban', 'bank', 'active',];

    /**
     * Get the users for the Institution model.
     */
    public function users()
    {
        return $this->hasMany(User::class)->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'admin');
        });
    }

    /**
     * Get the users for the Institution model.
     */
    public function admin()
    {
        return $this->hasMany(User::class)
            ->whereHas('roles', function ($q) {
                $q->where('name', '=', 'admin');
            });
    }


    /**
     * Get the token record associated with the model.
     */
    public function token()
    {
        return $this->hasOne(ActivationToken::class);
    }

    /**
     * The applications that belong to the institution.
     */
    public function applications()
    {
        return $this->belongsToMany(Application::class, 'institutions_applications', 'application_id', 'institution_id');
    }

    /**
     * Get the institution's address
     *
     */
    public function address()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    /**
     * Check if institution's account is active
     */

    public function scopeActive()
    {
        return $this->active == true;
    }

    /**
     * Set the institution's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower(trim(preg_replace('/\s+/', ' ', $value))));
    }

    /**
     * Set the institution's email.
     *
     * @param  string  $value
     * @return void
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower(trim($value));
    }

    /**
     * Set the institution's iban.
     *
     * @param  string  $value
     * @return void
     */
    public function setIbanAttribute($value)
    {
        $this->attributes['iban'] = strtoupper(trim(preg_replace('/\s+/', '', $value)));
    }

    /**
     * Set the institution's bank.
     *
     * @param  string  $value
     * @return void
     */
    public function setBankAttribute($value)
    {
        $this->attributes['bank'] = ucwords(strtolower(trim(preg_replace('/\s+/', ' ', $value))));
    }
}
