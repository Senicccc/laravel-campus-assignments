<?php

namespace App\Http\Controllers;

use App\Models\Buku1;
use Illuminate\Http\Request;

class Buku1Controller extends Controller
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
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
        ]);

        Buku1::create($);
        return redirect('/buku1')->with('success', 'Data buku berhasil ditambahkan.');
    }
}