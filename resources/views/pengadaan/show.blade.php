@extends('layouts.app')
@section('title', $item->title . ' — PLN MCTN')
@section('content')

<section class="py-5 my-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">

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
    </div>
  </div>
</section>

@endsection