<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Jumlah mahasiswa yang ingin dibuat
     */
    protected int $jumlahMahasiswa = 50; // Ganti sesuai kebutuhan

    public function run(): void
    {
        $prodi = ['Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Mesin'];
        $fakultas = ['Teknik', 'Ekonomi', 'Ilmu Komputer'];

        for ($i = 1; $i <= $this->jumlahMahasiswa; $i++) {
            // Awalan 20 sampai 25, total 9 digit
            $awal = rand(20, 25); 
            $sisa = rand(1000000, 9999999); // sisanya 7 digit
            $npm = $awal . $sisa;

            DB::table('mahasiswa')->insert([
                'nama' => "Mahasiswa $i",
                'npm' => (string)$npm,
                'prodi' => $prodi[array_rand($prodi)],
                'fakultas' => $fakultas[array_rand($fakultas)],
                'semester' => rand(1, 8),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}