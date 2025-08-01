<?php

namespace App\Http\Controllers;

use App\Models\Slogan;
use Illuminate\Http\Request;

class SloganController extends Controller
{
    public function index()
    {
        $slogans = Slogan::all();
        return view('slogan.index', compact('slogans'));
    }

    public function create()
    {
        return view('slogan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required|string',
        ]);

        Slogan::create($request->only('isi'));

        return redirect()->route('slogan.index')->with('success', 'Slogan berhasil ditambahkan.');
    }

    public function edit(Slogan $slogan)
    {
        return view('slogan.edit', compact('slogan'));
    }

    public function update(Request $request, Slogan $slogan)
    {
        $request->validate([
            'isi' => 'required|string',
        ]);

        $slogan->update($request->only('isi'));

        return redirect()->route('slogan.index')->with('success', 'Slogan berhasil diperbarui.');
    }

    public function destroy(Slogan $slogan)
    {
        $slogan->delete();
        return redirect()->route('slogan.index')->with('success', 'Slogan berhasil dihapus.');
    }
}
