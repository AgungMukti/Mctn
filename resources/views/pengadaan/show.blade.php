@extends('layouts.app')
@section('title', $item->title . ' — PLN MCTN')
@section('content')

<section class="page-hero">
  <div class="container">
    <nav style="font-size:.8rem;color:rgba(255,255,255,.6);" class="mb-3">
      <a href="{{ route('pengadaan.index', $category) }}" class="text-decoration-none" style="color:rgba(255,255,255,.75);">{{ $categoryLabel }}</a>
      <span class="mx-2">/</span>
      <span>Detail</span>
    </nav>
    <div class="section-tag mb-2" style="color:var(--amber-light);">{{ $categoryLabel }}</div>
    <h1 class="fw-bold mb-3">{{ $item->title }}</h1>
    @if($item->published_at)
      <p style="color:rgba(255,255,255,.7);"><i class="bi bi-calendar3 me-1"></i> {{ $item->published_at->translatedFormat('d F Y') }}</p>
    @endif
  </div>
</section>

<section class="py-5 my-3">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-9">
        <div class="p-4 p-md-5 rounded-3" style="background:#fff;border:1px solid var(--line);">
          <div style="font-size:.95rem;line-height:1.8;color:#2a2f38;">
            {!! $item->content !!}
          </div>

          @if($item->attachment_path)
            <div class="mt-4 pt-4" style="border-top:1px solid var(--line);">
              <a href="{{ route('pengadaan.download', [$category, $item->slug]) }}" class="btn btn-amber">
                <i class="bi bi-download me-1"></i> Unduh Lampiran
              </a>
            </div>
          @endif
        </div>

        <div class="mt-4">
          <a href="{{ route('pengadaan.index', $category) }}" class="btn btn-outline-navy">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke {{ $categoryLabel }}
          </a>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="p-3 rounded-3" style="background:var(--mist);">
          <div style="font-size:.72rem;font-weight:700;letter-spacing:.08em;color:var(--navy);text-transform:uppercase;margin-bottom:.75rem;">Kategori Pengadaan</div>
          <ul class="list-unstyled mb-0" style="font-size:.9rem;">
            @foreach(\App\Models\Procurement::categories() as $slug => $label)
            <li class="mb-1">
              <a href="{{ route('pengadaan.index', $slug) }}"
                 class="d-block px-3 py-2 rounded-2 text-decoration-none {{ $category === $slug ? 'fw-bold' : 'text-muted' }}"
                 style="{{ $category === $slug ? 'background:var(--navy);color:#fff;' : 'color:#4a4f58;' }}">
                {{ $label }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
