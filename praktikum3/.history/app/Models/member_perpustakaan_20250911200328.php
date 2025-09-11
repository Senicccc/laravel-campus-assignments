<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member_perpustakaanember_perpustakaan extends Model
{
    protected $table = 'member_perpustakaan';
    protected $fillable = ['nama_lengkap', 'email', 'alamat', 'no_hp'];
}