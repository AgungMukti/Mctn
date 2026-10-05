@extends('layouts.app')
@section('title', 'Andalan Energi untuk Blok Rokan Sejak Dua Dekade — PLN MCTN')
@section('content')

<section class="py-5 my-2">
  <div class="container" style="max-width:800px;">
    <a href="{{ url('/') }}" class="text-decoration-none">&larr; Kembali ke Beranda</a>
    <div class="section-tag mt-4 mb-2">Fasilitas</div>
    <h1 class="fw-bold mb-4">Andalan Energi untuk Blok Rokan Sejak Dua Dekade</h1>

    <img src="{{ asset('images/hero-mctn.jpg') }}" class="w-100 rounded-3 mb-4" alt="North Duri Cogeneration Plant">

    <p>
      Pembangkit listrik tenaga gas North Duri Cogeneration mulai beroperasi sejak lebih dari dua dekade
      lalu, dibangun dengan nilai investasi sekitar 19 juta dolar Amerika Serikat. Pembangkit berkapasitas
      hingga 300 Mega Watt (MW) ini kini dioperasikan oleh PT PLN Mandau Cipta Tenaga Nusantara (PLN MCTN),
      anak usaha PLN yang mengambil alih kepemilikannya pada 2021, bersamaan dengan proses alih kelola
      Wilayah Kerja Rokan dari Chevron Pacific Indonesia kepada Pertamina Hulu Rokan.
    </p>
    <p>
      Sebelum diakuisisi PLN, pembangkit ini telah menyediakan uap dan listrik dengan biaya efisien dan
      andal untuk Blok Rokan selama lebih dari 20 tahun di bawah pengelolaan Chevron Standard Limited (CSL).
      Proses akuisisi ini merupakan langkah strategis untuk memastikan keberlangsungan pasokan energi bagi
      salah satu wilayah kerja migas terbesar di Indonesia tersebut.
    </p>
    <p>
      Dalam masa transisi pasca-akuisisi, PLN memanfaatkan pembangkit eksisting milik MCTN ini, didukung
      pembangkit PLTG Minas dan Central Duri, sembari menyiapkan interkoneksi jaringan listrik permanen
      yang menghubungkan Wilayah Kerja Rokan dengan sistem kelistrikan regional Sumatra.
    </p>

    <div class="alert alert-light border mt-4" style="font-size:.85rem;">
      Sumber: Katadata.co.id, Republika ID, Kementerian ESDM RI
    </div>
  </div>
</section>

@endsection