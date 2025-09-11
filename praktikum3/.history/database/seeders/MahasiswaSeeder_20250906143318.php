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
            'Teknik' => ['Teknik Elektro', 'Teknik Mesin'],
            'Ekonomi' => ['Manajemen', 'Akuntansi'],
            'Ilmu Komputer' => ['Informatika', 'Sistem Informasi'],
            'Hukum' => ['Hukum']
        ];

        $fakultasList = array_keys($fakultasProdi);

        $namaDepan = ['Andi','Budi','Citra','Dewi','Eka','Fajar','Gita','Hadi','Indra','Joko','Kiki','Lina','Mega','Nina','Oki','Putri','Raka','Sari','Tono','Vina'];
        $namaBelakang = ['Pratama','Saputra','Wijaya','Susanto','Kurniawan','Pangestu','Santoso','Haryanto','Ramadhan','Prasetya'];

        // Mapping awalan NPM → semester
        $npmSemester = [
            25 => 1,
            24 => 3,
            23 => 5,
            22 => 7,
            21 => 8,
            20 => 8,
        ];

        for ($i = 1; $i <= $this->jumlahMahasiswa; $i++) {
            $fakultas = $fakultasList[array_rand($fakultasList)];
            $prodi = $fakultasProdi[$fakultas][array_rand($fakultasProdi[$fakultas])];

            $awal = rand(20, 25); 
            $sisa = str_pad(rand(0, 99999999999), 11, '0', STR_PAD_LEFT);
            $npm = $awal . $sisa;

            $semester = $npmSemester[$awal]; // Sesuai awalan NPM

            $nama = $namaDepan[array_rand($namaDepan)] . ' ' . $namaBelakang[array_rand($namaBelakang)];

            DB::table('mahasiswa')->insert([
                'nama' => $nama,
                'npm' => $npm,
                'prodi' => $prodi,
                'fakultas' => $fakultas,
                'semester' => $semester,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}