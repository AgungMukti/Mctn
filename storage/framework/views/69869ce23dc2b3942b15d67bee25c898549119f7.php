<?php $__env->startSection('title', 'Tentang Kami — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>


<section class="about-hero-v3">
  <img src="<?php echo e(asset('images/ttki.jpg')); ?>" alt="PLN MCTN" class="about-hero-v3-img">
  <div class="about-hero-v3-overlay"></div>

  <div class="about-hero-v3-content">
    <span class="about-hero-v3-bar"></span>
    <div class="about-hero-v3-text">
      <span class="about-hero-v3-breadcrumb">PLN MCTN / Tentang Kami</span>
      <h1>Tentang<br>Kami</h1>
    </div>
  </div>
</section>


<section class="history-section">
  <div class="container">
    <div class="row g-5 align-items-center">

      <div class="col-lg-6 history-text-col reveal">
        <span class="history-year-bg">1998</span>

        <div class="section-tag mb-2">Sejarah Singkat</div>
        <h2 class="history-heading mb-4">Andal Sejak <span class="text-accent">1998</span></h2>

        <div class="history-timeline">
          <div class="history-timeline-item">
            <div class="history-dot"></div>
            <p class="text-muted">
              PT PLN Mandau Cipta Tenaga Nusantara (MCTN) adalah anak perusahaan PT PLN (Persero)
              yang memasok listrik dan uap untuk mendukung operasional eksplorasi minyak
              Blok Hulu Rokan.
            </p>
          </div>
          <div class="history-timeline-item">
            <div class="history-dot"></div>
            <p class="text-muted">
              Berdiri sejak 1998, PLN MCTN dengan Gas Turbine Cogeneration-nya telah beroperasi
              secara andal selama lebih dari 20 tahun.
            </p>
          </div>
          <div class="history-timeline-item last">
            <div class="history-dot"></div>
            <p class="text-muted">
              Ditangani operator dan teknisi kompeten, dengan pasokan fuel gas dan feed water
              dari Pertamina Hulu Rokan sebagai mitra utama.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 reveal">
        
        <div class="stat-teal-grid">
          <div class="stat-teal-card full" style="--stat-bg-img: url('<?php echo e(asset('images/stat-mw.jpg')); ?>')">
            <div class="stat-teal-top">
              <span class="stat-teal-num">280</span>
              <span class="stat-teal-unit">MW</span>
            </div>
            <p class="stat-teal-label">Sekitar 70% kebutuhan listrik sistem Blok Hulu Rokan</p>
          </div>

          <div class="stat-teal-row">
            <div class="stat-teal-card half" style="--stat-bg-img: url('<?php echo e(asset('images/stat-ton.jpg')); ?>')">
              <div class="stat-teal-top">
                <span class="stat-teal-num">46.850</span>
                <span class="stat-teal-unit">Ton/hari</span>
              </div>
              <p class="stat-teal-label">Produksi uap, kontribusi 70% kebutuhan eksplorasi Duri</p>
            </div>
            <div class="stat-teal-card half" style="--stat-bg-img: url('<?php echo e(asset('images/stat-tahun.jpg')); ?>')">
              <div class="stat-teal-top">
                <span class="stat-teal-num">20+</span>
                <span class="stat-teal-unit">Tahun</span>
              </div>
              <p class="stat-teal-label">Pengalaman operasi Gas Turbine Cogeneration andal</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">

    <div class="vm-banner reveal">
      <div class="vm-banner-icon"><i class="bi bi-eye-fill"></i></div>
      <div class="section-tag mb-2" style="color:var(--amber-light);">Visi</div>
      <p class="vm-banner-text">
        Menjadi perusahaan yang handal dalam proses penyediaan sumber energi dan pelayanan jasa
        bagi pelanggan, serta unggul dalam penerapan persyaratan keselamatan, kesehatan kerja,
        dan lingkungan (K3L).
      </p>
    </div>

    <div class="section-tag mb-3 mt-5">Misi</div>
    <div class="vm-mission-grid reveal">
      <div class="vm-mission-card">
        <div class="vm-mission-num">01</div>
        <p>Mendukung penerapan nilai AKHLAK dalam menjalankan bisnis.</p>
      </div>
      <div class="vm-mission-card">
        <div class="vm-mission-num">02</div>
        <p>Menjunjung tinggi pelanggan dengan memenuhi kebutuhan sesuai kesepakatan.</p>
      </div>
      <div class="vm-mission-card">
        <div class="vm-mission-num">03</div>
        <p>Mengakui karyawan sebagai mitra perusahaan, bukan sekadar aset.</p>
      </div>
      <div class="vm-mission-card">
        <div class="vm-mission-num">04</div>
        <p>Menjadikan keselamatan &amp; kesehatan kerja di atas keunggulan hasil produksi.</p>
      </div>
    </div>

  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP17\htdocs\Mctn\resources\views/about.blade.php ENDPATH**/ ?>