<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail/{id?}', function($id){
    return view('detail', [
        'id' => $id
    ]);
});

Route::get('/testing', [TestingController::class, 'index']);



// membuat group untuk Route

// di route itu hanya mengatur route saja, untuk proses itu pake controller

Route::prefix('buku')->middleware('valid-token')->group(function(){
    Route::get('/', [BukuController::class, 'index']);

    Route::get('/detail/{id}', [BukuController::class, 'detail']);

    Route::get('/send', [BukuController::class, 'send']);

    Route::get('/pencarian', [BukuController::class, 'pencarian']);
});

Route::prefix('product')->group(function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/detail/{name_product}', [ProductController::class, 'detailProduct']);
});
