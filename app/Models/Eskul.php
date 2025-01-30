<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    //

    protected $fillable = [
        'name',
        'kegiatan'
    ];

    // relasi many to many menghubungkan table eskul ke siswa
    public function siswas() {
        // menggunakan belongsToMany modelTujuan, tablePivot, localId, externalId
        return $this->belongsToMany(\App\Models\Siswa::class, 'siswa_eskul', 'eskul_id', 'siswa_id');
    }
}
