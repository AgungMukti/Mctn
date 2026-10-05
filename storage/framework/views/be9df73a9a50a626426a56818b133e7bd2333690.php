<?php $__env->startSection('title', 'Fasilitas & Proyek — PLN MCTN'); ?>
<?php $__env->startSection('styles'); ?>

<section class="page-hero-img">
  <div class="hero-img-wrap">
    <img src="<?php echo e(asset('images/ttki.jpg')); ?>" alt="PLN MCTN" class="hero-bg-img">
    <div class="hero-shape"></div>
  </div>
  <div class="container hero-img-content">
    <h1 class="fw-bold text-white mb-2">Fasilitas</h1>
    <p class="text-white mb-0">
      <a href="<?php echo e(route('home')); ?>" class="text-white text-decoration-none">PLN MCTN</a>
      <span class="mx-1">-</span> Fasilitas
    </p>
  </div>
</section>
<style>
.fac-img { width: 100%; height: 240px; object-fit: cover; border-radius: 12px; transition: transform .4s; }
.fac-wrap { overflow: hidden; border-radius: 12px; position: relative; }
.fac-wrap:hover .fac-img { transform: scale(1.05); }
.fac-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(6,20,40,.82), transparent 55%); border-radius: 12px; display: flex; align-items: flex-end; padding: 1.2rem; }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<section class="py-5 my-3" style="padding-top:100px !important;">
  <div class="container">
    <div class="row g-3">
      <div class="col-md-6 col-lg-8">
        <div class="fac-wrap">
           <img src="<?php echo e(asset('images/trbn-mctn.jpg')); ?>" class="img-fluid rounded-3"  alt="North Duri Cogeneration Plant">
          <div class="fac-overlay"><div><p class="text-white fw-bold mb-0">North Duri Cogeneration Plant</p><small class="text-white opacity-75">Gas Turbine Cogeneration &middot; 280 MW</small></div></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="fac-wrap">
          <img src="<?php echo e(asset('images/indk-mctn.jpg')); ?>" class="img-fluid rounded-3">
          <div class="fac-overlay"><div><p class="text-white fw-bold mb-0">Gardu Induk &amp; Transmisi</p><small class="text-white opacity-75">SUTT / SKTT / SUTM / SKTM</small></div></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="fac-wrap">
          <img src="<?php echo e(asset('images/rkntrl (1).JPG')); ?>" class="img-fluid rounded-3"> 
          <div class="fac-overlay"><div><p class="text-white fw-bold mb-0">Ruang Kontrol Operasi</p><small class="text-white opacity-75">Pemantauan 24/7</small></div></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="fac-wrap">
          <img src="<?php echo e(asset('images/uap.jpg')); ?>" class="img-fluid rounded-3">
          <div class="fac-overlay"><div><p class="text-white fw-bold mb-0">Distribusi Uap Industri</p><small class="text-white opacity-75">46.850 Ton / Hari</small></div></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="fac-wrap">
           <img src="<?php echo e(asset('images/supply (2).jpg')); ?>" class="img-fluid rounded-3">
          <div class="fac-overlay"><div><p class="text-white fw-bold mb-0">Onshore Power Supply</p><small class="text-white opacity-75">Termasuk Kabel Laut</small></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" style="background:var(--mist);">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-tag mb-2">Keselamatan Adalah Prioritas</div>
      <h2 class="section-title">Komitmen K3L &amp; Zero Accident</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-4 rounded-3 bg-white border h-100">
          <div class="fw-bold fs-3 mb-2" style="color:var(--navy);font-family:'Sora',sans-serif;">85,54%</div>
          <p class="fw-semibold mb-2">Skor Audit SMK3 2024</p>
          <p class="text-muted mb-0" style="font-size:.88rem;line-height:1.7;">Kategori Tingkat Lanjutan dengan penilaian Memuaskan, diaudit oleh lembaga independen atas 166 kriteria.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 rounded-3 bg-white border h-100">
          <div class="fw-bold fs-3 mb-2" style="color:var(--navy);font-family:'Sora',sans-serif;">Zero</div>
          <p class="fw-semibold mb-2">Budaya Nihil Kecelakaan</p>
          <p class="text-muted mb-0" style="font-size:.88rem;line-height:1.7;">Diterapkan konsisten di seluruh area pembangkit, baik bagi pekerja internal maupun vendor.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 rounded-3 bg-white border h-100">
          <div class="fw-bold fs-3 mb-2" style="color:var(--navy);font-family:'Sora',sans-serif;">HES</div>
          <p class="fw-semibold mb-2">Health Environment Safety Meeting</p>
          <p class="text-muted mb-0" style="font-size:.88rem;line-height:1.7;">Forum komunikasi internal bulanan yang mendukung budaya keselamatan kerja.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/facilities.blade.php ENDPATH**/ ?>