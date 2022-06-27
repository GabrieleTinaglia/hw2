<?php


namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Reservation extends Model
{

    protected $connection= 'mongodb';

    protected $fillable = [
        'data',
        'n_persone',
        'ora',
        'note',
        'user'
    ];

    protected $hidden = [
        ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function users() {
        return $this->belongsTo("App\Models\User");
    }



}
