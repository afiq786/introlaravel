<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::view('/contact','pages.contact');

Route::get('/about/{id}', function($id) {
    return view('pages.detail', ['id' => $id]);
});

