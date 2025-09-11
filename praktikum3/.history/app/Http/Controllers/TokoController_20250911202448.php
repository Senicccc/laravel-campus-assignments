<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $data = Toko::all();
        return view('toko.index', compact('data'));
    }

    public function create()
    {
        return view('toko.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_toko' => 'required|string|max:255',
            'cabang' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'nullable|string|max:20',
            'pemilik' => 'nullable|string|max:255',
        ]);

        Toko::create($validasi);
        return redirect('/toko')->with('success', 'Data toko berhasil ditambahkan.');
    }
}