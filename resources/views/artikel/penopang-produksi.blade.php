@extends('layouts.app')
@section('title', 'Penopang Utama Produksi Minyak Berat Rokan — PLN MCTN')
@section('content')

<section class="py-5 my-2">
  <div class="container" style="max-width:800px;">
    <a href="{{ url('/') }}" class="text-decoration-none">&larr; Kembali ke Beranda</a>
    <div class="section-tag mt-4 mb-2">Operasional</div>
    <h1 class="fw-bold mb-4">Penopang Utama Produksi Minyak Berat Rokan</h1>

    <img src="{{ asset('images/hero-mctn.jpg') }}" class="w-100 rounded-3 mb-4" alt="Operasional Blok Rokan">

    <p>
      Keberadaan pembangkit North Duri Cogeneration sangat krusial bagi operasional Blok Rokan, karena
      metode produksi minyak berat (heavy oil) di wilayah tersebut menggunakan teknik thermal oil recovery
      yang membutuhkan pasokan energi dalam jumlah besar secara terus-menerus.
    </p>
    <p>
      Blok Rokan sendiri merupakan salah satu wilayah kerja migas terbesar di Indonesia, mencakup area
      seluas lebih dari 6.000 kilometer persegi dengan puluhan lapangan produksi. Tiga lapangan dengan
      potensi minyak paling melimpah berada di kawasan ini, menjadikan keandalan pasokan listrik dan uap
      sebagai faktor penentu kelangsungan produksi.
    </p>
    <p>
      Gangguan operasional pada pembangkit pemasok energi di kawasan ini dapat berdampak langsung terhadap
      aktivitas produksi minyak, mengingat pasokan listrik menjadi salah satu penopang utama kegiatan
      eksplorasi dan produksi di lapangan. Karena itu, menjaga keandalan dan kesinambungan operasional
      pembangkit menjadi prioritas utama dalam mendukung ketahanan energi nasional.
    </p>

    <div class="alert alert-light border mt-4" style="font-size:.85rem;">
      Sumber: Republika ID, Navigasi.co.id, Wartaekonomi.co.id
    </div>
  </div>
</section>

@endsection