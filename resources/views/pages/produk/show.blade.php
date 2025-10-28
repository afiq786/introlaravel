@extends('layouts.master')


@section('content')
    <section class="mb-8">
        <h2 class="text-4xl tracking-tight text-shadow-md font-bold text-center">Product List</h2>
        @if (session('msg'))
            <div
                class="bg-green-700 text-green-100 mt-6 tracking-wide py-2 px-4 mx-auto max-w-md text-center rounded-lg shadow-lg">
                <div class="flex items-center justify-center space-x-2">
                    <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <p class="font-medium">{{ session('msg') }}</p>
                </div>
            </div>
        @endif
    </section>

    <div class="flex flex-col items-center w-screen px-4">
        <div class="w-full max-w-7xl mb-4 flex justify-end">
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <a href="/product/create"> Add product</a>
            </button>
        </div>
        <div class="w-full max-w-7xl mb-5 overflow-x-auto shadow-lg rounded-lg">
            <table class="w-full border-collapse">
                <thead class="bg-slate-800 text-slate-100">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold">No</th>
                        <th class="py-3 px-4 text-left font-semibold">Item</th>
                        <th class="py-3 px-4 text-left font-semibold">Price</th>
                        <th class="py-3 px-4 text-left font-semibold">Description</th>
                        <th class="py-3 px-4 text-left font-semibold">Category ID</th>
                        <th class="py-3 px-4 text-center font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($data as $item)
                        <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 font-medium">{{ $item->nama_produk }}</td>
                            <td class="py-3 px-4">RM {{ number_format($item->harga, 2) }}</td>
                            <td class="py-3 px-4">{{ Str::limit($item->deskripsi_produk, 50) }}</td>
                            <td class="py-3 px-4">{{ $item->kategori_id }}</td>
                            <td class="py-3 px-4">
                                <div class="flex justify-center items-center gap-2">
                                    <button
                                        class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition text-sm font-medium">Edit</button>
                                    <button
                                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition text-sm font-medium">Delete</button>
                                    <a href="/product/{{ $item->id_produk }}"
                                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition text-sm font-medium">Details</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
