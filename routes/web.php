<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::view('/contact','pages.contact');

Route::get('/product',[ProductController::class, 'getAllProduct']);
Route::get('/product/addProduct',[ProductController::class, 'addProduct']);
