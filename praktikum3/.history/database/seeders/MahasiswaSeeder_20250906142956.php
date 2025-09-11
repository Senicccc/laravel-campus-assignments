<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    protected int $jumlahMahasiswa = 50;

    public function run(): void
    {
        $fakultasProdi = [
            'Teknik' => ['Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Mesin'],
            'Ekonomi' => ['Manajemen', 'Akuntansi'],
            'Ilmu Komputer' => ['Informatika', 'Sistem Informasi'],
            'Hukum' => ['Hukum']
        ];

        $fakultasList = array_keys($fakultasProdi);

        for ($i = 1; $i <= $this->jumlahMahasiswa; $i++) {
            $fakultas = $fakultasList[array_rand($fakultasList)];
            $prodi = $fakultasProdi[$fakultas][array_rand($fakultasProdi[$fakultas])];

            $awal = rand(20, 25); 
            $sisa = str_pad(rand(0, 99999999999), 11, '0', STR_PAD_LEFT); 
            $npm = $awal . $sisa;

            DB::table('mahasiswa')->insert([
                'nama' => "Mahasiswa $i",
                'npm' => $npm,
                'prodi' => $prodi,
                'fakultas' => $fakultas,
                'semester' => rand(1, 8),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}