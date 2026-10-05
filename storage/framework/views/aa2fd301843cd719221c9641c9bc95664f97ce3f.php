<?php $__env->startSection('title', $categoryLabel . ' — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<section class="page-hero-img">
  <div class="hero-img-wrap">
    <img src="<?php echo e(asset('images/ttki.jpg')); ?>" alt="PLN MCTN" class="hero-bg-img">
    <div class="hero-shape"></div>
  </div>
  <div class="container hero-img-content">
    <h1 class="fw-bold text-white mb-2">Pengadaan</h1>
    <p class="text-white mb-0">
      <a href="<?php echo e(route('home')); ?>" class="text-white text-decoration-none">PLN MCTN</a>
      <span class="mx-1">-</span> Pengadaan
    </p>
  </div>
</section>

<section class="py-5 my-3">
  <div class="container">
    <div class="row g-5">

      
      <div class="col-lg-3">
        <div class="p-3 rounded-3 mb-4" style="background:var(--mist);">
          <div style="font-size:.72rem;font-weight:700;letter-spacing:.08em;color:var(--navy);text-transform:uppercase;margin-bottom:.75rem;">Kategori</div>
          <ul class="list-unstyled mb-0" style="font-size:.9rem;">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

      
      <div class="col-lg-9">
        <?php if($items->isEmpty()): ?>
          <div class="p-5 text-center rounded-3" style="background:var(--mist);">
            <i class="bi bi-inbox fs-1 text-muted"></i>
            <p class="text-muted mt-3 mb-0">Belum ada pengumuman untuk kategori <?php echo e($categoryLabel); ?>.</p>
          </div>
        <?php else: ?>
          <div class="d-flex flex-column gap-3">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('pengadaan.show', [$category, $item->slug])); ?>" class="text-decoration-none">
              <div class="svc-card p-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="svc-icon flex-shrink-0" style="width:44px;height:44px;font-size:1.05rem;">
                    <i class="bi bi-file-earmark-text-fill"></i>
                  </div>
                  <div>
                    <?php if($item->published_at): ?>
                      <div class="svc-num mb-1"><?php echo e($item->published_at->translatedFormat('d F Y')); ?></div>
                    <?php endif; ?>
                    <h5 class="fw-bold mb-2" style="color:var(--dark);"><?php echo e($item->title); ?></h5>
                    <?php if($item->excerpt): ?>
                      <p class="text-muted mb-0" style="font-size:.9rem;line-height:1.7;"><?php echo e($item->excerpt); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

          <div class="mt-4">
            <?php echo e($items->links()); ?>

          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center justify-content-around g-5 flex-wrap">
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo1.jpg')); ?>" alt="Pertamina" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo2.jpg')); ?>" alt="Danantara Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo6.jpg')); ?>" alt="PLN" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo4.jpg')); ?>" alt="SAP" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo5.jpg')); ?>" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo3.jpg')); ?>" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
    </div>
  </div>
</section>
  </div> 
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP17\htdocs\Mctn\resources\views/pengadaan/index.blade.php ENDPATH**/ ?>