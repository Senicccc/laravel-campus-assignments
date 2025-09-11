<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul' => 'Pemrograman Web dengan Laravel',
                'pengarang' => 'John Doe',
                'penerbit' => 'Tech Books Publishing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Belajar PHP untuk Pemula',
                'pengarang' => 'Jane Smith',
                'penerbit' => 'Web Dev Press',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Database MySQL dari Nol',
                'pengarang' => 'Alice Johnson',
                'penerbit' => 'Data Books Co.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
