<?php

namespace Database\Seeders;

use App\Models\Procurement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProcurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'category' => 'lelang',
                'title' => 'Pengumuman Lelang Penjualan Limbah Non B3',
                'excerpt' => 'PT PLN Mandau Cipta Tenaga Nusantara dengan perantaraan Pejabat Lelang akan melaksanakan penjualan dimuka umum (lelang) barang bergerak berupa limbah non B3.',
                'published_at' => now()->subDays(5),
                'content' => <<<'HTML'
<p>PT PLN Mandau Cipta Tenaga Nusantara dengan perantaraan Pejabat Lelang akan melaksanakan penjualan dimuka umum (lelang) barang bergerak berupa:</p>
<div class="table-responsive my-4">
<table class="table table-bordered align-middle">
<thead class="table-light">
<tr>
<th>No. Lot</th>
<th>Nama Barang</th>
<th>Spesifikasi Barang</th>
<th>Jumlah Berat (Kg)</th>
<th>Nilai Limit (Rp)</th>
<th>Jaminan (Rp)</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Limbah Non B3</td>
<td>
<ol class="mb-0 ps-3">
<li>Alumunium</li>
<li>Besi Grade A</li>
<li>Besi Grade B</li>
<li>Besi Grade C</li>
<li>Stainless Steel</li>
<li>Scrap lainnya</li>
</ol>
</td>
<td>
<ol class="mb-0 ps-3">
<li>243</li>
<li>23.091</li>
<li>1.892</li>
<li>3.366</li>
<li>7.097</li>
<li>1 Lot</li>
</ol>
</td>
<td>Rp 155.800.000<br><small class="text-muted">(Seratus lima puluh lima juta delapan ratus ribu rupiah)</small></td>
<td>Rp 124.640.000<br><small class="text-muted">(Seratus dua puluh empat juta enam ratus empat puluh ribu rupiah)</small></td>
</tr>
</tbody>
</table>
</div>
<p>Peserta lelang wajib menyetorkan uang jaminan sebelum batas waktu yang ditentukan dan memenuhi syarat serta ketentuan lelang yang berlaku. Informasi lebih lanjut dapat menghubungi panitia pengadaan PLN MCTN.</p>
HTML,
            ],
            [
                'category' => 'tender',
                'title' => 'Pengumuman Tender Pengadaan Jasa Pemeliharaan Turbin Gas',
                'excerpt' => 'PLN MCTN membuka tender pengadaan jasa pemeliharaan (maintenance) Gas Turbine Cogeneration untuk periode tahun berjalan.',
                'published_at' => now()->subDays(12),
                'content' => '<p>PT PLN Mandau Cipta Tenaga Nusantara mengundang penyedia jasa yang memenuhi kualifikasi untuk mengikuti tender pengadaan jasa pemeliharaan Gas Turbine Cogeneration. Dokumen tender dapat diperoleh melalui panitia pengadaan sesuai jadwal yang ditentukan.</p>',
            ],
            [
                'category' => 'dpt',
                'title' => 'Pengumuman Daftar Penyedia Terseleksi (DPT) Tahun Berjalan',
                'excerpt' => 'Daftar penyedia barang/jasa yang telah lulus proses kualifikasi dan berhak mengikuti proses pengadaan PLN MCTN.',
                'published_at' => now()->subDays(20),
                'content' => '<p>Berikut adalah Daftar Penyedia Terseleksi (DPT) yang telah melalui proses evaluasi dan kualifikasi sesuai ketentuan pengadaan barang/jasa PT PLN Mandau Cipta Tenaga Nusantara.</p>',
            ],
            [
                'category' => 'pemenang',
                'title' => 'Pengumuman Pemenang & Jadwal Sanggah Pengadaan Spare Part',
                'excerpt' => 'Pengumuman pemenang tender pengadaan spare part beserta jadwal masa sanggah bagi peserta yang berkeberatan.',
                'published_at' => now()->subDays(30),
                'content' => '<p>Berdasarkan hasil evaluasi panitia pengadaan, berikut diumumkan pemenang pengadaan spare part. Peserta yang berkeberatan dapat mengajukan sanggahan sesuai jadwal yang ditentukan.</p>',
            ],
            [
                'category' => 'berita',
                'title' => 'PLN MCTN Perkuat Tata Kelola Pengadaan Barang dan Jasa',
                'excerpt' => 'PLN MCTN terus berkomitmen menjalankan proses pengadaan yang transparan, adil, dan akuntabel bagi seluruh mitra kerja.',
                'published_at' => now()->subDays(2),
                'content' => '<p>PT PLN Mandau Cipta Tenaga Nusantara berkomitmen menerapkan prinsip Good Corporate Governance (GCG) dalam setiap proses pengadaan barang dan jasa, guna memastikan proses yang transparan, adil, dan akuntabel bagi seluruh mitra kerja dan penyedia.</p>',
            ],
        ];

        foreach ($items as $item) {
            Procurement::updateOrCreate(
                ['slug' => Str::slug($item['title'])],
                array_merge($item, [
                    'slug' => Str::slug($item['title']),
                    'is_published' => true,
                ])
            );
        }
    }
}
