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

Route::get('/product',[ProductController::class, 'index']); // To read/show all data
Route::get('/product/create',[ProductController::class, 'create']); // To navigate to the "Add item page"
Route::post('/product', [ProductController::class, 'store']);
