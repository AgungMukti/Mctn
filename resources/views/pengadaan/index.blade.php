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

  $years = $items->getCollection()
    ->map(fn ($i) => optional($i->published_at)->format('Y'))
    ->filter()->unique()->sortDesc()->values();
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

    <aside class="pg-side">
      <div class="pg-side__title">{{ __('Kategori') }}</div>
      <ul class="pg-side__list">
        @foreach($categories as $slug => $label)
        <li>
          <a href="{{ route('pengadaan.index', $slug) }}"
             class="pg-cat {{ $category === $slug ? 'is-active' : '' }}">
            <i class="bi {{ $iconFor($slug) }}"></i>
            {{ __($label) }}
          </a>
        </li>
        @endforeach
      </ul>
    </aside>

    <div class="pgx">

      {{-- Header daftar --}}
      <div class="pgx-head">
        <div>
          <h2 class="pgx-head__title">{{ __($categoryLabel) }}</h2>
          <div class="pgx-head__count">{{ __(':count pengumuman', ['count' => $items->total()]) }}</div>
        </div>

        @unless($items->isEmpty())
        <div class="pgx-tools">
          <label class="pgx-search">
            <i class="bi bi-search"></i>
            <input type="search" id="pgxSearch" placeholder="{{ __('Cari pengumuman') }}" autocomplete="off">
          </label>
          @if($years->count() > 1)
          <select id="pgxYear" class="pgx-select" aria-label="{{ __('Tahun') }}">
            <option value="">{{ __('Semua tahun') }}</option>
            @foreach($years as $y)
              <option value="{{ $y }}">{{ $y }}</option>
            @endforeach
          </select>
          @endif
        </div>
        @endunless
      </div>

      @if($items->isEmpty())
        <div class="pg-empty">
          <i class="bi bi-inbox fs-1 text-muted"></i>
          <p class="text-muted mt-3 mb-0">{{ __('Belum ada pengumuman untuk kategori :category.', ['category' => __($categoryLabel)]) }}</p>
        </div>
      @else
        <div class="pgx-list" id="pgxList">
          @foreach($items as $item)
            @php
              $isFeatured = $loop->first && $items->onFirstPage();
              $year = optional($item->published_at)->format('Y');
            @endphp

            @if($isFeatured)
              <a href="{{ route('pengadaan.show', [$category, $item->slug]) }}"
                 class="pgx-feature pgx-item"
                 data-title="{{ \Illuminate\Support\Str::lower($item->title . ' ' . $item->excerpt) }}"
                 data-year="{{ $year }}">
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
              <a href="{{ route('pengadaan.show', [$category, $item->slug]) }}"
                 class="pgx-row pgx-item"
                 data-title="{{ \Illuminate\Support\Str::lower($item->title . ' ' . $item->excerpt) }}"
                 data-year="{{ $year }}">
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

          <div class="pgx-nomatch" id="pgxNoMatch" hidden>{{ __('Tidak ada pengumuman yang cocok.') }}</div>
        </div>

        @if($items->hasPages())
          <div class="pgx-pager">{{ $items->links() }}</div>
        @endif
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

@section('scripts')
<script>
(function () {
  const search  = document.getElementById('pgxSearch');
  const year    = document.getElementById('pgxYear');
  const items   = document.querySelectorAll('.pgx-item');
  const noMatch = document.getElementById('pgxNoMatch');
  if (!search) return;

  function apply() {
    const q = search.value.trim().toLowerCase();
    const y = year ? year.value : '';
    let shown = 0;
    items.forEach(el => {
      const ok = (!q || el.dataset.title.includes(q)) && (!y || el.dataset.year === y);
      el.hidden = !ok;
      if (ok) shown++;
    });
    noMatch.hidden = shown !== 0;
  }

  search.addEventListener('input', apply);
  if (year) year.addEventListener('change', apply);
})();
</script>
@endsection