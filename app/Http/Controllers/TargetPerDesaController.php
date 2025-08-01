<?php

namespace App\Http\Controllers;

use App\Models\TargetPerDesa;
use App\Models\TargetKecamatan;
use Illuminate\Http\Request;

class TargetPerDesaController extends Controller
{
    public function index()
    {
        $data = TargetPerDesa::with('kecamatan')->get();
        return view('target-desa.index', compact('data'));
    }

    public function create()
    {
        $kecamatan = TargetKecamatan::all();
        return view('target-desa.create', compact('kecamatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'target_kecamatan_id' => 'required|exists:target_kecamatans,id',
            'kode_desa' => 'required',
            'nama_desa' => 'required',
            'total_target' => 'required|numeric',
        ]);

        TargetPerDesa::create($request->all());

        return redirect()->route('target-desa.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit(TargetPerDesa $target_desa)
    {
        $kecamatan = TargetKecamatan::all();
        return view('target-desa.edit', compact('target_desa', 'kecamatan'));
    }

    public function update(Request $request, TargetPerDesa $TargetPerDesa)
    {
        $request->validate([
            'target_kecamatan_id' => 'required|exists:target_kecamatans,id',
            'kode_desa' => 'required',
            'nama_desa' => 'required',
            'total_target' => 'required|numeric',
        ]);

        $TargetPerDesa->update($request->all());

        return redirect()->route('target-desa.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(TargetPerDesa $TargetPerDesa)
    {
        $TargetPerDesa->delete();
        return redirect()->route('target-desa.index')->with('success', 'Data berhasil dihapus.');
    }
}
