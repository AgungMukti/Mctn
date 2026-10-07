@extends('admin.layout')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="adm-stats">
  @foreach($stats as $s)
  <div class="adm-card c{{ (($loop->iteration - 1) % 5) + 1 }}">
    <span>{{ $s['label'] }}</span>
    <strong>{{ $s['total'] }}</strong>
    <a href="{{ route('admin.pengadaan.index', ['category' => $s['slug']]) }}">Lihat &rarr;</a>
  </div>
  @endforeach
</div>

<div class="adm-panel">
  <div class="adm-panel-head">
    <h2>Pengumuman Terbaru</h2>
    <a href="{{ route('admin.pengadaan.create') }}" class="adm-btn"><i class="bi bi-plus-lg me-1"></i> Tambah Pengumuman</a>
  </div>

  <div class="table-responsive">
    <table class="adm-table">
      <thead>
        <tr>
          <th>JUDUL</th>
          <th>KATEGORI</th>
          <th>STATUS</th>
          <th>TANGGAL</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse($latest as $item)
        <tr>
          <td>{{ $item->title }}</td>
          <td><span class="adm-chip">{{ \App\Models\Procurement::categoryLabel($item->category) }}</span></td>
          <td>
            @if($item->is_published)
              <span class="adm-status">Terbit</span>
            @else
              <span class="adm-status adm-status--draft">Draft</span>
            @endif
          </td>
          <td class="text-muted small">{{ optional($item->published_at)->translatedFormat('d M Y') ?? '—' }}</td>
          <td class="text-end"><a href="{{ route('admin.pengadaan.edit', $item->id) }}" class="adm-edit">Edit</a></td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center text-muted py-4">Belum ada pengumuman.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection