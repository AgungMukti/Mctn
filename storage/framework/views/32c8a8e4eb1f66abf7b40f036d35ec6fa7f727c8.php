<?php $__env->startSection('title', 'Tentang Kami — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<div class="tk-page">

  <section class="tk-section tk-intro">
    <div class="tk-wrap">
      <h1 class="tk-heading">Tentang PLN MCTN</h1>
      <p class="tk-text">
         PT PLN Mandau Cipta Tenaga Nusantara (MCTN) adalah anak perusahaan
      PT PLN (Persero) yang memasok listrik dan uap untuk mendukung operasional
      eksplorasi minyak di Blok Hulu Rokan. Melalui teknologi Gas Turbine
      Cogeneration, kami menghasilkan listrik dan uap dalam satu sistem yang
      efisien, sehingga kebutuhan energi operasi terpenuhi secara andal setiap hari.
      </p>
    </div>
  </section>

  <section class="tk-section tk-trio">
    <div class="tk-wrap">
      <div class="tk-trio-grid">
        <figure class="tk-photo">
          <img src="<?php echo e(asset('images/tentang/tentang1.jpg')); ?>" alt="Foto 1 PLN MCTN">
        </figure>
        <figure class="tk-photo">
          <img src="<?php echo e(asset('images/tentang/tentang2.jpg')); ?>" alt="Foto 2 PLN MCTN">
        </figure>
        <figure class="tk-photo">
          <img src="<?php echo e(asset('images/tentang/tentang3.jpg')); ?>" alt="Foto 3 PLN MCTN">
        </figure>
      </div>
    </div>
  </section>


  <section class="tk-section tk-history">
    <div class="tk-wrap">
      <div class="tk-history-grid">
        <figure class="tk-photo">
          <img src="<?php echo e(asset('images/tentang/footage8.jpg')); ?>" alt="Pembangkit PLN MCTN">
        </figure>
        <div>
          <h2 class="tk-heading tk-heading--navy">Andal sejak 1998</h2>
          <p class="tk-text">
            Operasi ditangani oleh operator dan teknisi kompeten, dengan pasokan
            fuel gas dan feed water dari Pertamina Hulu Rokan sebagai mitra utama.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="tk-section tk-stats">
    <div class="tk-wrap">
      <div class="tk-stats-grid">
        <div class="tk-stat">
          <p class="tk-stat-num">280<small>MW</small></p>
          <p class="tk-stat-label">Sekitar 70% kebutuhan listrik sistem Blok Hulu Rokan</p>
        </div>
        <div class="tk-stat">
          <p class="tk-stat-num">46.850<small>ton/hari</small></p>
          <p class="tk-stat-label">Produksi uap, kontribusi 70% kebutuhan eksplorasi Duri</p>
        </div>
        <div class="tk-stat">
          <p class="tk-stat-num">20+<small>tahun</small></p>
          <p class="tk-stat-label">Pengalaman operasi Gas Turbine Cogeneration andal</p>
        </div>
        <div class="tk-stat">
          <p class="tk-stat-num">1998</p>
          <p class="tk-stat-label">Tahun PLN MCTN mulai beroperasi</p>
        </div>
      </div>
    </div>
  </section>


<link rel="stylesheet" href="<?php echo e(asset('css/visi-misi.css')); ?>">

<section class="vm" aria-labelledby="visi-title">

  
  <div class="vm-visi">
    <div class="vm-visi__head">
      <span class="vm-visi__icon" aria-hidden="true">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/>
          <circle cx="12" cy="12" r="3"/>
        </svg>
      </span>
      <h2 class="vm-visi__title" id="visi-title">Visi</h2>
    </div>

    <p class="vm-visi__text">
      Menjadi perusahaan yang <mark>handal</mark> dalam proses penyediaan sumber energi
      dan pelayanan jasa bagi pelanggan, serta <mark>unggul</mark> dalam penerapan persyaratan
      keselamatan, kesehatan kerja, dan lingkungan (K3L).
    </p>
  </div>

  
  <div class="vm-misi">
    <div class="vm-misi__head">
      <h2 class="vm-misi__title">Misi</h2>
      <span class="vm-misi__rule" aria-hidden="true"></span>
    </div>

    <ol class="vm-misi__grid">
      <li class="vm-item">
        <span class="vm-item__num" aria-hidden="true">01</span>
        <p class="vm-item__text">Mendukung penerapan nilai AKHLAK dalam menjalankan bisnis.</p>
      </li>
      <li class="vm-item">
        <span class="vm-item__num" aria-hidden="true">02</span>
        <p class="vm-item__text">Menjunjung tinggi pelanggan dengan memenuhi kebutuhan sesuai kesepakatan.</p>
      </li>
      <li class="vm-item">
        <span class="vm-item__num" aria-hidden="true">03</span>
        <p class="vm-item__text">Mengakui karyawan sebagai mitra perusahaan, bukan sekadar aset.</p>
      </li>
      <li class="vm-item">
        <span class="vm-item__num" aria-hidden="true">04</span>
        <p class="vm-item__text">Menjadikan keselamatan &amp; kesehatan kerja di atas keunggulan hasil produksi.</p>
      </li>
    </ol>
  </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/about.blade.php ENDPATH**/ ?>