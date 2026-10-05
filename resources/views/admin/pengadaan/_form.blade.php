@php $item = $item ?? null; @endphp

<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label small fw-semibold">Kategori</label>
    <select name="category" class="form-select" required>
      <option value="">— Pilih kategori —</option>
      @foreach($categories as $slug => $label)
        <option value="{{ $slug }}" {{ old('category', $item->category ?? '') === $slug ? 'selected' : '' }}>{{ $label }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label small fw-semibold">Tanggal Terbit</label>
    <input type="date" name="published_at" class="form-control"
           value="{{ old('published_at', optional($item->published_at ?? null)->format('Y-m-d')) }}">
  </div>

  <div class="col-12">
    <label class="form-label small fw-semibold">Judul</label>
    <input type="text" name="title" class="form-control" required
           value="{{ old('title', $item->title ?? '') }}" placeholder="Contoh: Pengumuman Lelang Penjualan Limbah Non B3">
  </div>

  <div class="col-12">
    <label class="form-label small fw-semibold">Ringkasan Singkat</label>
    <textarea name="excerpt" class="form-control" rows="2" maxlength="500" placeholder="Muncul di daftar pengumuman">{{ old('excerpt', $item->excerpt ?? '') }}</textarea>
  </div>

  <div class="col-12">
  <label class="form-label small fw-semibold">Isi Pengumuman</label>

  <div id="content-toolbar" class="border rounded-top bg-light">
    <span class="ql-formats">
      <select class="ql-header">
        <option value="1"></option>
        <option value="2"></option>
        <option selected></option>
      </select>
    </span>
    <span class="ql-formats">
      <button class="ql-bold"></button>
      <button class="ql-italic"></button>
      <button class="ql-underline"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-list" value="ordered"></button>
      <button class="ql-list" value="bullet"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-link"></button>
    </span>
  </div>

  <div id="content-editor" style="height:250px; background:#fff;" class="border border-top-0 rounded-bottom"></div>

  {{-- Field asli yang benar-benar dikirim ke server --}}
  <textarea name="content" id="content-hidden" class="d-none">{{ old('content', $item->content ?? '') }}</textarea>

  <div class="form-text">Gunakan toolbar di atas untuk mengatur format teks — tidak perlu menulis tag HTML manual.</div>
</div>

  <div class="col-md-8">
    <label class="form-label small fw-semibold">Lampiran (opsional)</label>
    <input type="file" name="attachment" class="form-control">
    <div class="form-text">PDF, Word, Excel, atau gambar. Maks 10MB.</div>
    @if(!empty($item) && $item->attachment_path)
      <div class="mt-2 small">
        <i class="bi bi-paperclip"></i> File saat ini: <strong>{{ $item->attachment_name }}</strong>
        <span class="text-muted">(unggah file baru untuk mengganti)</span>
      </div>
    @endif
  </div>

  <div class="col-md-4 d-flex align-items-end">
    <div class="form-check">
      <input type="hidden" name="is_published" value="0">
      <input type="checkbox" name="is_published" value="1" class="form-check-input" id="is_published"
             {{ old('is_published', $item->is_published ?? true) ? 'checked' : '' }}>
      <label class="form-check-label" for="is_published">Terbitkan sekarang</label>
    </div>
  </div>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const contentQuill = new Quill('#content-editor', {
      theme: 'snow',
      modules: { toolbar: '#content-toolbar' }
    });

    // Isi editor dengan data lama (mode edit / validasi gagal)
    const hiddenField = document.getElementById('content-hidden');
    if (hiddenField.value) {
      contentQuill.root.innerHTML = hiddenField.value;
    }

    // Sebelum form disubmit, salin isi editor ke textarea asli
    const formEl = hiddenField.closest('form');
    formEl.addEventListener('submit', function () {
      hiddenField.value = contentQuill.root.innerHTML;
    });
  });
</script>