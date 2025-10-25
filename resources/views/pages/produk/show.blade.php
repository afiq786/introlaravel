@extends('layouts.master')

@section('content')
    <div
        class="pt-3 flex items-center flex-col w-full h-full overflow-hidden text-slate-300 bg-slate-800 shadow-md bg-clip-border">
        <h1 class="text-3xl font-bold mb-6"> Product List</h1>
        <div class="w-5xl flex justify-start mb-4">
            <a href="/product/addProduct" type="button"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                Product</a>
        </div>

        <table class="w-5xl text-left table-auto min-w-max border-2">
            <thead class="border-2 rounded-2xl">
                <tr>
                    <th class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            No
                        </p>
                    </th>
                    <th class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Item
                        </p>
                    </th>
                    <th class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Price (RM)
                        </p>
                    </th>
                    <th class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Description
                        </p>
                    </th>
                    <th class="p-4 border-b border-slate-600 bg-slate-700">
                        <p class="text-sm font-normal leading-none text-slate-300">
                            Action
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="even:bg-slate-900 hover:bg-slate-700">
                        <td class="p-4 border-b border-slate-700">
                            <p class="text-sm text-slate-100 font-semibold">
                                {{ $loop->iteration }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-slate-700">
                            <p class="text-sm text-slate-300">
                                {{ $item->nama_produk }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-slate-700">
                            <p class="text-sm text-slate-300">
                                {{ $item->harga }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-slate-700">
                            <p class="text-sm text-slate-300">
                                {{ $item->deskripsi_produk }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-slate-700">
                            <p class="text-sm text-slate-300">
                                <button class="bg-cyan-400 hover:bg-cyan-500 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </button>
                                <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
