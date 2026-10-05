@extends('layouts.app')
@section('title', $categoryLabel . ' — PLN MCTN')
@section('content')


<section class="py-5 my-3">
  <div class="container">
    <div class="row g-5">

      {{-- Sub-navigasi kategori pengadaan --}}
      <div class="col-lg-3">
        <div class="p-3 rounded-3 mb-4" style="background:var(--mist);">
          <div style="font-size:.72rem;font-weight:700;letter-spacing:.08em;color:var(--navy);text-transform:uppercase;margin-bottom:.75rem;">Kategori</div>
          <ul class="list-unstyled mb-0" style="font-size:.9rem;">
            @foreach($categories as $slug => $label)
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

      {{-- Daftar pengumuman --}}
      <div class="col-lg-9">
        @if($items->isEmpty())
          <div class="p-5 text-center rounded-3" style="background:var(--mist);">
            <i class="bi bi-inbox fs-1 text-muted"></i>
            <p class="text-muted mt-3 mb-0">Belum ada pengumuman untuk kategori {{ $categoryLabel }}.</p>
          </div>
        @else
          <div class="d-flex flex-column gap-3">
            @foreach($items as $item)
            <a href="{{ route('pengadaan.show', [$category, $item->slug]) }}" class="text-decoration-none">
              <div class="svc-card p-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="svc-icon flex-shrink-0" style="width:44px;height:44px;font-size:1.05rem;">
                    <i class="bi bi-file-earmark-text-fill"></i>
                  </div>
                  <div>
                    @if($item->published_at)
                      <div class="svc-num mb-1">{{ $item->published_at->translatedFormat('d F Y') }}</div>
                    @endif
                    <h5 class="fw-bold mb-2" style="color:var(--dark);">{{ $item->title }}</h5>
                    @if($item->excerpt)
                      <p class="text-muted mb-0" style="font-size:.9rem;line-height:1.7;">{{ $item->excerpt }}</p>
                    @endif
                  </div>
                </div>
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
  </div> 
</section>

@endsection
