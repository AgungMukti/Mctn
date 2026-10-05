# Website PLN MCTN

Website profil perusahaan PT PLN Mandau Cipta Tenaga Nusantara (PLN MCTN),
dibangun dengan Laravel 9 + Blade + Bootstrap 5, mengikuti struktur project
template "Gardenia" (layout, routing, dan gaya penulisan Blade yang sama).

## Halaman

- `/` — Beranda
- `/tentang` — Tentang Kami (sejarah, visi & misi)
- `/layanan` — Layanan (Power Generation, Steam Generation, E-UTIS, E-Steam, dst.)
- `/fasilitas` — Fasilitas & Proyek + Komitmen K3L
- `/kontak` — Kontak & form pesan

## Menjalankan di Lokal

1. Install dependency PHP:
   ```bash
   composer install
   ```
2. Salin file environment (sudah otomatis dibuat sebagai `.env`, tapi kalau belum ada):
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Database memakai SQLite (tanpa perlu setup MySQL). Pastikan file berikut ada:
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```
4. Jalankan server pengembangan:
   ```bash
   php artisan serve
   ```
5. Buka `http://127.0.0.1:8000` di browser.

> Catatan: Halaman menggunakan Bootstrap 5 & Bootstrap Icons via CDN, jadi
> **tidak perlu** menjalankan `npm install` / `npm run build` untuk melihat
> tampilan situs ini.

## Mengubah Konten

- Teks & data (statistik, layanan, visi-misi) ada langsung di file Blade pada
  `resources/views/*.blade.php` — cari array `@foreach([...])` untuk
  menambah/mengubah kartu layanan atau fasilitas.
- Warna & tipografi diatur lewat CSS variable `:root` di
  `resources/views/layouts/app.blade.php`.
- Form kontak (`/kontak`) memvalidasi input lalu mencatat pesan ke
  `storage/logs/laravel.log`. Untuk mengirim email sungguhan, atur variabel
  `MAIL_*` di `.env` lalu aktifkan blok `Mail::raw(...)` yang di-comment di
  `app/Http/Controllers/PageController.php`.
