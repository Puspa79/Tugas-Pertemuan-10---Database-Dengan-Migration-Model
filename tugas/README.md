# Database Dengan Migration & Model — Pertemuan 10

**Nama:** Puspa Dwi Setyorini  
**NIM:** 60324003  
**Prodi:** Informatika  
**Semester:** 4  
**Mata Kuliah:** Pemrograman Web II  
**Repository:** [Link GitHub](https://github.com/Puspa79/Tugas-Pertemuan-9-PENGENALAN-FRAMEWORK-LARAVEL-MVC)


## TUGAS 1 - Migration Tabel Kategori
### 1. File Migration yang Dibuat
* **Tabel Buku (`create_buku_table`):** Memiliki kolom `id`, `judul`, `stok`, `harga`, `tahun_terbit`, dan `timestamps`.
* **Tabel Anggota (`create_anggota_table`):** Memiliki kolom `id`, `nama`, `umur`, `jenis_kelamin`, `status`, dan `timestamps`.

## TUGAS 2 - Model Accessor & Scope
- Menampilkan data awal (dummy data) yang berhasil dimasukkan ke tabel buku menggunakan database seeder.
![Hasil Seeder Tabel Buku](screenshoot/hasilSeeder_tabelBuku.png)

- Menunjukkan proses migration tabel kategori yang berhasil dibuat di database menggunakan Laravel migration.
![Hasil Migration Kategori](screenshoot/hasilMigration_kategori.png)

- Menampilkan hasil pengujian aplikasi untuk memastikan fitur berjalan dengan baik tanpa error.
![Hasil Testing](screenshoot/HasilTesting.png)
