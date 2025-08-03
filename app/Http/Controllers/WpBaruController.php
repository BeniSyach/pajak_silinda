<?php

namespace App\Http\Controllers;

use App\Models\WpBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class WpBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WpBaru::all();
        return view('wp-baru.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wp-baru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_wp' => 'required',
            'alamat_wp' => 'nullable',
            'no_ktp' => [
                'required',
                Rule::unique('mysql_secondary.wp_barus', 'no_ktp'),
            ],
            'no_hp' => [
                'required',
                Rule::unique('mysql_secondary.wp_barus', 'no_hp'),
            ],
            'bukti_kepemilikan_tanah' => 'required|file|mimes:pdf,jpg,png',
            'ktp_wp' => 'required|file|mimes:pdf,jpg,png',
        ]);
    
        $validated['bukti_kepemilikan_tanah'] = $request->file('bukti_kepemilikan_tanah')->store('bukti_tanah', 'public');
        $validated['ktp_wp'] = $request->file('ktp_wp')->store('ktp_wp', 'public');
    
        WpBaru::create($validated);
    
        return redirect()->route('wp.create')->with('success', 'Pendaftaran berhasil. Silakan tunggu proses validasi.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $wp = WpBaru::findOrFail($id);
        return view('wp-baru.show', compact('wp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $wp = WpBaru::findOrFail($id);
        return view('wp-baru.edit', compact('wp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $wp = WpBaru::findOrFail($id);
        $validated = $request->validate([
            'status_penjemputan' => 'required|in:belum_dijemput,sudah_dijemput',
            'status_validasi' => 'required|in:menunggu,valid,tidak_valid',
        ]);
        $wp->update($validated);
        return redirect()->route('wp.index')->with('success', 'Status berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wp = WpBaru::findOrFail($id);
    
        // Hapus file bukti jika ada
        if ($wp->bukti_kepemilikan_tanah && Storage::disk('public')->exists($wp->bukti_kepemilikan_tanah)) {
            Storage::disk('public')->delete($wp->bukti_kepemilikan_tanah);
        }
    
        if ($wp->ktp_wp && Storage::disk('public')->exists($wp->ktp_wp)) {
            Storage::disk('public')->delete($wp->ktp_wp);
        }
    
        $wp->delete();
    
        return redirect()->route('wp.index')->with('success', 'Data WP berhasil dihapus');
    }
}
