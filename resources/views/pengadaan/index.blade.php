@extends('layouts.app')
@section('title', $categoryLabel . ' — PLN MCTN')
@section('content')

@php
  // Ikon per kategori (dicocokkan dengan potongan slug). Ubah kalau slug-mu beda.
  $catIcons = [
    'news'     => 'bi-newspaper',
    'tender'   => 'bi-megaphone',
    'dpt'      => 'bi-person-check',
    'pemenang' => 'bi-trophy',
    'sanggah'  => 'bi-trophy',
    'lelang'   => 'bi-hammer',
  ];
  $iconFor = function ($slug) use ($catIcons) {
    foreach ($catIcons as $key => $icon) {
      if (str_contains($slug, $key)) return $icon;
    }
    return 'bi-folder2';
  };
@endphp

<section class="pg-page">

  {{-- Dekorasi kanan: lingkaran + petir --}}
  <svg class="pg-deco pg-deco--right" viewBox="0 0 560 640" fill="none" aria-hidden="true">
    <circle cx="360" cy="320" r="250" fill="#e1f3f6"/>
    <circle cx="360" cy="320" r="170" stroke="#12a3b8" stroke-opacity=".35" stroke-width="2" stroke-dasharray="6 10"/>
    <path d="M390 90 190 360h130l-30 190 210-290H360z" fill="#f5c400" fill-opacity=".85"/>
    <circle cx="120" cy="560" r="26" fill="#0b3a78"/>
    <circle cx="500" cy="130" r="14" fill="#f5a100"/>
  </svg>

  {{-- Dekorasi kiri bawah --}}
  <svg class="pg-deco pg-deco--left" viewBox="0 0 420 420" fill="none" aria-hidden="true">
    <circle cx="210" cy="210" r="190" fill="#0b3a78" fill-opacity=".08"/>
    <circle cx="210" cy="210" r="120" stroke="#0b3a78" stroke-opacity=".25" stroke-width="2"/>
  </svg>

  <div class="pg-main">

    {{-- Sub-navigasi kategori pengadaan --}}
    <aside class="pg-side">
      <div class="pg-side__title">Kategori</div>
      <ul class="pg-side__list">
        @foreach($categories as $slug => $label)
        <li>
          <a href="{{ route('pengadaan.index', $slug) }}"
             class="pg-cat {{ $category === $slug ? 'is-active' : '' }}">
            <i class="bi {{ $iconFor($slug) }}"></i>
            {{ $label }}
          </a>
        </li>
        @endforeach
      </ul>
    </aside>

    {{-- Daftar pengumuman --}}
    <div>
      @if($items->isEmpty())
        <div class="pg-empty">
          <i class="bi bi-inbox fs-1 text-muted"></i>
          <p class="text-muted mt-3 mb-0">Belum ada pengumuman untuk kategori {{ $categoryLabel }}.</p>
        </div>
      @else
        <div class="pg-list">
          @foreach($items as $item)
          <a href="{{ route('pengadaan.show', [$category, $item->slug]) }}" class="pg-card">
            <div class="pg-card__blob"></div>
            <span class="pg-card__icon"><i class="bi bi-file-earmark-text-fill"></i></span>
            <div class="pg-card__body">
              @if($item->published_at)
                <span class="pg-card__date">{{ $item->published_at->translatedFormat('d F Y') }}</span>
              @endif
              <h5 class="pg-card__title">{{ $item->title }}</h5>
              @if($item->excerpt)
                <p class="pg-card__text">{{ $item->excerpt }}</p>
              @endif
            </div>
          </a>
          @endforeach
        </div>

        <div class="mt-4">
          {{ $items->links() }}
        </div>
      @endif
    </div>

  </div>
</section>

{{-- Logo partner (tidak diubah) --}}
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center justify-content-around g-5 flex-wrap">
      <div class="col-auto text-center">
        <img src="{{ asset('images/partner/logo1.jpg') }}" alt="Pertamina" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="{{ asset('images/partner/logo2.jpg') }}" alt="Danantara Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="{{ asset('images/partner/logo6.jpg') }}" alt="PLN" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="{{ asset('images/partner/logo4.jpg') }}" alt="SAP" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="{{ asset('images/partner/logo5.jpg') }}" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="{{ asset('images/partner/logo3.jpg') }}" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
    </div>
  </div>
</section>

@endsection