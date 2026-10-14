@extends('layouts.app')
@section('title', $item->title . ' — PLN MCTN')
@section('content')

@php
  $fileUrl = $item->attachment_path ? asset('storage/' . $item->attachment_path) : null;
  $ext     = strtolower(pathinfo($item->attachment_path ?? '', PATHINFO_EXTENSION));
  $hasFile = (bool) $item->attachment_path;
@endphp

<style>
  .pengumuman-head { background:#E6F1FB; border-radius:8px; padding:1.25rem 1.5rem; margin-bottom:1.5rem; }
  .pengumuman-head h1 { font-size:1.9rem; font-weight:700; margin:0 0 .6rem; color:#0C447C; line-height:1.3; }
  .pengumuman-head .meta { font-size:.9rem; color:#185FA5; }

  .pengumuman-grid { display:grid; grid-template-columns:1fr; gap:1.75rem; align-items:start; }
  .pengumuman-grid.has-file { grid-template-columns:minmax(0,1fr) minmax(0,1.8fr); }
  @media (max-width: 991.98px) {
    .pengumuman-grid.has-file { grid-template-columns:1fr; }
  }

  
  .pdf-scroll {
    max-height:600px;
    overflow-y:auto;
    padding:12px;
    background:#f3f4f6;
    border:1px solid var(--line);
    border-radius:12px;
    scrollbar-width:thin;
    scrollbar-color:#9ca3af #f3f4f6;
  }
  .pdf-scroll::-webkit-scrollbar { width:8px; }
  .pdf-scroll::-webkit-scrollbar-track { background:#f3f4f6; border-radius:8px; }
  .pdf-scroll::-webkit-scrollbar-thumb { background:#9ca3af; border-radius:8px; }
  .pdf-scroll canvas { display:block; width:100%; margin-bottom:12px; background:#fff; border-radius:4px; }
  .pdf-scroll canvas:last-child { margin-bottom:0; }
  .pdf-status { text-align:center; font-size:.85rem; color:#6b7280; padding:1rem 0; }
  @media (max-width: 575.98px) {
    .pdf-scroll { height:480px; }
  }

  .file-card { display:flex; align-items:center; gap:1rem; padding:1.25rem 1.5rem; background:#f8fafc; border:1px solid var(--line); border-radius:8px; }
  .file-card i { font-size:2.2rem; color:#185FA5; }
</style>

<section class="py-5 my-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-11">

        <div class="p-4 p-md-5 rounded-3" style="background:#fff;border:1px solid var(--line);">

          <div class="pengumuman-grid {{ $hasFile ? 'has-file' : '' }}">

            {{-- KOLOM KIRI: judul, tanggal, isi, tombol unduh --}}
            <div>
              <div class="pengumuman-head">
                <h1>{{ $item->title }}</h1>
                <div class="meta">
                  <i class="bi bi-calendar3 me-1"></i>
                  {{ optional($item->published_at ?? $item->created_at)->translatedFormat('d F Y') }}
                </div>
              </div>

              <div style="font-size:.95rem;line-height:1.8;color:#2a2f38;">
                {!! clean($item->content) !!}
              </div>

              @if($hasFile)
                <div class="mt-4">
                  <a href="{{ route('pengadaan.download', [$category, $item->slug]) }}"
                     class="btn btn-amber"
                     data-no-loader
                     download>
                    <i class="bi bi-download me-1"></i> Unduh Lampiran
                  </a>
                </div>
              @endif
            </div>

            {{-- KOLOM KANAN: lampiran --}}
            @if($hasFile)
              <div>
                <div class="small text-muted mb-2">
                  <i class="bi bi-paperclip"></i> {{ $item->attachment_name }}
                </div>

                @if($ext === 'pdf')
                  <div class="pdf-scroll" id="pdf-scroll">
                    <div class="pdf-status" id="pdf-status">Memuat dokumen…</div>
                  </div>
                @elseif(in_array($ext, ['jpg','jpeg','png','gif','webp']))
                  <img src="{{ $fileUrl }}" alt="{{ $item->attachment_name }}" class="img-fluid rounded border">
                @else
                  @php
                    $icon = match(true) {
                      in_array($ext, ['doc','docx']) => 'bi-file-earmark-word',
                      in_array($ext, ['xls','xlsx']) => 'bi-file-earmark-excel',
                      default => 'bi-file-earmark',
                    };
                  @endphp
                  <div class="file-card">
                    <i class="bi {{ $icon }}"></i>
                    <div>
                      <div class="fw-semibold">{{ $item->attachment_name }}</div>
                      <div class="small text-muted">Pratinjau tidak tersedia, silakan unduh file</div>
                    </div>
                  </div>
                @endif
              </div>
            @endif

          </div>
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

@if($hasFile && $ext === 'pdf')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
  pdfjsLib.GlobalWorkerOptions.workerSrc =
    'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

  (async function () {
    const box    = document.getElementById('pdf-scroll');
    const status = document.getElementById('pdf-status');

    try {
      const pdf   = await pdfjsLib.getDocument(@json($fileUrl)).promise;
      const width = box.clientWidth - 24; // dikurangi padding kiri + kanan
      const dpr   = Math.max(window.devicePixelRatio || 1, 2.5);

      status.remove();

      for (let n = 1; n <= pdf.numPages; n++) {
        const page     = await pdf.getPage(n);
        const baseView = page.getViewport({ scale: 1 });
        const viewport = page.getViewport({ scale: (width / baseView.width) * dpr });

        const canvas  = document.createElement('canvas');
        canvas.width  = viewport.width;
        canvas.height = viewport.height;
        box.appendChild(canvas);

        await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
      }
    } catch (e) {
      status.textContent = 'Pratinjau tidak dapat ditampilkan. Silakan unduh lampiran.';
    }
  })();
</script>
@endif

@endsection