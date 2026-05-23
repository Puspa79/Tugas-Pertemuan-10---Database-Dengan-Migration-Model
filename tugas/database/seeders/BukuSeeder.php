<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        Buku::create([
            'judul' => 'Belajar Laravel 11 untuk Pemula',
            'stok' => 20, // Akan memicu badge "Aman"
            'harga' => 150000,
            'tahun_terbit' => 2025 // Buku Baru
        ]);

        Buku::create([
            'judul' => 'Mastering MySQL Database',
            'stok' => 3, // Akan memicu badge "Menipis"
            'harga' => 95000,
            'tahun_terbit' => 2024 // Buku Baru
        ]);

        Buku::create([
            'judul' => 'Jaringan Komputer Dasar',
            'stok' => 0, // Akan memicu badge "Habis"
            'harga' => 75000,
            'tahun_terbit' => 2022 // Buku Lama
        ]);
        
        Buku::create([
            'judul' => 'Algoritma Pemrograman C++',
            'stok' => 10, // Akan memicu badge "Sedang"
            'harga' => 110000,
            'tahun_terbit' => 2021 // Buku Lama
        ]);
    }
}