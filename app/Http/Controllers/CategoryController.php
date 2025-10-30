<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::get();
        return view('pages.category.show',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'category_name' => 'required',
            'description' => 'required'
        ],
        [
            'category_name' => '* Field for Category Name is required',
            'description' => '* Field for description is required'
        ]);

        Category::create([
            'nama_kategori' => $request->category_name,
            'deskripsi' => $request->description,
        ]);

        return redirect('/category')->with('msg', 'New category succesfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Category::findOrFail($id);
        return view('pages.category.detail',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'category_name'=> 'required',
            'description'=> 'required',
        ],
        [
            'category_name'=> '* Field for Category Name required',
            'description' => '* Field for description required'
        ]
        );

        Category::where('id_kategori', $id)->update([
            'nama_kategori'=> $request->category_name,
            'deskripsi'=>$request->description
        ]);

        return redirect('/category')->with('msg', 'Category succesfully updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('/category')->with('msg', 'Category succesfully deleted');
    }
}
