<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // ini untuk ketika create data ke db, di definisikan field apa yang nanti boleh diisi
    protected $fillable = [
        'user_id',
        'name',
        'discription'
    ];
}
