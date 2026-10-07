<?php $__env->startSection('title', 'Pengadaan'); ?>
<?php $__env->startSection('page-title', 'Kelola Pengadaan'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
  <form method="GET" class="d-flex gap-2">
    <select name="category" class="form-select form-select-sm" onchange="this.form.submit()">
      <option value="">Semua kategori</option>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($slug); ?>" <?php echo e(request('category') === $slug ? 'selected' : ''); ?>><?php echo e($label); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <input type="text" name="q" value="<?php echo e(request('q')); ?>" class="form-control form-control-sm" placeholder="Cari judul...">
    <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-search"></i></button>
  </form>
  <a href="<?php echo e(route('admin.pengadaan.create')); ?>" class="btn btn-amber btn-sm"><i class="bi bi-plus-lg me-1"></i> Tambah Pengumuman</a>
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
        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td>
            <?php echo e($item->title); ?>

            <?php if($item->attachment_path): ?>
              <i class="bi bi-paperclip text-muted ms-1" title="Ada lampiran"></i>
            <?php endif; ?>
          </td>
          <td><span class="badge text-bg-light"><?php echo e(\App\Models\Procurement::categoryLabel($item->category)); ?></span></td>
          <td>
            <?php if($item->is_published): ?>
              <span class="badge text-bg-success">Terbit</span>
            <?php else: ?>
              <span class="badge text-bg-secondary">Draft</span>
            <?php endif; ?>
          </td>
          <td class="text-muted small"><?php echo e(optional($item->published_at)->translatedFormat('d M Y') ?? '—'); ?></td>
          <td class="text-end">
            <a href="<?php echo e(route('pengadaan.show', [$item->category, $item->slug])); ?>" target="_blank" class="btn btn-sm btn-outline-secondary" title="Lihat di website"><i class="bi bi-box-arrow-up-right"></i></a>
            <a href="<?php echo e(route('admin.pengadaan.edit', $item->id)); ?>" class="btn btn-sm btn-outline-primary">Edit</a>
            <form action="<?php echo e(route('admin.pengadaan.destroy', $item->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus pengumuman ini?');">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr><td colspan="5" class="text-center text-muted py-4">Belum ada pengumuman.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="mt-3">
  <?php echo e($items->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/admin/pengadaan/index.blade.php ENDPATH**/ ?>