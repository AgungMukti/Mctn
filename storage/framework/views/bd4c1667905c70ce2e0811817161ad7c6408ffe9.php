<?php $__env->startSection('title', 'Tambah Pengumuman'); ?>
<?php $__env->startSection('page-title', 'Tambah Pengumuman'); ?>

<?php $__env->startSection('content'); ?>
<div class="card-admin p-4" style="max-width:820px;">
  <form method="POST" action="<?php echo e(route('admin.pengadaan.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('admin.pengadaan._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="d-flex gap-2 mt-4">
      <button type="submit" class="btn btn-amber">Simpan Pengumuman</button>
      <a href="<?php echo e(route('admin.pengadaan.index')); ?>" class="btn btn-outline-secondary">Batal</a>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/admin/pengadaan/create.blade.php ENDPATH**/ ?>