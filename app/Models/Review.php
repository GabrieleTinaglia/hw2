<?php


namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Review extends Model
{
    protected $connection= 'mongodb';

    protected $fillable = [
        'data',
        'orario',
        'commento',
        'user'
    ];

    protected $hidden = [
        ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function users() {
        return $this->belongsTo("App\Models\User", "user");
    }


}
