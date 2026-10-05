@extends('layouts.app')
@section('title', 'Kontak — PLN MCTN')
@section('content')

<section class="page-hero-img">
  <div class="hero-img-wrap">
    <img src="{{ asset('images/ttki.jpg') }}" alt="PLN MCTN" class="hero-bg-img">
    <div class="hero-shape"></div>
  </div>
  <div class="container hero-img-content">
    <h1 class="fw-bold text-white mb-2">Kontak</h1>
    <p class="text-white mb-0">
      <a href="{{ route('home') }}" class="text-white text-decoration-none">PLN MCTN</a>
      <span class="mx-1">-</span> Kontak
    </p>
  </div>
</section>

<section class="py-5 my-3" style="padding-top:100px !important;">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <div class="section-tag mb-2">Informasi Kontak</div>
        <h3 class="fw-bold mb-4">PT PLN Mandau Cipta<br>Tenaga Nusantara</h3>
        <ul class="list-unstyled d-flex flex-column gap-3">
          <li class="d-flex gap-3">
            <div class="svc-icon" style="width:44px;height:44px;font-size:1.05rem;"><i class="bi bi-geo-alt"></i></div>
            <div><div class="fw-semibold" style="font-size:.9rem;">Alamat</div><div class="text-muted" style="font-size:.88rem;">Plaza Simatupang, Lantai 7 &amp; 9, Jl. Tahi Bonar Simatupang Raya, Kby. Lama, Jakarta Selatan 12310</div></div>
          </li>
          <li class="d-flex gap-3">
            <div class="svc-icon" style="width:44px;height:44px;font-size:1.05rem;"><i class="bi bi-telephone"></i></div>
            <div><div class="fw-semibold" style="font-size:.9rem;">Telepon</div><div class="text-muted" style="font-size:.88rem;">+62 811-1300-821</div></div>
          </li>
          <li class="d-flex gap-3">
            <div class="svc-icon" style="width:44px;height:44px;font-size:1.05rem;"><i class="bi bi-envelope"></i></div>
            <div><div class="fw-semibold" style="font-size:.9rem;">Email</div><div class="text-muted" style="font-size:.88rem;">info@mctn.co.id</div></div>
          </li>
        </ul>
      </div>

      <div class="col-lg-7">
        <div class="p-4 p-md-5 rounded-3 border">
          @if (session('success'))
            <div class="alert alert-success d-flex align-items-center gap-2" role="alert">
              <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            </div>
          @endif

          <form method="POST" action="{{ route('contact.send') }}">
            @csrf
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" style="font-size:.85rem;font-weight:600;">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nama lengkap Anda">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label" style="font-size:.85rem;font-weight:600;">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="nama@perusahaan.com">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-12">
                <label class="form-label" style="font-size:.85rem;font-weight:600;">Perusahaan (opsional)</label>
                <input type="text" name="company" value="{{ old('company') }}" class="form-control @error('company') is-invalid @enderror" placeholder="Nama perusahaan Anda">
                @error('company') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-12">
                <label class="form-label" style="font-size:.85rem;font-weight:600;">Pesan</label>
                <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="Ceritakan kebutuhan energi atau uap industri Anda">{{ old('message') }}</textarea>
                @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-amber px-4 py-2">Kirim Pesan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
