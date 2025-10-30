@extends('layouts.master')


@section('content')
    <section class="mb-8">
        <h2 class="text-4xl tracking-tight text-shadow-md font-bold text-center">Category Details</h2>
    </section>

    <div class="flex flex-col items-center w-screen px-4">
        <div class="w-full max-w-7xl mb-5 shadow-lg rounded-lg py-5 px-5 border">
            <img class="mb-5" src="https://placehold.co/600x400" alt="placeholder image">
            <p>Category Name: {{ $detail->nama_kategori }}</p>
            <p class="mb-8">Description: {{ $detail->deskripsi }}</p>
            <a class="py-2 px-3 bg-blue-500 text-blue-100 rounded-md" href="/category">Back to Category</a>
        </div>
    </div>
@endsection
