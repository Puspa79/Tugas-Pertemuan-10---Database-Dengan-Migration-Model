<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        Anggota::create([
            'nama' => 'Puspa Dwi',
            'umur' => 19, // Remaja
            'jenis_kelamin' => 'P',
            'status' => 'aktif' // Aktif
        ]);

        Anggota::create([
            'nama' => 'Setyorini',
            'umur' => 25, // Dewasa
            'jenis_kelamin' => 'P',
            'status' => 'nonaktif' // Nonaktif
        ]);

        Anggota::create([
            'nama' => 'Budi Santoso',
            'umur' => 55, // Senior
            'jenis_kelamin' => 'L',
            'status' => 'aktif' // Aktif
        ]);
    }
}