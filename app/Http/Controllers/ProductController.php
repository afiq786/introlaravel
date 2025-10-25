<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $eloquent = Produk::get(); //Query to retrieve all the data in tb_produk using eloquent method
        // $queryBuilder = DB::table('tb_produk')->get(); //Query to retrieve all the data in tb_produk using query builder method
        return view('pages.produk.show', ['data' => $eloquent]);
    }

    public function addProduct()
    {
        return view('pages.produk.add');
    }
}
