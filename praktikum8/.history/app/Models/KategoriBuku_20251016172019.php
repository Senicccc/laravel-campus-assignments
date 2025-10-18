<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Buku;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $table = 'kategori_buku';
    protected $fillable = ['nama_kategori'];

    public function buku()
    {
        // foreign key on `buku` table is `kategori_buku_id` (from migration)
        return $this->hasMany(Buku::class, 'kategori_buku_id');
    }

}