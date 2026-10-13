@extends('layouts.app')
@section('title', __($categoryLabel) . ' — PLN MCTN')
@section('content')

@php
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

  <svg class="pg-deco pg-deco--right" viewBox="0 0 560 640" fill="none" aria-hidden="true">
    <circle cx="360" cy="320" r="250" fill="#e1f3f6"/>
    <circle cx="360" cy="320" r="170" stroke="#12a3b8" stroke-opacity=".35" stroke-width="2" stroke-dasharray="6 10"/>
    <circle cx="120" cy="560" r="26" fill="#0b3a78"/>
    <circle cx="500" cy="130" r="14" fill="#f5a100"/>
  </svg>

  <img src="{{ asset('images/footage11.jpg') }}" alt="" class="pg-deco-photo">

  <svg class="pg-deco pg-deco--left" viewBox="0 0 420 420" fill="none" aria-hidden="true">
    <circle cx="210" cy="210" r="190" fill="#0b3a78" fill-opacity=".08"/>
    <circle cx="210" cy="210" r="120" stroke="#0b3a78" stroke-opacity=".25" stroke-width="2"/>
  </svg>

  <div class="pg-main">

    <div class="pg-sidecol">

      <aside class="pg-side">
        <div class="pg-side__title">{{ __('Kategori') }}</div>
        <ul class="pg-side__list">
          @foreach($categories as $slug => $label)
       <li>
        @if($category === $slug)
       <span class="pg-cat is-active" aria-current="page">
      <i class="bi {{ $iconFor($slug) }}"></i>
      {{ __($label) }}
      </span>
          @else
      <a href="{{ route('pengadaan.index', $slug) }}" class="pg-cat">
      <i class="bi {{ $iconFor($slug) }}"></i>
      {{ __($label) }}
    </a>
  @endif
</li>
@endforeach
        </ul>
      </aside>

      @if($items->hasPages())
        <div class="pg-side__pager">
          {{ $items->links('vendor.pagination.pln') }}
        </div>
      @endif

    </div>

    <div class="pgx">

      {{-- Header daftar --}}
      <div class="pgx-head">
        <div>
          <h2 class="pgx-head__title">{{ __($categoryLabel) }}</h2>
          <div class="pgx-head__count">
            @if($q !== '' || $year)
              {{ __(':count hasil ditemukan', ['count' => $items->total()]) }}
            @else
              {{ __(':count pengumuman', ['count' => $items->total()]) }}
            @endif
          </div>
        </div>

        <form method="GET" action="{{ route('pengadaan.index', $category) }}" class="pgx-tools">
          <label class="pgx-search">
            <i class="bi bi-search"></i>
            <input type="search" name="q" value="{{ $q }}"
                   placeholder="{{ __('Cari pengumuman') }}" autocomplete="off">
          </label>

          @if($years->count() > 1)
          <select name="year" class="pgx-select" onchange="this.form.submit()">
            <option value="">{{ __('Semua tahun') }}</option>
            @foreach($years as $y)
              <option value="{{ $y }}" @selected((string) $year === (string) $y)>{{ $y }}</option>
            @endforeach
          </select>
          @endif

          @if($q !== '' || $year)
            <a href="{{ route('pengadaan.index', $category) }}" class="pgx-reset">{{ __('Reset') }}</a>
          @endif
        </form>
      </div>

      @if($items->isEmpty())
        <div class="pg-empty">
          <i class="bi bi-inbox fs-1 text-muted"></i>
          <p class="text-muted mt-3 mb-0">
            @if($q !== '' || $year)
              {{ __('Tidak ada pengumuman yang cocok.') }}
            @else
              {{ __('Belum ada pengumuman untuk kategori :category.', ['category' => __($categoryLabel)]) }}
            @endif
          </p>
        </div>
      @else
        <div class="pgx-list" id="pgxList">
          @foreach($items as $item)
            @php
              $isFeatured = $loop->first && $items->onFirstPage() && $q === '' && !$year;
            @endphp

            @if($isFeatured)
              <a href="{{ route('pengadaan.show', [$category, $item->slug]) }}" class="pgx-feature pgx-item">
                <span class="pgx-feature__icon"><i class="bi bi-file-earmark-text-fill"></i></span>
                <div class="pgx-feature__body">
                  <div class="pgx-badges">
                    @if($item->published_at)
                      <span class="pgx-chip pgx-chip--amber">{{ $item->published_at->translatedFormat('d F Y') }}</span>
                    @endif
                    <span class="pgx-chip pgx-chip--green">{{ __('Terbaru') }}</span>
                    @if($item->attachment_path)
                      <i class="bi bi-paperclip pgx-clip" title="{{ __('Lampiran tersedia') }}"></i>
                    @endif
                  </div>
                  <h3 class="pgx-feature__title">{{ $item->title }}</h3>
                  @if($item->excerpt)
                    <p class="pgx-feature__text">{{ $item->excerpt }}</p>
                  @endif
                  <span class="pgx-more">{{ __('Baca Selengkapnya') }} <i class="bi bi-arrow-right"></i></span>
                </div>
              </a>
            @else
              <a href="{{ route('pengadaan.show', [$category, $item->slug]) }}" class="pgx-row pgx-item">
                <span class="pgx-row__icon"><i class="bi bi-file-earmark-text"></i></span>
                <div class="pgx-row__body">
                  @if($item->published_at)
                    <span class="pgx-row__date">{{ $item->published_at->translatedFormat('d F Y') }}</span>
                  @endif
                  <span class="pgx-row__title">{{ $item->title }}</span>
                </div>
                @if($item->attachment_path)
                  <i class="bi bi-paperclip pgx-clip" title="{{ __('Lampiran tersedia') }}"></i>
                @endif
                <i class="bi bi-chevron-right pgx-row__arrow"></i>
              </a>
            @endif
          @endforeach
        </div>
      @endif

    </div>
  </div>
</section>

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