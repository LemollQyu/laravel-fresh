<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Eskul;

class SiswaEskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        for ($i = 1; $i < 10; $i++) {
            Siswa::create([
                'name' => "siswa$i",
                'no_handphone' => "081$i'2342'$i",
                'class' =>  12,
            ]);
        }

        $array = ['Badminton', 'Sepak Bola', 'Basket'];

        foreach ($array as $eskul) {
            Eskul::create([
                'name' => $eskul,
                'kegiatan' => 'Happy Day',
            ]);
        }
    }
}
