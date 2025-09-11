<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $data = Toko::all();
        return view('toko', compact('data'));
    }

    public function create()
    {
        return view('tambahToko');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_toko' => 'required|string|max:255',
            'cabang' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'nullable|int|max:20',
            'pemilik' => 'nullable|string|max:255',
        ]);

        Toko::create($validasi);
        return redirect('/toko')->with('success', 'Data toko berhasil ditambahkan.');
    }
}