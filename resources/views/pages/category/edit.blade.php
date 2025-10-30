@extends('layouts.master')

@section('content')
    <section class="mb-8">
        <h2 class="text-4xl tracking-tight text-shadow-md font-bold text-center">Edit Category</h2>
    </section>

    <section class="flex justify-center w-screen">
        <form action="/category/{{ $category->id_kategori }}" method="POST"
            class="bg-slate-800 shadow-lg rounded-lg px-8 py-8 mb-4 min-w-4xl">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label class="block text-slate-100 text-sm font-bold mb-2">
                    Category Name
                </label>
                <input
                    class="shadow bg-slate-100 rounded w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="category_name" value="{{ $category->nama_kategori }}">
                @error('category_name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-4">
                <label class="block text-slate-100 text-sm font-bold mb-2">
                    Description
                </label>
                <input
                    class="shadow bg-slate-100 rounded w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="textarea" name="description" value="{{ $category->deskripsi }}">
                @error('description')
                    <div class="
                    text-red-600">{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                    Update Category
                </button>
            </div>
        </form>
    </section>
@endsection
