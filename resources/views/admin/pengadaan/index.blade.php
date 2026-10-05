@extends('admin.layout')
@section('title', 'Pengadaan')
@section('page-title', 'Kelola Pengadaan')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
  <form method="GET" class="d-flex gap-2">
    <select name="category" class="form-select form-select-sm" onchange="this.form.submit()">
      <option value="">Semua kategori</option>
      @foreach($categories as $slug => $label)
        <option value="{{ $slug }}" {{ request('category') === $slug ? 'selected' : '' }}>{{ $label }}</option>
      @endforeach
    </select>
    <input type="text" name="q" value="{{ request('q') }}" class="form-control form-control-sm" placeholder="Cari judul...">
    <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-search"></i></button>
  </form>
  <a href="{{ route('admin.pengadaan.create') }}" class="btn btn-amber btn-sm"><i class="bi bi-plus-lg me-1"></i> Tambah Pengumuman</a>
</div>

<div class="card-admin p-4">
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th class="text-end">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($items as $item)
        <tr>
          <td>
            {{ $item->title }}
            @if($item->attachment_path)
              <i class="bi bi-paperclip text-muted ms-1" title="Ada lampiran"></i>
            @endif
          </td>
          <td><span class="badge text-bg-light">{{ \App\Models\Procurement::categoryLabel($item->category) }}</span></td>
          <td>
            @if($item->is_published)
              <span class="badge text-bg-success">Terbit</span>
            @else
              <span class="badge text-bg-secondary">Draft</span>
            @endif
          </td>
          <td class="text-muted small">{{ optional($item->published_at)->translatedFormat('d M Y') ?? '—' }}</td>
          <td class="text-end">
            <a href="{{ route('pengadaan.show', [$item->category, $item->slug]) }}" target="_blank" class="btn btn-sm btn-outline-secondary" title="Lihat di website"><i class="bi bi-box-arrow-up-right"></i></a>
            <a href="{{ route('admin.pengadaan.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
            <form action="{{ route('admin.pengadaan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus pengumuman ini?');">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
            </form>
          </td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center text-muted py-4">Belum ada pengumuman.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

<div class="mt-3">
  {{ $items->links() }}
</div>
@endsection
