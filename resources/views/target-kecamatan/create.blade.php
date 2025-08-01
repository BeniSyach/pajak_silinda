@extends('layouts.app')

@section('content')
    <div class="p-6 max-w-xl mx-auto">
        <h2 class="text-xl font-bold text-green-800 mb-4">Tambah Target Kecamatan</h2>

        <form action="{{ route('target-kecamatan.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Nama Kecamatan</label>
                <input type="text" name="nama_kecamatan" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Kode Kecamatan</label>
                <input type="text" name="kode_kecamatan" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Total Target</label>
                <input type="number" name="total_target" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Tahun</label>
                <input type="text" name="tahun" maxlength="4" class="w-full p-2 border rounded" required>
            </div>
            <div class="text-right">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Simpan</button>
            </div>
        </form>
    </div>
@endsection
