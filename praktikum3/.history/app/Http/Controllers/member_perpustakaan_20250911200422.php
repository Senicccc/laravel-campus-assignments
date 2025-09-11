<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Member_perpustakaan extends Controller
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

        Member_perpustakaan::create($validasi);
        return redirect('/member_perpustakaan')->with('success', 'Data member berhasil ditambahkan.');
    }
}