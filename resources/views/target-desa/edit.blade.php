@extends('layouts.app')

@section('title', 'Edit Target Per Desa')

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12">
                        <div class="intro-y box p-5">

                            <h2 class="text-lg font-medium text-green-800 mb-5">Edit Target Per Desa</h2>
                            <form action="{{ route('target-desa.update', $target_desa) }}" method="POST" class="space-y-4">


                                @csrf
                                @method('PUT')

                                <div>
                                    <label class="block mb-1 text-gray-700 font-semibold">Kecamatan</label>
                                    <select name="target_kecamatan_id"
                                        class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-green-500">
                                        @foreach ($kecamatan as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $target_desa->target_kecamatan_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->nama_kecamatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('target_kecamatan_id')
                                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block mb-1 text-gray-700 font-semibold">Kode Desa</label>
                                    <input type="text" name="kode_desa"
                                        value="{{ old('kode_desa', $target_desa->kode_desa) }}"
                                        class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-green-500">
                                    @error('kode_desa')
                                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block mb-1 text-gray-700 font-semibold">Nama Desa</label>
                                    <input type="text" name="nama_desa"
                                        value="{{ old('nama_desa', $target_desa->nama_desa) }}"
                                        class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-green-500">
                                    @error('nama_desa')
                                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block mb-1 text-gray-700 font-semibold">Total Target</label>
                                    <input type="number" name="total_target"
                                        value="{{ old('total_target', $target_desa->total_target) }}"
                                        class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-green-500">
                                    @error('total_target')
                                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <button type="submit"
                                        class="bg-green-600  px-4 py-2 rounded hover:bg-green-700 text-black">
                                        Update
                                    </button>
                                    <a href="{{ route('target-desa.index') }}"
                                        class="ml-2 text-gray-600 hover:underline">Kembali</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
