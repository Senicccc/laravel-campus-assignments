<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Member_perpustakaan extends Controller
{
        public function index()
    {
        $data = Member_perpustakaan::all();
        return view('member_perpustakaan', compact('data'));
    }

    public function create()
    {
        return view('tambahMember');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
        ]);

        Member_perpustakaan::create($validasi);
        return redirect('/member_perpustakaan')->with('success', 'Data member berhasil ditambahkan.');
    }
}