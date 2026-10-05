@extends('admin.layout')
@section('title', 'Tambah Pengumuman')
@section('page-title', 'Tambah Pengumuman')

@section('content')
<div class="card-admin p-4" style="max-width:820px;">
  <form method="POST" action="{{ route('admin.pengadaan.store') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.pengadaan._form')

    <div class="d-flex gap-2 mt-4">
      <button type="submit" class="btn btn-amber">Simpan Pengumuman</button>
      <a href="{{ route('admin.pengadaan.index') }}" class="btn btn-outline-secondary">Batal</a>
    </div>
  </form>
</div>
@endsection
