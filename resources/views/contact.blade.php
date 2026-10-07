@extends('layouts.app')
@section('title', 'Kontak — PLN MCTN')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Newsreader:opsz,wght@6..72,600&display=swap" rel="stylesheet">

<section class="kt3-page">
  <div class="kt3-wrap">

    <h1 class="kt3-title">PT PLN Mandau Cipta Tenaga Nusantara</h1>

    <div class="kt3-info">
      <div class="kt3-col">
        <small>Alamat</small>
        <p>Plaza Simatupang, Lantai 7 &amp; 9, Jl. Tahi Bonar Simatupang Raya, Kby. Lama, Jakarta Selatan 12310</p>
      </div>
      <div class="kt3-col">
        <small>Telepon</small>
        <p>+62 811-1300-821</p>
      </div>
      <div class="kt3-col">
        <small>Email</small>
        <p>info@mctn.co.id</p>
      </div>
    </div>

    <div class="kt3-grid">

      <div>
        @if (session('success'))
          <div class="kt3-alert" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
          </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}">
          @csrf

          <div class="kt3-row">
            <div class="kt3-f">
              <label for="name">Nama</label>
              <input type="text" id="name" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" placeholder="Nama lengkap Anda">
              @error('name') <div class="kt3-err">{{ $message }}</div> @enderror
            </div>
            <div class="kt3-f">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" placeholder="nama@perusahaan.com">
              @error('email') <div class="kt3-err">{{ $message }}</div> @enderror
            </div>
          </div>

          <div class="kt3-f">
            <label for="company">Perusahaan (opsional)</label>
            <input type="text" id="company" name="company" value="{{ old('company') }}" class="@error('company') is-invalid @enderror" placeholder="Nama perusahaan Anda">
            @error('company') <div class="kt3-err">{{ $message }}</div> @enderror
          </div>

          <div class="kt3-f">
            <label for="message">Pesan</label>
            <textarea id="message" name="message" rows="5" class="@error('message') is-invalid @enderror" placeholder="Ceritakan kebutuhan energi atau uap industri Anda">{{ old('message') }}</textarea>
            @error('message') <div class="kt3-err">{{ $message }}</div> @enderror
          </div>

          <button type="submit" class="kt3-btn">Kirim Pesan</button>
          <span class="kt3-bar"></span>
        </form>
      </div>

      {{-- Google Maps --}}
      <div class="kt3-map">
        <iframe
          src="https://www.google.com/maps?q=Plaza+Simatupang,+Jl.+Tahi+Bonar+Simatupang+Raya,+Jakarta+Selatan+12310&z=17&output=embed"
          allowfullscreen loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Lokasi PT PLN Mandau Cipta Tenaga Nusantara"></iframe>
      </div>

    </div>
  </div>
</section>

@endsection