<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Buku;

class HomeController extends Controller
{
    public function home() {
        // Variabel tambahan
        $data = "Selamat Datang di Halaman Home";
        $angka = 5;

        // Mahasiswa head 6 dan tail 6
        $mahasiswaHead = Mahasiswa::orderBy('id')->take(6)->get();
        $mahasiswaTail = Mahasiswa::orderByDesc('id')->take(6)->get();

        $buku = Buku::all();

        return view('home', compact('data', 'angka', 'mahasiswaHead', 'mahasiswaTail', 'buku'));
    }
}