<?php $__env->startSection('title', 'Tentang Kami — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<script>document.documentElement.classList.add('js');</script>
<style>
  .js .rv { opacity: 0; }

  .js .rv.is-visible {
    opacity: 1;
    animation-duration: .9s;
    animation-timing-function: cubic-bezier(.22, 1, .36, 1);
    animation-fill-mode: backwards;
    animation-delay: var(--d, 0s);
  }
  .js .rv-up.is-visible    { animation-name: rvUp; }
  .js .rv-left.is-visible  { animation-name: rvLeft; }
  .js .rv-right.is-visible { animation-name: rvRight; }
  .js .rv-zoom.is-visible  { animation-name: rvZoom; }

  @keyframes rvUp    { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: none; } }
  @keyframes rvLeft  { from { opacity: 0; transform: translateX(-80px); } to { opacity: 1; transform: none; } }
  @keyframes rvRight { from { opacity: 0; transform: translateX(80px); }  to { opacity: 1; transform: none; } }
  @keyframes rvZoom  { from { opacity: 0; transform: translateY(24px) scale(.94); } to { opacity: 1; transform: none; } }

  .count-up { font-variant-numeric: tabular-nums; }

  .tk-page, .tk-history, .vm { overflow-x: clip; }

  @media (prefers-reduced-motion: reduce) {
    .js .rv { opacity: 1; }
    .js .rv.is-visible { animation: none !important; }
  }
</style>

<div class="tk-page">

  <section class="tk-section tk-intro">
    <div class="tk-wrap">
      <h1 class="tk-heading rv rv-up">Tentang PLN MCTN</h1>
      <p class="tk-text rv rv-up">
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
        <figure class="tk-photo rv rv-zoom">
          <img src="<?php echo e(asset('images/tentang/tentang1.jpg')); ?>" alt="Foto 1 PLN MCTN">
        </figure>
        <figure class="tk-photo rv rv-zoom">
          <img src="<?php echo e(asset('images/tentang/tentang2.jpg')); ?>" alt="Foto 2 PLN MCTN">
        </figure>
        <figure class="tk-photo rv rv-zoom">
          <img src="<?php echo e(asset('images/tentang/tentang3.jpg')); ?>" alt="Foto 3 PLN MCTN">
        </figure>
      </div>
    </div>
  </section>

  <section class="tk-section tk-history">
    <div class="tk-wrap">
      <div class="tk-history-grid">
        
        <figure class="tk-photo rv rv-left">
          <img src="<?php echo e(asset('images/tentang/footage8.jpg')); ?>" alt="Pembangkit PLN MCTN">
        </figure>
        
        <div class="rv rv-right">
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
        <div class="tk-stat rv rv-up">
          <p class="tk-stat-num"><span class="count-up" data-target="280">280</span><small>MW</small></p>
          <p class="tk-stat-label">Sekitar 70% kebutuhan listrik sistem Blok Hulu Rokan</p>
        </div>
        <div class="tk-stat rv rv-up">
          <p class="tk-stat-num"><span class="count-up" data-target="46850">46.850</span><small>ton/hari</small></p>
          <p class="tk-stat-label">Produksi uap, kontribusi 70% kebutuhan eksplorasi Duri</p>
        </div>
        <div class="tk-stat rv rv-up">
          <p class="tk-stat-num"><span class="count-up" data-target="20" data-suffix="+">20+</span><small>tahun</small></p>
          <p class="tk-stat-label">Pengalaman operasi Gas Turbine Cogeneration andal</p>
        </div>
        <div class="tk-stat rv rv-up">
          <p class="tk-stat-num"><span class="count-up" data-target="1998" data-nogroup="true">1998</span></p>
          <p class="tk-stat-label">Tahun PLN MCTN mulai beroperasi</p>
        </div>
      </div>
    </div>
  </section>

<link rel="stylesheet" href="<?php echo e(asset('css/visi-misi.css')); ?>">

<section class="vm" aria-labelledby="visi-title">

  
  <div class="vm-visi">
    <div class="vm-visi__head rv rv-left">
      <span class="vm-visi__icon" aria-hidden="true">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12z"/>
          <circle cx="12" cy="12" r="3"/>
        </svg>
      </span>
      <h2 class="vm-visi__title" id="visi-title">Visi</h2>
    </div>

    <p class="vm-visi__text rv rv-right">
      Menjadi perusahaan yang <mark>handal</mark> dalam proses penyediaan sumber energi
      dan pelayanan jasa bagi pelanggan, serta <mark>unggul</mark> dalam penerapan persyaratan
      keselamatan, kesehatan kerja, dan lingkungan (K3L).
    </p>
  </div>

  
  <div class="vm-misi">
    <div class="vm-misi__head rv rv-up">
      <h2 class="vm-misi__title">Misi</h2>
      <span class="vm-misi__rule" aria-hidden="true"></span>
    </div>

    <ol class="vm-misi__grid">
      <li class="vm-item rv rv-up">
        <span class="vm-item__num" aria-hidden="true">01</span>
        <p class="vm-item__text">Mendukung penerapan nilai AKHLAK dalam menjalankan bisnis.</p>
      </li>
      <li class="vm-item rv rv-up">
        <span class="vm-item__num" aria-hidden="true">02</span>
        <p class="vm-item__text">Menjunjung tinggi pelanggan dengan memenuhi kebutuhan sesuai kesepakatan.</p>
      </li>
      <li class="vm-item rv rv-up">
        <span class="vm-item__num" aria-hidden="true">03</span>
        <p class="vm-item__text">Mengakui karyawan sebagai mitra perusahaan, bukan sekadar aset.</p>
      </li>
      <li class="vm-item rv rv-up">
        <span class="vm-item__num" aria-hidden="true">04</span>
        <p class="vm-item__text">Menjadikan keselamatan &amp; kesehatan kerja di atas keunggulan hasil produksi.</p>
      </li>
    </ol>
  </div>

</section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
(function () {
  const items = document.querySelectorAll('.rv');
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function formatNumber(el, value) {
    const suffix  = el.dataset.suffix || '';
    const noGroup = el.dataset.nogroup === 'true';
    return (noGroup ? String(value) : value.toLocaleString('id-ID')) + suffix;
  }

  function animateCount(el) {
    const target   = parseFloat(el.dataset.target);
    const duration = 2200; 
    const start    = performance.now();

    function tick(now) {
      const progress = Math.min((now - start) / duration, 1);
      const eased    = 1 - Math.pow(1 - progress, 3); 
      el.textContent = formatNumber(el, Math.floor(eased * target));
      if (progress < 1) {
        requestAnimationFrame(tick);
      } else {
        el.textContent = formatNumber(el, target);
      }
    }
    requestAnimationFrame(tick);
  }

  if (!('IntersectionObserver' in window) || reduceMotion) {
    items.forEach(el => el.classList.add('is-visible'));
    return;
  }

  document.querySelectorAll('.count-up').forEach(el => {
    el.textContent = formatNumber(el, 0);
  });

  const io = new IntersectionObserver((entries) => {
    let i = 0;
    entries.filter(e => e.isIntersecting).forEach(e => {
      const delay = Math.min(i, 5) * 0.12;
      e.target.style.setProperty('--d', delay + 's');
      e.target.classList.add('is-visible');
      io.unobserve(e.target);

      e.target.querySelectorAll('.count-up').forEach(num => {
        setTimeout(() => animateCount(num), delay * 1000 + 250);
      });
      i++;
    });
  }, { threshold: 0.2, rootMargin: '0px 0px -5% 0px' });

  items.forEach(el => io.observe(el));
})();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/about.blade.php ENDPATH**/ ?>