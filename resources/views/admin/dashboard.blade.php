@extends('admin.layout')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
  @foreach($stats as $s)
  <div class="col-md-4 col-lg-2-4" style="flex:1 0 19%;">
    <div class="card-admin p-3 h-100">
      <div class="text-muted small mb-1">{{ $s['label'] }}</div>
      <div class="fs-3 fw-bold" style="color:var(--navy);">{{ $s['total'] }}</div>
      <a href="{{ route('admin.pengadaan.index', ['category' => $s['slug']]) }}" class="small text-decoration-none">Lihat &rarr;</a>
    </div>
  </div>
  @endforeach
</div>

<div class="card-admin p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-bold mb-0">Pengumuman Terbaru</h6>
    <a href="{{ route('admin.pengadaan.create') }}" class="btn btn-amber btn-sm"><i class="bi bi-plus-lg me-1"></i> Tambah Pengumuman</a>
  </div>
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse($latest as $item)
        <tr>
          <td>{{ $item->title }}</td>
          <td><span class="badge text-bg-light">{{ \App\Models\Procurement::categoryLabel($item->category) }}</span></td>
          <td>
            @if($item->is_published)
              <span class="badge text-bg-success">Terbit</span>
            @else
              <span class="badge text-bg-secondary">Draft</span>
            @endif
          </td>
          <td class="text-muted small">{{ optional($item->published_at)->translatedFormat('d M Y') ?? '—' }}</td>
          <td class="text-end"><a href="{{ route('admin.pengadaan.edit', $item->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a></td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center text-muted py-4">Belum ada pengumuman.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
