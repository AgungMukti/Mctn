<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('page-title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="adm-stats">
  <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="adm-card c<?php echo e((($loop->iteration - 1) % 5) + 1); ?>">
    <span><?php echo e($s['label']); ?></span>
    <strong><?php echo e($s['total']); ?></strong>
    <a href="<?php echo e(route('admin.pengadaan.index', ['category' => $s['slug']])); ?>">Lihat &rarr;</a>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="adm-panel">
  <div class="adm-panel-head">
    <h2>Pengumuman Terbaru</h2>
    <a href="<?php echo e(route('admin.pengadaan.create')); ?>" class="adm-btn"><i class="bi bi-plus-lg me-1"></i> Tambah Pengumuman</a>
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
        <?php $__empty_1 = true; $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($item->title); ?></td>
          <td><span class="adm-chip"><?php echo e(\App\Models\Procurement::categoryLabel($item->category)); ?></span></td>
          <td>
            <?php if($item->is_published): ?>
              <span class="adm-status">Terbit</span>
            <?php else: ?>
              <span class="adm-status adm-status--draft">Draft</span>
            <?php endif; ?>
          </td>
          <td class="text-muted small"><?php echo e(optional($item->published_at)->translatedFormat('d M Y') ?? '—'); ?></td>
          <td class="text-end"><a href="<?php echo e(route('admin.pengadaan.edit', $item->id)); ?>" class="adm-edit">Edit</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr><td colspan="5" class="text-center text-muted py-4">Belum ada pengumuman.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>