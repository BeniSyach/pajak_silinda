@extends('layouts.app')

@section('title', 'Target Per Desa')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12">
                        <div class="intro-y flex justify-between items-center">
                            <h2 class="text-lg font-medium text-green-800">Data Target Per Desa</h2>
                            <a href="{{ route('target-desa.create') }}"
                                class="btn bg-green-600 text-black hover:bg-green-700">+ Tambah</a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success mt-4 bg-green-100 text-green-700 px-4 py-2 rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="intro-y overflow-auto mt-5">
                            <table class="table table-report text-black border border-black-400">
                                <thead class="bg-gray-800 text-black">
                                    <tr>
                                        <th class="px-4 py-2">#</th>
                                        <th class="px-4 py-2">Nama Kecamatan</th>
                                        <th class="px-4 py-2">Nama Desa</th>
                                        <th class="px-4 py-2">Kode Desa</th>
                                        <th class="px-4 py-2 text-right">Total Target</th>
                                        <th class="px-4 py-2 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr class="border-t border-gray-400">
                                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                            <td class="px-4 py-2">{{ $item->kecamatan->nama_kecamatan }}</td>
                                            <td class="px-4 py-2">{{ $item->nama_desa }}</td>
                                            <td class="px-4 py-2">{{ $item->kode_desa }}</td>
                                            <td class="px-4 py-2 text-right">
                                                {{ number_format($item->total_target, 0, ',', '.') }}</td>
                                            <td class="px-4 py-2 text-center space-x-2">
                                                <a href="{{ route('target-desa.edit', $item) }}"
                                                    class="text-blue-600 hover:underline">Edit</a>
                                                <form action="{{ route('target-desa.destroy', $item) }}" method="POST"
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
                                            <td colspan="6" class="text-center italic text-gray-400 py-4">
                                                Belum ada data target desa.
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
@endsection
