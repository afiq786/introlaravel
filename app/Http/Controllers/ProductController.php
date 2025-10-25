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

    public function create()
    {
        return view('pages.produk.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required'
        ]);
        Produk::create([
            'nama_produk'=> $request->nama_produk,
            'harga' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi,
            'kategori_id' => $request->id_kategori
        ]);

        return redirect('/product')->with('msg', "Item succesfully added to the list");
    }
}
