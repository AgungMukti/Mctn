@extends('layouts.app')
@section('title', $item->title . ' — PLN MCTN')
@section('content')

@php
  $fileUrl = $item->attachment_path ? asset('storage/' . $item->attachment_path) : null;
  $ext     = strtolower(pathinfo($item->attachment_path ?? '', PATHINFO_EXTENSION));
@endphp

<style>
  .pengumuman-head { background:#E6F1FB; border-radius:8px; padding:1.25rem 1.5rem; margin-bottom:1.5rem; }
  .pengumuman-head h1 { font-size:1.4rem; font-weight:700; margin:.75rem 0 .5rem; color:#0C447C; line-height:1.35; }
  .pengumuman-head .meta { font-size:.85rem; color:#185FA5; }
  .badge-kategori { background:#fff; color:#185FA5; font-size:.75rem; font-weight:600; padding:4px 12px; border-radius:8px; display:inline-block; }
  .pdf-preview {
  position: relative;
  width: 100%;
  max-width: 700px;      /* lebar seperti gambar 1 */
  max-height: 300px;     /* tinggi dipotong seperti gambar 1 */
  overflow: hidden;
  border: 1px solid var(--line);
  border-radius: 8px;
  margin: 0;
}
.pdf-preview canvas { width: 100%; display: block; }
  .pdf-fade { position:absolute; left:0; right:0; bottom:0; height:100px; background:linear-gradient(to bottom, rgba(255,255,255,0), #fff); }
  .file-card { display:flex; align-items:center; gap:1rem; padding:1.25rem 1.5rem; background:#f8fafc; border:1px solid var(--line); border-radius:8px; }
  .file-card i { font-size:2.2rem; color:#185FA5; }
</style>

<section class="py-5 my-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="p-4 p-md-5 rounded-3" style="background:#fff;border:1px solid var(--line);">

          {{-- Header di dalam kotak --}}
          <div class="pengumuman-head">
            <span class="badge-kategori">{{ $categoryLabel }}</span>
            <h1>{{ $item->title }}</h1>
            <div class="meta">
              <i class="bi bi-calendar3 me-1"></i>
              {{ optional($item->published_at ?? $item->created_at)->translatedFormat('d F Y') }}
            </div>
          </div>

          {{-- Isi pengumuman --}}
          <div style="font-size:.95rem;line-height:1.8;color:#2a2f38;">
           {!! clean($item->content) !!}
          </div>

          {{-- Lampiran --}}
@if($item->attachment_path)
  <div class="mt-4 pt-4" style="border-top:1px solid var(--line);">

    <div class="small text-muted mb-2">
      <i class="bi bi-paperclip"></i> {{ $item->attachment_name }}
    </div>

    @if($ext === 'pdf')
      <div class="pdf-preview" id="pdf-preview">
        <canvas id="pdf-canvas"></canvas>
        <div class="pdf-fade"></div>
      </div>
    @elseif(in_array($ext, ['jpg','jpeg','png','gif','webp']))
      <img src="{{ $fileUrl }}" alt="{{ $item->attachment_name }}" class="img-fluid rounded border">
    @else
      <div class="file-card">
        @php
          $icon = match(true) {
            in_array($ext, ['doc','docx']) => 'bi-file-earmark-word',
            in_array($ext, ['xls','xlsx']) => 'bi-file-earmark-excel',
            default => 'bi-file-earmark',
          };
        @endphp
        <i class="bi {{ $icon }}"></i>
        <div>
          <div class="fw-semibold">{{ $item->attachment_name }}</div>
          <div class="small text-muted">Pratinjau tidak tersedia, silakan unduh file</div>
        </div>
      </div>
    @endif

    <div class="mt-3">
      <a href="{{ route('pengadaan.download', [$category, $item->slug]) }}"
    class="btn btn-amber"
    data-no-loader
     download>
     <i class="bi bi-download me-1"></i> Unduh Lampiran
      </a>
    </div>
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

@if($item->attachment_path && $ext === 'pdf')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
  pdfjsLib.GlobalWorkerOptions.workerSrc =
    'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

  pdfjsLib.getDocument(@json($fileUrl)).promise
    .then(pdf => pdf.getPage(1))
    .then(page => {
      const canvas   = document.getElementById('pdf-canvas');
      const width    = canvas.parentElement.clientWidth;
      const baseView = page.getViewport({ scale: 1 });
      const scale    = (width / baseView.width) * (window.devicePixelRatio || 1);
      const viewport = page.getViewport({ scale });

      canvas.width  = viewport.width;
      canvas.height = viewport.height;
      return page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
    })
    .catch(() => document.getElementById('pdf-preview')?.remove());
</script>
@endif

@endsection