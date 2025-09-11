<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $data = Buku1::all();
        return view('buku1', compact('data'));
    }

    public function create()
    {
        return view('tambahBuku');
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