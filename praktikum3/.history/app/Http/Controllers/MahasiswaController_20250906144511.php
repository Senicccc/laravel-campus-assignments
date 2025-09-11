<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; // <--- ini yang kurang
use App\Models\Buku;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'));
    }
}