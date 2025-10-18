<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriBuku;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['nama_kategori' => 'Fiksi'],
            ['nama_kategori' => 'Non-Fiksi'],
            ['nama_kategori' => 'Ilmiah'],
            ['nama_kategori' => 'Biografi'],
        ];

        // use updateOrCreate to avoid duplicates if seeder is run multiple times
        foreach ($kategori as $item) {
            KategoriBuku::updateOrCreate([
                'nama_kategori' => $item['nama_kategori']
            ], $item);
        }
    }
}