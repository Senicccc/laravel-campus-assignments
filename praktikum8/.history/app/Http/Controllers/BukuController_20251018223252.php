<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;


class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::with('kategoriBuku')->get();
        return view('pages.home', compact('data'));
    }

    public function create()
    {
        return view('create-buku', [
            'kategoriBuku' => \App\Models\KategoriBuku::all()
        ]);
        
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'kategori_buku_id' => 'required|exists:kategori_buku,id',
        ]);

        Buku::create($data);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('edit-buku', [
            'buku' => $buku,
            'kategoriBuku' => \App\Models\KategoriBuku::all()
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'kategori_buku_id' => 'required|exists:kategori_buku,id',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($data);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}