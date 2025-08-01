<?php

namespace App\Http\Controllers;

use App\Models\TargetKecamatan;
use Illuminate\Http\Request;

class TargetKecamatanController extends Controller
{
    public function index()
    {
        $data = TargetKecamatan::all();
        return view('target-kecamatan.index', compact('data'));
    }

    public function create()
    {
        return view('target-kecamatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kecamatan' => 'required',
            'kode_kecamatan' => 'required',
            'total_target' => 'required|numeric',
            'tahun' => 'required|digits:4',
        ]);

        TargetKecamatan::create($request->all());

        return redirect()->route('target-kecamatan.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit(TargetKecamatan $targetKecamatan)
    {
        return view('target-kecamatan.edit', compact('targetKecamatan'));
    }

    public function update(Request $request, TargetKecamatan $targetKecamatan)
    {
        $request->validate([
            'nama_kecamatan' => 'required',
            'kode_kecamatan' => 'required',
            'total_target' => 'required|numeric',
            'tahun' => 'required|digits:4',
        ]);

        $targetKecamatan->update($request->all());

        return redirect()->route('target-kecamatan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(TargetKecamatan $targetKecamatan)
    {
        $targetKecamatan->delete();
        return redirect()->route('target-kecamatan.index')->with('success', 'Data berhasil dihapus.');
    }
}
