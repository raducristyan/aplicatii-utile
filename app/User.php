<?php

namespace App;

use App\ActivationToken;
use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable implements CanResetPassword
{
    use Notifiable, SoftDeletes;

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
        'email',
        'mobile',
        'phone',
        'password',
        'job',
        'institution_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['full_name'];

    /**
     * Get the institution that owns the model.
     */
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    /**
     * Get all of the people's vehicles for the user.
     */
    public function peopleVehicles()
    {
        return $this->hasManyThrough(Vehicles::class, Person::class);
    }

    /**
     * Get all of the companies vehicles for the user.
     */
    public function companiesVehicles()
    {
        return $this->hasManyThrough(Vehicle::class, Company::class);
    }

    /**
     * Set the user's first name.
     *
     * @param  string $value
     * @return void
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucwords(strtolower($value));
    }

    /**
     * Set the user's last name.
     *
     * @param  string  $value
     * @return void
     */
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = strtoupper($value);
    }

    /**
     * Set the user's email.
     *
     * @param  string  $value
     * @return void
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /**
     * Get the user's full name attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
        return $this->email;
    }

    /**
     * Scope a query to only include admin.
     *
     * @return IlluminateDatabaseEloquentBuilder
     */
    public function scopeIsAdmin($query)
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if a user has a given role
     *
     * @param $role
     * @return boolean
     */
    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }

    /**
     * Return a user by email
     *
     * @param  string $email
     * @return static
     */
    public static function byEmail($email)
    {
        return static::where('email', $email);
    }

    /**
     * Get the companys for the user model.
     */
    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    /**
     * Get the people for the user model.
     */
    public function people()
    {
        return $this->hasMany(Person::class);
    }

    /**
     * Get the user's address
     *
     */
    public function address()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles', 'user_id', 'role_id');
    }
}
