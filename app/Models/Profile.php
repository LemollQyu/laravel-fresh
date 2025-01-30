<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $fillable = [
        'user_id',
        'address',
        'education',
    ];

    // relasi belongsTo
    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
