<?php $__env->startSection('title', __($categoryLabel) . ' — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<?php
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

  $years = $items->getCollection()
    ->map(fn ($i) => optional($i->published_at)->format('Y'))
    ->filter()->unique()->sortDesc()->values();
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
      <div class="pg-side__title"><?php echo e(__('Kategori')); ?></div>
      <ul class="pg-side__list">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <a href="<?php echo e(route('pengadaan.index', $slug)); ?>"
             class="pg-cat <?php echo e($category === $slug ? 'is-active' : ''); ?>">
            <i class="bi <?php echo e($iconFor($slug)); ?>"></i>
            <?php echo e(__($label)); ?>

          </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </aside>

    <div class="pgx">

      
      <div class="pgx-head">
        <div>
          <h2 class="pgx-head__title"><?php echo e(__($categoryLabel)); ?></h2>
          <div class="pgx-head__count"><?php echo e(__(':count pengumuman', ['count' => $items->total()])); ?></div>
        </div>

        <?php if (! ($items->isEmpty())): ?>
        <div class="pgx-tools">
          <label class="pgx-search">
            <i class="bi bi-search"></i>
            <input type="search" id="pgxSearch" placeholder="<?php echo e(__('Cari pengumuman')); ?>" autocomplete="off">
          </label>
          <?php if($years->count() > 1): ?>
          <select id="pgxYear" class="pgx-select" aria-label="<?php echo e(__('Tahun')); ?>">
            <option value=""><?php echo e(__('Semua tahun')); ?></option>
            <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($y); ?>"><?php echo e($y); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>

      <?php if($items->isEmpty()): ?>
        <div class="pg-empty">
          <i class="bi bi-inbox fs-1 text-muted"></i>
          <p class="text-muted mt-3 mb-0"><?php echo e(__('Belum ada pengumuman untuk kategori :category.', ['category' => __($categoryLabel)])); ?></p>
        </div>
      <?php else: ?>
        <div class="pgx-list" id="pgxList">
          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $isFeatured = $loop->first && $items->onFirstPage();
              $year = optional($item->published_at)->format('Y');
            ?>

            <?php if($isFeatured): ?>
              <a href="<?php echo e(route('pengadaan.show', [$category, $item->slug])); ?>"
                 class="pgx-feature pgx-item"
                 data-title="<?php echo e(\Illuminate\Support\Str::lower($item->title . ' ' . $item->excerpt)); ?>"
                 data-year="<?php echo e($year); ?>">
                <span class="pgx-feature__icon"><i class="bi bi-file-earmark-text-fill"></i></span>
                <div class="pgx-feature__body">
                  <div class="pgx-badges">
                    <?php if($item->published_at): ?>
                      <span class="pgx-chip pgx-chip--amber"><?php echo e($item->published_at->translatedFormat('d F Y')); ?></span>
                    <?php endif; ?>
                    <span class="pgx-chip pgx-chip--green"><?php echo e(__('Terbaru')); ?></span>
                    <?php if($item->attachment_path): ?>
                      <i class="bi bi-paperclip pgx-clip" title="<?php echo e(__('Lampiran tersedia')); ?>"></i>
                    <?php endif; ?>
                  </div>
                  <h3 class="pgx-feature__title"><?php echo e($item->title); ?></h3>
                  <?php if($item->excerpt): ?>
                    <p class="pgx-feature__text"><?php echo e($item->excerpt); ?></p>
                  <?php endif; ?>
                  <span class="pgx-more"><?php echo e(__('Baca Selengkapnya')); ?> <i class="bi bi-arrow-right"></i></span>
                </div>
              </a>
            <?php else: ?>
              <a href="<?php echo e(route('pengadaan.show', [$category, $item->slug])); ?>"
                 class="pgx-row pgx-item"
                 data-title="<?php echo e(\Illuminate\Support\Str::lower($item->title . ' ' . $item->excerpt)); ?>"
                 data-year="<?php echo e($year); ?>">
                <span class="pgx-row__icon"><i class="bi bi-file-earmark-text"></i></span>
                <div class="pgx-row__body">
                  <?php if($item->published_at): ?>
                    <span class="pgx-row__date"><?php echo e($item->published_at->translatedFormat('d F Y')); ?></span>
                  <?php endif; ?>
                  <span class="pgx-row__title"><?php echo e($item->title); ?></span>
                </div>
                <?php if($item->attachment_path): ?>
                  <i class="bi bi-paperclip pgx-clip" title="<?php echo e(__('Lampiran tersedia')); ?>"></i>
                <?php endif; ?>
                <i class="bi bi-chevron-right pgx-row__arrow"></i>
              </a>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <div class="pgx-nomatch" id="pgxNoMatch" hidden><?php echo e(__('Tidak ada pengumuman yang cocok.')); ?></div>
        </div>

        <?php if($items->hasPages()): ?>
          <div class="pgx-pager"><?php echo e($items->links()); ?></div>
        <?php endif; ?>
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

<?php $__env->startSection('scripts'); ?>
<script>
(function () {
  const search  = document.getElementById('pgxSearch');
  const year    = document.getElementById('pgxYear');
  const items   = document.querySelectorAll('.pgx-item');
  const noMatch = document.getElementById('pgxNoMatch');
  if (!search) return;

  function apply() {
    const q = search.value.trim().toLowerCase();
    const y = year ? year.value : '';
    let shown = 0;
    items.forEach(el => {
      const ok = (!q || el.dataset.title.includes(q)) && (!y || el.dataset.year === y);
      el.hidden = !ok;
      if (ok) shown++;
    });
    noMatch.hidden = shown !== 0;
  }

  search.addEventListener('input', apply);
  if (year) year.addEventListener('change', apply);
})();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/pengadaan/index.blade.php ENDPATH**/ ?>