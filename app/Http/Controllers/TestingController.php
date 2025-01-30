<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Siswa;
use App\Models\Eskul;


class TestingController extends Controller
{
    //

    public function index() {
        // cara pertama create data ke db

        $name = 'ara';



        $user = new \App\Models\User();


        // $user->name = $name;
        // $user->email = $name;
        // $user->password = bcrypt('password');
        // $user->save();

        // cara kedua create data ke db

        // $user = \App\Models\User::create([
        //     'name' => 'Fahima Nabila Putri',
        //     'email' => 'fahimanabila@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // untuk get data semua
        // $users = \App\Models\User::all();

        // untuk get data satu
        // $users = \App\Models\User::find(1);

        // dd($users);


        // create data barang di db
        // \App\Models\Barang::create([
        //     'user_id' => '1',
        //     'name' => 'Sepatu',
        //     'discription' => 'Sepatu warna putih aestro'
        // ]);

        // ini untuk menghapus data di db
        // $user = \App\Models\User::find(3);
        // $user->delete();

        // ini untuk update data yang cuma field nya diganti satu di db
        // $user = \App\Models\User::find(5);
        // $user->name = 'Maharani Nabila Putri';
        // $user->save();

        // ini untuk update data yang di rubah semua di db
        // $user = \App\Models\User::find(1);
        // $user->update([
        //     'name' => 'Annas Aulia Rahman',
        //     'email' => 'annas@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        // $user->save();

        // $buku = \App\Models\Buku::create([
        //     'nama_buku' => 'Paradigma',
        //     'jumlah_halaman' => 365,
        //     'dikripsi' => 'Buku Self Developmen'
        // ]);

        // jadi user ini dapat mengakses data di table barang karena sudah berelasi
        // $user = User::first();
        // dd($user->barangs);

        // method unutk mengetahui jumlah barangnya
        // dd(\App\Models\Barang::count());


        // unutk HasMany
        // $user = User::first();
        // $user->profiles()->create([
        //     'address' => 'kebon jeruk',
        //     'education' => 'S1'
        // ]);

        // dd($user->profiles->address);

        // untuk belongsTo
        // $profile = \App\Models\Profile::first();

        // dd(
        //     $profile->user->email
        // );

        // hasMany dari user create product
        // $user = \App\Models\User::find(1);
        // $user->products()->create([
        //     'name' => 'Baju',
        //     'description' => 'Baju Kemaja yang biasa di pakai',
        //     'price' => 10000,
        // ]);

        // hapus product punya user_id 2
        // $user = \App\Models\User::find(2);
        // $user->products()->delete();

        // $user = User::first();
        // $product = Product::where('user_id', 1)->first();
        // dd($product->user->name);


        // $product = \App\Models\Product::create([
        //     'user_id' => $user,
        //     'name' => 'Mangkok',
        //     'description' => 'Mangkok yang biasanya dipake buat makan bakso',
        //     'price' => 35000,
        // ]);

        // get data productntya
        // dd($user->products);

        // get data dengan query where
        // dd($user->products()->where('name', 'Kerudung')->get());


        // data product lempar atau tampilkan di viewnya
        // return view('product', [
        //     'list-product' => $user->product,
        // ]);

        // Siswa::create([
        //     'name' => 'Alisa Qotru Nada',
        //     'no_handphone' => '08969236232',
        //     'class' => 12,
        // ]);

        // $eskul = \App\Models\Eskul::create([
        //     'name' => 'Silat',
        //     'kegiatan' => 'Tentang seni bela diri bukan tentang memamerkan diri',

        // ]);

        $eskul = Eskul::where('id', 2)->first();
        $siswa = Siswa::where('id', 2)->first();
        $annas = Siswa::where('name', 'Annas Aulia Rahman')->first();

        $pramuka = Eskul::where('name', 'Pramuka')->first();
        $badminton = Eskul::where('name', 'Badminton')->first();

        $user1 = \App\Models\User::where('id', 26)->first();


        // menambah relasi siswa ke eskuls dari name eksuls
        // $siswa->eskuls()->attach(\App\Models\Eskul::where('name', 'Badminton')->first());
        // $siswa->eskuls()->attach(\App\Models\Eskul::where('name', 'Pramuka')->first());

        // menambah relasi dengan id dari eskulsnya
        // $siswa->eskuls()->attach(2);

        // $eskuls->siswa()->attach(5);

        // mengahapus relasi siswa ke eskuls
        // $siswa->eskuls()->detach();


        // dd($pramuka->siswas->pluck('name'), $badminton->siswas->pluck('name'));


        // dd(
        //     $user->active()->get()->pluck('name')
        // );

        // ini dengan lazy loading
        // query makan waktu lama, atau query panjang

        // $users = \App\Models\User::all();

        // foreach($users as $user) {
        //     dump($user->products->pluck('name'));
        // }


        // edngan eigher loading
        // mempersingkat ketika query, jadi tidak makan waktu lama, atau query pendek\
        // berguna untuk efisiensi query
        $users = \App\Models\User::with(['products'])->get();
        foreach($users as $user) {
            dump($user->products->pluck('name'));
        }

        // foreach($users as $user) {
        //     dump($user->products->pluck('name'));
        // }










    }
}
