<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

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
        $request->validate(
            [
                'product_name' => 'required',
                'price' => 'required',
                'description' => 'required',
                'category_id' => 'required'
            ],
            [
                'product_name' => '* Field for Product Name is required',
                'price' => '* Field for Price is required',
                'description' => '* Field for Product Description is required',
                'category_id' => '* Field for Category ID is required'
            ]
        );
        Produk::create([
            'nama_produk' => $request->product_name,
            'harga' => $request->price,
            'deskripsi_produk' => $request->description,
            'kategori_id' => $request->category_id
        ]);
        return redirect('/product')->with('msg', "Item succesfully added to the list");
    }


    public function show($id) {
        //Eloquent ORM method
        $detail = Produk::findOrFail($id);

        //Query builder method
        // DB::table('tb_produk')->where('id_produk', $id)->firstOrFail();

        return view('pages.produk.detail', ['product' => $detail]);
    }
}
