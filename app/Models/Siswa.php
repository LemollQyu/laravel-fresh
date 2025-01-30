<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $fillable = [
        'name',
        'no_handphone',
        'class',
    ];

    // relasi many to many menghubungkan table siswa ke eskul
    public function eskuls() {
        // menggunakan belongsToMany modelTujuan, tablePivot, localId, externalId
        return $this->belongsToMany(\App\Models\Eskul::class, 'siswa_eskul', 'siswa_id', 'eskul_id');
    }
}
