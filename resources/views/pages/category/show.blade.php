@extends('layouts.master')

@section('content')
    <section class="mb-8">
        <h2 class="text-4xl tracking-tight text-shadow-md font-bold text-center">Category List</h2>
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

    {{-- Table Section --}}
    <div class="flex flex-col items-center w-screen px-4">
        <div class="w-full max-w-5xl mb-5 overflow-x-auto shadow-lg rounded-lg">
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                <a href="/category/create"> Add Category</a>
            </button>
            <table class="table-fixed mt-5 w-full">
                <thead class="bg-slate-800 text-slate-100">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold">No</th>
                        <th class="py-3 px-4 text-left font-semibold">Name</th>
                        <th class="py-3 px-4 text-left font-semibold">Description</th>
                        <th class="py-3 px-4 text-left font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($category as $item)
                        <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 font-medium">{{ $item->nama_kategori }}</td>
                            <td class="py-3 px-4">{{ Str::limit($item->deskripsi, 50) }}</td>
                            <td class="py-3 px-4">
                                <div class="justify-center items-center gap-2">
                                    <a href="/category/{{ $item->id_kategori }}/edit"
                                        class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition text-sm font-medium">Edit</a>
                                    <button command="show-modal" commandfor="dialog-{{ $item->id_kategori }}"
                                        class="rounded-md bg-red-500 px-4 py-2 text-sm font-medium text-white hover:bg-red-600 transition">Delete</button>
                                    <a href="/category/{{ $item->id_kategori }}"
                                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition text-sm font-medium">Details</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="py-3 px-4 text-center" colspan="6">No data found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- DELETE CONFIRMATION DIALAOG --}}
    @foreach ($category as $item)
        <el-dialog>
            <dialog id="dialog-{{ $item->id_kategori }}" aria-labelledby="dialog-title-{{ $item->id_kategori }}"
                class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                <el-dialog-backdrop
                    class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                <div tabindex="0"
                    class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                    <el-dialog-panel
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:size-10">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        data-slot="icon" aria-hidden="true" class="size-6 text-red-600">
                                        <path
                                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 id="dialog-title-{{ $item->id_kategori }}"
                                        class="text-base font-semibold text-gray-900">Delete
                                        {{ $item->nama_kategori }}</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Are you sure you want
                                            to delete item above?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <form action="/category/{{ $item->id_kategori }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" command="close" commandfor="dialog"
                                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Delete</button>
                                <button type="button" command="close" commandfor="dialog-{{ $item->id_kategori }}"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                            </form>

                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
    @endforeach
@endsection
