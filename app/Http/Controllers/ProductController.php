<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProductController extends Controller
{
    //

    public function index() {
        $user = User::find(2);

        return view('product', [

            'products' => $user->products, //ini adlah termasuk lazy loading
        ]);
    }

    public function detailProduct($name_product) {
        return 'ini detail produk = ' . $name_product;
    }
}
