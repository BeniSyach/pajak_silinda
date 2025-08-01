@extends('layouts.app')

@section('title', 'Slogan')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div
                    class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
                    <div class="col-span-12 xxl:col-span-9">
                        <div class="grid grid-cols-12 gap-6 mb-6">
                            <div class="col-span-12 mt-2">

                                <!-- Judul dan Tombol -->
                                <div class="intro-y flex justify-between items-center mt-5">
                                    <h2 class="text-lg font-medium text-green-800">Data Slogan</h2>
                                    <a href="{{ route('slogan.create') }}"
                                        class="btn bg-green-600 text-black hover:bg-green-700">+ Tambah</a>
                                </div>

                                <!-- Notifikasi -->
                                @if (session('success'))
                                    <div class="alert alert-success mt-4 bg-green-100 text-green-700 px-4 py-2 rounded">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!-- Tabel Data -->
                                <div class="intro-y overflow-auto mt-5">
                                    <table class="table w-full border border-black text-black">
                                        <thead class="bg-gray-200 text-black">
                                            <tr>
                                                <th class="px-4 py-2 border border-black">#</th>
                                                <th class="px-4 py-2 border border-black">Isi Slogan</th>
                                                <th class="px-4 py-2 border border-black text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($slogans as $slogan)
                                                <tr>
                                                    <td class="px-4 py-2 border border-black">{{ $loop->iteration }}</td>
                                                    <td class="px-4 py-2 border border-black">{{ $slogan->isi }}</td>
                                                    <td class="px-4 py-2 border border-black text-center space-x-2">
                                                        <a href="{{ route('slogan.edit', $slogan) }}"
                                                            class="text-blue-600 hover:underline">Edit</a>
                                                        <form action="{{ route('slogan.destroy', $slogan) }}" method="POST"
                                                            class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button onclick="return confirm('Yakin ingin menghapus?')"
                                                                class="text-red-600 hover:underline">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3"
                                                        class="text-center italic text-gray-400 py-4 border border-black">
                                                        Belum ada data slogan.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
