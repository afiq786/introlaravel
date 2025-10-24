<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProduct()
    {
        return view('pages.product');
    }

    public function addProduct()
    {
        return view('pages.addProduct');
    }
}
