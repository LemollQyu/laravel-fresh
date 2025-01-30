<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendWelcomeEmail;
use Illuminate\Support\Facades\Mail;

class BukuController extends Controller
{
    // controller inilah yang memproses data data yang ada di route masing masing
    public function index(){

        $data = [
            'buku1' => '<h2>Unfinished Goodbye</h2>',
            'buku2' => '<h2>Catatan Juang</h2>',
            'listBuku' => [
                'Paradigma',
                'Egosentris',
                'Kala',
                'Amorfati'
            ]
        ];

        return view('buku', $data);

    }

    public function detail($id) {
        return view('detail', [
            'id' => $id
        ]);

    }

    public function pencarian() {
        return view('pencarian');
    }

    public function send() {
        Mail::to('ggfffwert@gmail.com')->send(new \App\Mail\SendWelcomeEmail());
    }
}
