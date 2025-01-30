<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price'
    ];

    // public function user() {
    //     return $this->belongsTo(\App\Models\User::class);
    // }

    // relasi belongsTo
    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
