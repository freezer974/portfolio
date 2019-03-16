<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * Get the images.
     */
    public function images()
    {
        return $this->hasMany (Image::class);
    }

    public function albums()
    {
        return $this->hasMany (Album::class);
    }

    public function imagesRated()
    {
        return $this->belongsToMany (Image::class);
    }

    /**
     * User is admin.
     *
     * @return integer
     */
    public function getAdminAttribute()
    {
        return $this->role === 'admin';
    }

    public function getAdultAttribute()
    {
        return $this->settings->adult;
    }

    public function getSettingsAttribute($value)
    {
        return json_decode ($value);
    }

    public function getPaginationAttribute()
{
    return $this->settings->pagination;
}

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'settings'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'email_verified_at',
    ];

    public function setAdultAttribute($value)
    {
        $this->attributes['settings'] = json_encode ([
            'adult' => $value,
            'pagination' => $this->settings->pagination
        ]);
    }
}
