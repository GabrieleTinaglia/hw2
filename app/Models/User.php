<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;


class User extends Model
{
    protected $connection= 'mongodb';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
        ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function reservations() {
        return $this->hasMany("App\Models\reservation");
    }

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

}
