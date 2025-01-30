<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //untuk mengisi data berupa data dummy

        $user = User::first();

        for ($i = 1; $i < 10; $i++) {
            Barang::create([
                'user_id' => $user->id,
                'name' => 'Barang '. $i,
                'discription' => 'Diskrips barang '. $i
            ]);
        }
    }
}
