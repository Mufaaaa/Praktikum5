<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('test');
});

Route::get('/listproduk', [ProductController::class, 'listproduk']);

Route::get('/home', function () {
    return view('pages.home');
});