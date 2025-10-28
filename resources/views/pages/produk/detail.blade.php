@extends('layouts.master')


@section('content')
    <section class="mb-8">
        <h2 class="text-4xl tracking-tight text-shadow-md font-bold text-center">Product Details</h2>
    </section>

    <div class="flex flex-col items-center w-screen px-4">
        <div class="w-full max-w-7xl mb-5 shadow-lg rounded-lg py-5 px-5 border">
            <img class="mb-5" src="https://placehold.co/600x400" alt="placeholder image">
            <p>Product Name: {{ $product->nama_produk }}</p>
            <p>Price: RM{{ $product->harga }}</p>
            <p>Description: {{ $product->deskripsi_produk }}</p>
            <p class="mb-8">Category ID: {{ $product->kategori_id }}</p>
            <a class="py-2 px-3 bg-blue-500 text-blue-100 rounded-md" href="/product">Back to Product</a>
        </div>
    </div>
@endsection
