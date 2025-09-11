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

    
}