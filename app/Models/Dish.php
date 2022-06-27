<?php


namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Dish extends Model
{
    protected $connection= 'mongodb';

    protected $fillable = [
        'nome',
        'prezzo',
        'categoria',
  
    ];


    protected $hidden = [
        ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
