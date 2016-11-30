<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cif',
        'name',
        'email',
        'phone',
        'fax',
        'iban',
        'bank',
        'active',
    ];

    /**
     * Get the users for the Institution model.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
    * Get the token record associated with the model.
    */
    public function token()
    {
        return $this->hasOne(ActivationToken::class);
    }

    /**
     * Set the institution's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower(trim(preg_replace('/\s+/',' ', $value))));
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
        $this->attributes['iban'] = strtoupper(trim(preg_replace('/\s+/','', $value)));
    }

    /**
     * Set the institution's bank.
     *
     * @param  string  $value
     * @return void
     */
    public function setBankAttribute($value)
    {
        $this->attributes['bank'] = ucwords(strtolower(trim(preg_replace('/\s+/',' ', $value))));
    }
}
