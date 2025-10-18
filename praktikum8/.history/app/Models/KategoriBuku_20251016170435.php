<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Buku;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriBuku extends Model
{
    protected $table = 'kategori_buku';
    protected $fillable = ['nama_kategori'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'kategori_id');
    }

}