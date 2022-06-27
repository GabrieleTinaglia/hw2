<?php


namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
protected $connection= 'mongodb';
    protected $fillable = [
        'name',
        'email',
        'note',
        'data',
        'telefono'
    ];

    protected $hidden = [
        "email",
        "telefono"
        ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
