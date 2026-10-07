<?php $__env->startSection('title', 'Beranda — PLN MCTN'); ?>
<?php $__env->startSection('styles'); ?>
<style>
  .hero-wrap-v2 {
  position: relative;
  min-height: 640px;
  display: flex;
  align-items: center;
  overflow: hidden;
  background: url("<?php echo e(asset('images/gdik-mctn.jpg')); ?>") center/cover no-repeat;
}

.hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(6, 20, 40, .72);
  z-index: 1;
}

.hero-decor {
  position: absolute;
  right: -60px;
  bottom: -80px;
  width: 420px;
  height: 420px;
  background: linear-gradient(135deg, rgba(20,162,186,.85), rgba(9,73,84,.9));
  border-radius: 45% 55% 60% 40% / 50% 45% 55% 50%;
  z-index: 1;
  animation: heroDecorPulse 6s ease-in-out infinite;
}

.hero-decor-ring {
  position: absolute;
  right: 30px;
  bottom: -20px;
  width: 260px;
  height: 260px;
  border: 2px solid rgba(255,255,255,.35);
  border-radius: 50%;
  z-index: 1;
  animation: heroRingPulse 3s ease-out infinite;
}

@keyframes heroDecorPulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.06); }
}

@keyframes heroRingPulse {
  0% { transform: scale(0.8); opacity: 0.8; }
  100% { transform: scale(1.4); opacity: 0; }
}

.hero-badge {
  display: inline-block;
  border: 2px solid #ffffff !important;
  color: #ffffff !important;
  font-family: 'Sora', sans-serif;
  font-size: .8rem;
  font-weight: 700;
  letter-spacing: .1em;
  text-transform: uppercase;
  padding: .5rem 1.2rem;
  border-radius: 6px;
}

.hero-tour-btn {
  display: inline-flex;
  align-items: center;
  gap: .9rem;
  background: #ffffff !important;
  color: #0a2647 !important;
  font-family: 'Sora', sans-serif;
  font-weight: 800;
  letter-spacing: .03em;
  text-transform: uppercase;
  font-size: 1rem;
  padding: 1.1rem 2.2rem;
  border-radius: 50px;
  text-decoration: none;
  transition: transform .2s ease, box-shadow .2s ease;
}

.hero-title-v2 {
  color: #ffffff !important;
  font-family: 'Sora', sans-serif;
  font-weight: 800;
  font-size: 70px;
  line-height: 85px;
  max-width: 1100px;
}

@media (max-width: 768px) {
  .hero-title-v2 {
    font-size: 2.2rem;
    line-height: 1.15;
    max-width: 100%;
  }
}
.hero-tour-btn {
  display: inline-flex;
  align-items: center;
  gap: .9rem;
  background: #ffffff !important;
  color: #0a2647 !important;
  font-weight: 800;
  letter-spacing: .03em;
  text-transform: uppercase;
  font-size: 1rem;
  padding: 1.1rem 2.2rem;
  border-radius: 50px;
  text-decoration: none;
  transition: transform .2s ease, box-shadow .2s ease;
}

.hero-tour-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(0,0,0,.25);
  color: #0a2647 !important;
}

