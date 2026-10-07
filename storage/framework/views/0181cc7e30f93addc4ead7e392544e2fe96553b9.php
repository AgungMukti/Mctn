<?php $__env->startSection('title', $item->title . ' — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<section class="page-hero">
  <div class="container">
    <nav style="font-size:.8rem;color:rgba(255,255,255,.6);" class="mb-3">
      <a href="<?php echo e(route('pengadaan.index', $category)); ?>" class="text-decoration-none" style="color:rgba(255,255,255,.75);"><?php echo e($categoryLabel); ?></a>
      <span class="mx-2">/</span>
      <span>Detail</span>
    </nav>
    <div class="section-tag mb-2" style="color:var(--amber-light);"><?php echo e($categoryLabel); ?></div>
    <h1 class="fw-bold mb-3"><?php echo e($item->title); ?></h1>
    <?php if($item->published_at): ?>
      <p style="color:rgba(255,255,255,.7);"><i class="bi bi-calendar3 me-1"></i> <?php echo e($item->published_at->translatedFormat('d F Y')); ?></p>
    <?php endif; ?>
  </div>
</section>

<section class="py-5 my-3">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-9">
        <div class="p-4 p-md-5 rounded-3" style="background:#fff;border:1px solid var(--line);">
          <div style="font-size:.95rem;line-height:1.8;color:#2a2f38;">
            <?php echo $item->content; ?>

          </div>

          <?php if($item->attachment_path): ?>
            <div class="mt-4 pt-4" style="border-top:1px solid var(--line);">
              <a href="<?php echo e(route('pengadaan.download', [$category, $item->slug])); ?>" class="btn btn-amber">
                <i class="bi bi-download me-1"></i> Unduh Lampiran
              </a>
            </div>
          <?php endif; ?>
        </div>

        <div class="mt-4">
          <a href="<?php echo e(route('pengadaan.index', $category)); ?>" class="btn btn-outline-navy">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke <?php echo e($categoryLabel); ?>

          </a>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="p-3 rounded-3" style="background:var(--mist);">
          <div style="font-size:.72rem;font-weight:700;letter-spacing:.08em;color:var(--navy);text-transform:uppercase;margin-bottom:.75rem;">Kategori Pengadaan</div>
          <ul class="list-unstyled mb-0" style="font-size:.9rem;">
            <?php $__currentLoopData = \App\Models\Procurement::categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-1">
              <a href="<?php echo e(route('pengadaan.index', $slug)); ?>"
                 class="d-block px-3 py-2 rounded-2 text-decoration-none <?php echo e($category === $slug ? 'fw-bold' : 'text-muted'); ?>"
                 style="<?php echo e($category === $slug ? 'background:var(--navy);color:#fff;' : 'color:#4a4f58;'); ?>">
                <?php echo e($label); ?>

              </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/pengadaan/show.blade.php ENDPATH**/ ?>