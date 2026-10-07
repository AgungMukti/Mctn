<?php $__env->startSection('title', $categoryLabel . ' — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<?php
  // Ikon per kategori (dicocokkan dengan potongan slug). Ubah kalau slug-mu beda.
  $catIcons = [
    'news'     => 'bi-newspaper',
    'tender'   => 'bi-megaphone',
    'dpt'      => 'bi-person-check',
    'pemenang' => 'bi-trophy',
    'sanggah'  => 'bi-trophy',
    'lelang'   => 'bi-hammer',
  ];
  $iconFor = function ($slug) use ($catIcons) {
    foreach ($catIcons as $key => $icon) {
      if (str_contains($slug, $key)) return $icon;
    }
    return 'bi-folder2';
  };
?>

<section class="pg-page">

  
  <svg class="pg-deco pg-deco--right" viewBox="0 0 560 640" fill="none" aria-hidden="true">
    <circle cx="360" cy="320" r="250" fill="#e1f3f6"/>
    <circle cx="360" cy="320" r="170" stroke="#12a3b8" stroke-opacity=".35" stroke-width="2" stroke-dasharray="6 10"/>
    <path d="M390 90 190 360h130l-30 190 210-290H360z" fill="#f5c400" fill-opacity=".85"/>
    <circle cx="120" cy="560" r="26" fill="#0b3a78"/>
    <circle cx="500" cy="130" r="14" fill="#f5a100"/>
  </svg>

  
  <svg class="pg-deco pg-deco--left" viewBox="0 0 420 420" fill="none" aria-hidden="true">
    <circle cx="210" cy="210" r="190" fill="#0b3a78" fill-opacity=".08"/>
    <circle cx="210" cy="210" r="120" stroke="#0b3a78" stroke-opacity=".25" stroke-width="2"/>
  </svg>

  <div class="pg-main">

    
    <aside class="pg-side">
      <div class="pg-side__title">Kategori</div>
      <ul class="pg-side__list">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <a href="<?php echo e(route('pengadaan.index', $slug)); ?>"
             class="pg-cat <?php echo e($category === $slug ? 'is-active' : ''); ?>">
            <i class="bi <?php echo e($iconFor($slug)); ?>"></i>
            <?php echo e($label); ?>

          </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </aside>

    
    <div>
      <?php if($items->isEmpty()): ?>
        <div class="pg-empty">
          <i class="bi bi-inbox fs-1 text-muted"></i>
          <p class="text-muted mt-3 mb-0">Belum ada pengumuman untuk kategori <?php echo e($categoryLabel); ?>.</p>
        </div>
      <?php else: ?>
        <div class="pg-list">
          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('pengadaan.show', [$category, $item->slug])); ?>" class="pg-card">
            <div class="pg-card__blob"></div>
            <span class="pg-card__icon"><i class="bi bi-file-earmark-text-fill"></i></span>
            <div class="pg-card__body">
              <?php if($item->published_at): ?>
                <span class="pg-card__date"><?php echo e($item->published_at->translatedFormat('d F Y')); ?></span>
              <?php endif; ?>
              <h5 class="pg-card__title"><?php echo e($item->title); ?></h5>
              <?php if($item->excerpt): ?>
                <p class="pg-card__text"><?php echo e($item->excerpt); ?></p>
              <?php endif; ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/pengadaan/index.blade.php ENDPATH**/ ?>