.hero-tour-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  border: 2px solid #0a2647;
  font-size: 1.1rem;
  font-weight: 700;
}
.hero-wrap { position: relative; min-height: 88vh; display: flex; align-items: center; overflow: hidden; }
.hero-overlay { position: absolute; inset: 0; background: linear-gradient(100deg, rgba(6,20,40,.82) 0%, rgba(6,20,40,.62) 45%, rgba(10,61,122,.4) 100%); }
.hero-content { position: relative; z-index: 2; }
.hero-tag { font-size: .75rem; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--amber-light); }
.hero-title { font-size: clamp(2.2rem, 4.6vw, 3.6rem); font-weight: 800; color: #fff; line-height: 1.15; }
.hero-subtitle { font-size: 1.02rem; color: rgba(255,255,255,.72); font-weight: 300; max-width: 520px; line-height: 1.7; }
.hero-cta-primary { background: var(--amber); border: none; color: var(--navy-deep); font-weight: 700; font-size: .92rem; padding: .85rem 1.9rem; border-radius: 7px; transition: all .2s; }
.hero-cta-primary:hover { background: var(--amber-light); transform: translateY(-1px); color: var(--navy-deep); }
.hero-cta-secondary { border: 1.5px solid rgba(255,255,255,.45); color: #fff; background: transparent; font-weight: 500; font-size: .92rem; padding: .85rem 1.9rem; border-radius: 7px; }
.hero-cta-secondary:hover { border-color: #fff; background: rgba(255,255,255,.08); color: #fff; }
.hero-stats { display: flex; gap: 2.4rem; margin-top: 2.8rem; flex-wrap: wrap; }
.hero-stat-num { font-family: 'Sora', sans-serif; font-size: 1.9rem; font-weight: 700; color: #fff; line-height: 1; }
.hero-stat-label { font-size: .75rem; color: rgba(255,255,255,.5); margin-top: 4px; }
.hero-stat-div { width: 1px; background: rgba(255,255,255,.18); align-self: stretch; }

.stats-band { background: linear-gradient(135deg, rgba(20,162,186,.80), rgba(1,192,225,.83)); }
.stat-item { text-align: center; padding: 2.2rem 1rem; }
.stat-icon { width: 48px; height: 48px; background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.12); border-radius: 10px; display: inline-flex; align-items: center; justify-content: center; color: var(--amber-light); font-size: 1.15rem; margin-bottom: .75rem; }
.stat-num { font-family: 'Sora', sans-serif; font-size: 1.7rem; font-weight: 700; color: #fff; line-height: 1; }
.stat-lbl { font-size: .78rem; color: rgba(255,255,255,.5); margin-top: 4px; }

.scheme-banner { background: linear-gradient(135deg, var(--navy-deep) 0%, #0a2647 55%, var(--navy) 100%); position: relative; overflow: hidden; }
.scheme-banner::after { content: ''; position: absolute; top: -40%; right: -8%; width: 480px; height: 480px; background: radial-gradient(circle, rgba(242,160,14,.14), transparent 70%); pointer-events: none; }
.scheme-step { background: rgba(255,255,255,.06); border-radius: 10px; padding: 1.1rem; border: 1px solid rgba(255,255,255,.1); height: 100%; }
.scheme-step-num { width: 26px; height: 26px; background: var(--amber); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: .75rem; font-weight: 700; color: var(--navy-deep); flex-shrink: 0; }

.fac-img { width: 100%; height: 230px; object-fit: cover; border-radius: 12px; transition: transform .4s; }
.fac-wrap { overflow: hidden; border-radius: 12px; position: relative; }
.fac-wrap:hover .fac-img { transform: scale(1.05); }
.fac-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(6,20,40,.82), transparent 55%); border-radius: 12px; display: flex; align-items: flex-end; padding: 1.2rem; }

.vm-section { background: rgba(20,162,186,.80); }
.vm-overlay { position: absolute; inset: 0; background: transparent; }
.vm-content { position: relative; z-index: 1; }
.mission-icon { width: 38px; height: 38px; background: rgba(255,255,255,.08); border-radius: 9px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="hero-slider" id="heroSlider">

  <div class="slide active">
    <img src="<?php echo e(asset('images/beranda2.jpg')); ?>" class="slide-img" alt="PLN Mandau Cipta Tenaga Nusantara">
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="slide-text-box">
      <span class="slide-divider"></span>
      <h2>Building a Sustainable Future</h2>
      <p>Dengan mengutamakan teknologi canggih, inovasi, dan efisiensi operasional, kami berkomitmen menghadirkan solusi energi yang andal sekaligus mendukung pembangunan yang berkelanjutan untuk masa depan.</p>
    </div>
</div>
  </div>

  <div class="slide">
    <img src="<?php echo e(asset('images/beranda1.jpg')); ?>" class="slide-img" alt="Tentang MCTN">
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="slide-text-box">
      <span class="slide-divider"></span>
      <h2>Innovating Energy Through Advanced Technology</h2>
      <p>Dengan dukungan teknologi modern dan sistem operasional yang terintegrasi, kami terus menghadirkan proses yang efisien, aman, dan andal untuk mendukung kebutuhan energi serta menciptakan masa depan yang lebih maju dan berkelanjutan.</p>
    </div>
</div>
  </div>

  <div class="slide">
    <img src="<?php echo e(asset('images/beranda3.jpg')); ?>" class="slide-img" alt="Tentang MCTN">
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="slide-text-box">
      <span class="slide-divider"></span>
      <h2>Harnessing Clean Energy For a Greener Future</h2>
      <p>Memanfaatkan teknologi modern untuk menghadirkan energi yang bersih, efisien, dan berkelanjutan. Kami terus mendorong inovasi energi terbarukan sebagai langkah nyata menuju masa depan yang lebih hijau dan berdaya.</p>
    </div>
</div>
  </div>

  <div class="slide">
    <img src="<?php echo e(asset('images/tentang.jpg')); ?>" class="slide-img" alt="Tentang MCTN">
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="slide-text-box">
      <span class="slide-divider"></span>
      <h2>Trusted Partner For Energy Security</h2>
      <p>Memproduksi sekitar 70% kebutuhan listrik sistem Blok Hulu Rokan, termasuk 70% kebutuhan uap eksplorasi Duri.</p>
    </div>
</div>
  </div>

  <button class="slider-arrow prev" onclick="changeSlide(-1)">
    <i class="bi bi-chevron-left"></i>
  </button>
  <button class="slider-arrow next" onclick="changeSlide(1)">
    <i class="bi bi-chevron-right"></i>
  </button>

  <div class="slider-dots" id="sliderDots"></div>
</div>


<section class="stats-band-v2">
  <div class="container">
    <div class="row g-0">
      <div class="col-md-4 stats-v2-col">
        <div class="stat-v2-item">
          <i class="bi bi-lightning-charge stat-v2-icon"></i>
          <div class="stat-v2-num" data-target="280" data-suffix=" MW">0 MW</div>
          <div class="stat-v2-lbl">Kapasitas Terpasang</div>
        </div>
      </div>
      <div class="col-md-4 stats-v2-col">
        <div class="stat-v2-item">
          <i class="bi bi-thermometer-sun stat-v2-icon"></i>
          <div class="stat-v2-num" data-target="70" data-suffix="%">0%</div>
          <div class="stat-v2-lbl">Kontribusi Uap Eksplorasi Duri</div>
        </div>
      </div>
      <div class="col-md-4 stats-v2-col">
        <div class="stat-v2-item">
          <i class="bi bi-calendar3 stat-v2-icon"></i>
          <div class="stat-v2-num" data-target="1998" data-suffix="">0</div>
          <div class="stat-v2-lbl">Tahun Berdiri</div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="about-hero">
  <img src="<?php echo e(asset('images/kami.jpg')); ?>" alt="Mitra Terpercaya" class="about-hero-img">
  <div class="about-hero-overlay">
    <p class="about-hero-label reveal">TENTANG KAMI</p>
    <h1 class="about-hero-title reveal">Mitra Terpercaya Ketahanan Energi Nasional</h1>
    <p class="about-hero-desc reveal">
      PT PLN Mandau Cipta Tenaga Nusantara (MCTN) memproduksi sekitar 70%
      kebutuhan listrik sistem Blok Hulu Rokan...
    </p>
    <div class="about-hero-buttons reveal">
  <a href="<?php echo e(route('about')); ?>" class="about-btn-outline">Selengkapnya ↗</a>
  <a href="#" class="about-btn-outline">Hubungi Kami ↗</a>
</div>
  </div>
</div>


<section class="services-hero-section">
  <div class="container">
    <h2 class="section-title mb-5">Layanan Terbaik Kami</h2>
    <div class="title-underline"></div>
  </div>

  <div class="services-overlap-wrap">
    <div class="services-overlap-img">
      <img src="<?php echo e(asset('images/layanan.jpg')); ?>" alt="Tim PLN MCTN" draggable="false">
    </div>

    <div class="services-cards-viewport">
      <div class="swiper serviceSwiper">
        <div class="swiper-wrapper" id="serviceWrapperHome"></div>
      </div>
    </div>
  </div>

  <div class="services-overlap-nav">
    <button class="service-nav-btn" id="servicePrevHome"><i class="bi bi-arrow-left"></i></button>
    <button class="service-nav-btn" id="serviceNextHome"><i class="bi bi-arrow-right"></i></button>
  </div>
</section>


<section class="py-5" style="overflow:hidden;">
  <div class="container text-center mb-5">
    <div class="section-tag mb-2">Kepercayaan Mereka</div>
    <h2 class="section-title">Klien Kami</h2>
  </div>

  <div class="client-marquee">
    <div class="client-track">
      <?php
  $clients = [
    'Bahtera.jpg',
    'Energi Mega.jpg',
    'Pertamina ep.jpg',
    'Logo Antam.jpg',
    'Logo RS Pelita.jpg',
    'PTPN.jpg',
    'SMART.jpg',
    'PERTAMINA HR.JPG',
    'logo Chevron.jpg',
    'LOGO Medco Energi.jpg',
    'HARBERT.jpg'
  ];
?>

<?php $__currentLoopData = array_merge($clients, $clients); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="client-logo">
    <img src="<?php echo e(asset('images/'.$c)); ?>" alt="Client">
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <div class="container">
  <hr style="border-top: 2px solid #000000; margin: 40px 0;">
</div>
</section>


<section class="py-5 my-2">
  <div class="container">
    <div class="d-flex align-items-end justify-content-between mb-5 flex-wrap gap-3">
      <div>
        <div class="section-tag mb-2">Infrastruktur </div>
        <h2 class="section-title mb-0"> Proyek Kami </h2>
      </div>
    </div>

    <div class="row g-4 align-items-start fac-reveal">

      
      <div class="col-md-6 fac-from-left">
        <div class="position-relative" id="heroVideoWrapper">
          <video id="heroVideo" class="w-100 rounded-3" controls controlsList="nodownload">
            <source src="<?php echo e(asset('video/PLNxTNI-.mp4')); ?>" type="video/mp4">
          </video>
          
        </div>
        <div class="mt-2">
          <h5>North Duri Cogeneration Plant</h5>
          <p>Gas Turbine</p>
        </div>

        <hr style="border-top: 3px solid #000000; margin: 24px 0;">

        <div class="position-relative" id="heroVideoWrapper2">
          <video id="heroVideo2" class="w-100 rounded-3" controls controlsList="nodownload">
            <source src="<?php echo e(asset('video/OPS FINAL-.mp4')); ?>" type="video/mp4">
          </video>
          
        </div>
        <div class="mt-2">
          <h5>Gardu Induk &amp; Transmisi</h5>
          <p>SUUT / SKTT / SUTM / SKTM</p>
        </div>
      </div>

      
      <div class="col-md-6 fac-from-right">
        <div class="news-card">
          <div class="news-meta mb-2">
            <i class="bi bi-person-circle"></i> by <strong>PLN MCTN</strong>
            <span class="news-tag">Fasilitas</span>
          </div>
          <h6 class="fw-bold mb-2">Andalan Energi untuk Blok Rokan Sejak Dua Dekade</h6>
          <p class="text-muted small mb-2">
            Pembangkit North Duri Cogeneration telah beroperasi lebih dari 20 tahun, kini dioperasikan
            PLN MCTN dengan kapasitas hingga 300 MW untuk mendukung kebutuhan energi Wilayah Kerja Rokan.
          </p>
          <a href="<?php echo e(route('artikel.andalan-energi')); ?>" class="news-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="news-card">
          <div class="news-meta mb-2">
            <i class="bi bi-person-circle"></i> by <strong>PLN MCTN</strong>
            <span class="news-tag">Operasional</span>
          </div>
          <h6 class="fw-bold mb-2">Penopang Utama Produksi Minyak Berat Rokan</h6>
          <p class="text-muted small mb-2">
            Metode thermal oil recovery yang digunakan untuk produksi minyak berat di Rokan membutuhkan
            pasokan energi besar secara terus-menerus, menjadikan keandalan pembangkit ini sangat krusial.
          </p>
          <a href="<?php echo e(route('artikel.penopang-produksi')); ?>" class="news-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="news-card">
          <div class="news-meta mb-2">
            <i class="bi bi-person-circle"></i> by <strong>PLN MCTN</strong>
            <span class="news-tag">Layanan</span>
          </div>
          <h6 class="fw-bold mb-2">Listrik dan Uap Industri Terintegrasi</h6>
          <p class="text-muted small mb-2">
            Selain menyuplai listrik, pembangkit ini juga menyediakan uap industri terintegrasi yang
            mendukung kelancaran proses eksplorasi dan produksi migas di kawasan tersebut.
          </p>
          <a href="<?php echo e(route('artikel.listrik-uap')); ?>" class="news-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>
 
<section class="k3l-section">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-tag mb-2">Keselamatan Adalah Prioritas</div>
      <h2 class="section-title">Komitmen K3L &amp; Zero Accident</h2>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="k3l-card k3l-teal h-100 reveal">
          <div class="k3l-icon"><i class="bi bi-award"></i></div>
          <div class="k3l-num">85,54%</div>
          <p class="k3l-title">Skor Audit SMK3 2024</p>
          <p class="k3l-text">Kategori Tingkat Lanjutan dengan penilaian Memuaskan, diaudit oleh lembaga independen atas 166 kriteria.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="k3l-card k3l-amber h-100 reveal" style="transition-delay:.15s">
          <div class="k3l-icon"><i class="bi bi-shield-check"></i></div>
          <div class="k3l-num">Zero</div>
          <p class="k3l-title">Budaya Nihil Kecelakaan</p>
          <p class="k3l-text">Diterapkan konsisten di seluruh area pembangkit, baik bagi pekerja internal maupun vendor.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="k3l-card k3l-teal h-100 reveal" style="transition-delay:.3s">
          <div class="k3l-icon"><i class="bi bi-people"></i></div>
          <div class="k3l-num">HES</div>
          <p class="k3l-title">Health Environment Safety Meeting</p>
          <p class="k3l-text">Forum komunikasi internal bulanan yang mendukung budaya keselamatan kerja.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="join-cta-section reveal">
  <div class="join-cta-pattern"></div>
  <svg class="join-cta-curve" viewBox="0 0 1400 300" preserveAspectRatio="none">
    <path d="M-50,150 C300,50 700,250 1450,100" stroke="rgba(0,0,0,.15)" stroke-width="2" stroke-dasharray="6,6" fill="none"/>
  </svg>
<svg class="join-cta-icon icon-chart" viewBox="0 0 100 80" xmlns="http://www.w3.org/2000/svg">
  <rect x="5"  y="45" width="10" height="30" fill="rgba(60,40,25,.35)"/>
  <rect x="20" y="35" width="10" height="40" fill="rgba(60,40,25,.35)"/>
  <rect x="35" y="20" width="10" height="55" fill="rgba(60,40,25,.35)"/>
  <path d="M5,40 L35,15 L60,25 L90,5" stroke="rgba(60,40,25,.5)" stroke-width="2" fill="none"/>
  <path d="M78,5 L90,5 L90,17" stroke="rgba(60,40,25,.5)" stroke-width="2" fill="none"/>
</svg>

<svg class="join-cta-icon icon-percent" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
  <circle cx="50" cy="50" r="40" stroke="rgba(60,40,25,.35)" stroke-width="2" fill="none"/>
  <path d="M50,10 A40,40 0 0,1 82,32" stroke="rgba(60,40,25,.6)" stroke-width="3" fill="none"/>
  <path d="M76,24 L84,30 L80,20" fill="rgba(60,40,25,.6)"/>
  <text x="50" y="57" text-anchor="middle" font-size="18" fill="rgba(60,40,25,.7)" font-family="sans-serif" font-weight="bold">15%</text>
</svg>
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-8">
        <h2 class="fw-bold mb-0 join-cta-title">
          Selalu Berusaha Menjadi yang Terbaik untuk Indonesia
        </h2>
      </div>
      <div class="col-lg-4 text-lg-end text-start">
        <a href="#" class="btn rounded-pill px-4 py-3 fw-bold join-cta-btn">
          AYO BERGABUNG DENGAN KAMI <i class="bi bi-arrow-right-circle ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
function animateCount(el) {
  const target = parseFloat(el.getAttribute('data-target'));
  const suffix = el.getAttribute('data-suffix') || '';
  const isDecimal = el.getAttribute('data-decimal') === 'true';
  const duration = 1800;
  const startTime = performance.now();

  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    const currentValue = eased * target;
    el.textContent = (isDecimal ? currentValue.toFixed(2).replace('.', ',') : Math.floor(currentValue)) + suffix;

    if (progress < 1) {
      requestAnimationFrame(update);
    } else {
      el.textContent = (isDecimal ? target.toFixed(2).replace('.', ',') : target) + suffix;
    }
  }

  requestAnimationFrame(update);
}

   const statNumbers = document.querySelectorAll('.stat-v2-num');

const statObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateCount(entry.target);
      statObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

statNumbers.forEach(el => statObserver.observe(el));
</script>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dotsContainer = document.getElementById('sliderDots');

slides.forEach((_, i) => {
  const dot = document.createElement('div');
  dot.classList.add('slider-dot');
  if (i === 0) dot.classList.add('active');
  dot.onclick = () => goToSlide(i);
  dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.slider-dot');

function showSlide(index) {
  slides.forEach(s => s.classList.remove('active'));
  dots.forEach(d => d.classList.remove('active'));
  void slides[index].offsetWidth;
  slides[index].classList.add('active');
  dots[index].classList.add('active');
  currentSlide = index;
}

function changeSlide(direction) {
  let newIndex = (currentSlide + direction + slides.length) % slides.length;
  showSlide(newIndex);
}

function goToSlide(index) {
  showSlide(index);
}

setInterval(() => changeSlide(1), 5000);
const heroSliderEl = document.getElementById('heroSlider');
  heroSliderEl.addEventListener('touchstart', () => {
    heroSliderEl.classList.add('touched');
  });
</script>

<script>
const serviceDataHome = {
  fast:  { tag:'FAST',  bar:'#a700fa', title:'FAST',  desc:'Enterprise Interconnection Extra Facility Solutions. Gardu Induk, IML, Freq Converter, dan saluran transmisi & distribusi.' },
  poqs:  { tag:'POQs',  bar:'#e0472e', title:'POQs',  desc:'Enterprise Power Quality Solutions. Peralatan power quality, voltage quality, dan watt/var compensator.' },
  utis:  { tag:'UTIS',  bar:'#14a2ba', title:'UTIS',  desc:'Enterprise Utility Solutions. Unit Gardu Spesial, Trafo, Genset, dan Capacitor Banks.' },
  steam: { tag:'STEAM', bar:'#f5a623', title:'STEAM', desc:'Enterprise Steam Solutions. Produksi dan distribusi uap dengan Gas Turbine Cogeneration.' },
  gres:  { tag:'GRES',  bar:'#2e9e5b', title:'GRES',  desc:'Enterprise Green & Renewable Energy Solutions. Solusi energi hijau mendukung Net Zero Emission.' }
};

const wrapperHome = document.getElementById('serviceWrapperHome');
wrapperHome.innerHTML = Object.keys(serviceDataHome).map(key => {
  const d = serviceDataHome[key];
  return `
    <div class="swiper-slide" data-service="${key}">
      <span class="service-float-bar" style="background:${d.bar};"></span>
      <h3>${d.title}</h3>
      <p>${d.desc}</p>
      <button class="service-float-arrow"><i class="bi bi-arrow-up-right"></i></button>
    </div>
  `;
}).join('');

const serviceSwiperHome = new Swiper('.serviceSwiper', {
  slidesPerView: 'auto',
  spaceBetween: 24,
  loop: true,
  loopedSlides: 6,
  watchOverflow: false,
  grabCursor: true,
  navigation: {
    nextEl: '#serviceNextHome',
    prevEl: '#servicePrevHome',
  },
  observer: true,
  observeParents: true,
});

serviceSwiperHome.update();
serviceSwiperHome.navigation.update();
window.addEventListener('load', () => serviceSwiperHome.update());

// klik panah pada kartu aktif -> pindah ke halaman Layanan
wrapperHome.addEventListener('click', (e) => {
  const btn = e.target.closest('.service-float-arrow');
  if (!btn) return;
  const slide = btn.closest('.swiper-slide');
  if (slide.classList.contains('swiper-slide-active')) {
    window.location.href = "<?php echo e(route('services')); ?>";
  }
});
</script>

<script>
const servicesWrapHome = document.querySelector('.services-overlap-wrap');
if (servicesWrapHome) {
  const wrapObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        servicesWrapHome.classList.add('in-view');
        wrapObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });
  wrapObserver.observe(servicesWrapHome);
}
</script>

<script>
const facReveal = document.querySelector('.fac-reveal');
if (facReveal) {
  const facObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        facReveal.classList.add('in-view');
        facObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  facObserver.observe(facReveal);
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/home.blade.php ENDPATH**/ ?>