<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'PLN MCTN — Energi Andal untuk Blok Rokan'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" rel="stylesheet">
    <style>

     
.btn-seek i {
  font-size: 1.1rem;
}
.btn-seek:hover {
  background: rgba(0,0,0,0.8);
}
        :root {
  --navy-deep: #061428;
  --navy: #0A3D7A;
  --navy-light: #1C6FD8;
  --amber: #F2A00E;
  --amber-light: #FFC857;
  --mist: #F1F5F9;
  --dark: #0E1420;
  --line: #e6eaef;
  --brand-gradient: linear-gradient(135deg, rgba(20,162,186,.30), rgba(9,73,84,.83));
}
        * { box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; color: #2a2f38; background: #fff; }
        h1, h2, h3, h4, h5 { font-family: 'Sora', sans-serif; }
        .section-tag { font-size: .78rem; font-weight: 600; letter-spacing: .06em; color: var(--navy-light); }
        .section-title { font-size: 2.1rem; font-weight: 700; color: var(--dark); line-height: 1.25; }
        @media (max-width: 768px) { .section-title { font-size: 1.6rem; } }

        /* NAVBAR */
        .navbar-main { background: linear-gradient(135deg, rgba(20,162,186,.50), rgba(1,192,225,.83)); backdrop-filter: blur(10px); padding: .8rem 0; position: sticky; top: 0; z-index: 999; border-bottom: 1px solid rgba(255,255,255,.08); }
        .brand-mark { width: 40px; height: 40px; background: linear-gradient(135deg, var(--navy-light), var(--navy)); border-radius: 9px; display: flex; align-items: center; justify-content: center; color: var(--amber-light); font-size: 1.15rem; flex-shrink: 0; }
        .brand-text { font-family: 'Sora', sans-serif; font-size: 1.05rem; color: #fff; font-weight: 700; letter-spacing: .02em; }
        .brand-sub { font-size: .62rem; color: rgba(255,255,255,.5); letter-spacing: .08em; text-transform: uppercase; display: block; }
        .nav-link-custom { font-size: .86rem; font-weight: 500; color: rgba(255,255,255,.75) !important; padding: .5rem 1rem !important; position: relative; transition: color .2s; }
        .nav-link-custom:hover, .nav-link-custom.active { color: #fff !important; }
        .nav-link-custom.active::after { content: ''; position: absolute; bottom: 0; left: 1rem; right: 1rem; height: 2px; background: var(--amber); border-radius: 2px; }
        .btn-nav-contact { background: var(--amber); color: var(--navy-deep); font-size: .82rem; font-weight: 700; padding: .5rem 1.2rem; border-radius: 6px; border: none; }
        .btn-nav-contact:hover { background: var(--amber-light); color: var(--navy-deep); }

        /* DROPDOWN "PENGADAAN" */
        .nav-item.dropdown .dropdown-toggle::after { vertical-align: .1em; }
        .dropdown-menu-custom { background: var(--navy-deep); border: 1px solid rgba(255,255,255,.08); border-radius: 8px; padding: .4rem; min-width: 260px; }
        .dropdown-menu-custom .dropdown-item { color: rgba(255,255,255,.75); font-size: .85rem; padding: .55rem .9rem; border-radius: 6px; }
        .dropdown-menu-custom .dropdown-item:hover, .dropdown-menu-custom .dropdown-item.active { background: rgba(255,255,255,.08); color: #fff; }

        /* PAGE HERO (halaman selain beranda) */
        .page-hero { background: rgba(20,162,186,.65); ... }

        /* BUTTONS */
        .btn-amber { background: var(--amber); color: var(--navy-deep); border: none; font-weight: 700; }
        .btn-amber:hover { background: var(--amber-light); color: var(--navy-deep); }
        .btn-outline-light-custom { border: 1.5px solid rgba(255,255,255,.45); color: #fff; background: transparent; font-weight: 500; }
        .btn-outline-light-custom:hover { border-color: #fff; background: rgba(255,255,255,.08); color: #fff; }
        .btn-outline-navy { border: 1.5px solid var(--navy); color: var(--navy); background: transparent; font-weight: 600; }
        .btn-outline-navy:hover { background: var(--navy); color: #fff; }

        /* CARDS */
        .svc-card { border-radius: 12px; overflow: hidden; background: #fff; border: 1px solid var(--line); transition: transform .25s, box-shadow .25s; height: 100%; }
        .svc-card:hover { transform: translateY(-5px); box-shadow: 0 16px 34px rgba(10,61,122,.12); }
        .svc-icon { width: 52px; height: 52px; background: linear-gradient(135deg, var(--navy), var(--navy-light)); border-radius: 11px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.35rem; }
        .svc-num { font-family: 'Sora', sans-serif; font-size: .75rem; font-weight: 700; color: var(--amber); letter-spacing: .05em; }

        /* FOOTER */
        footer { background: rgba(20,162,186,.80); color: #fff; }
        footer a { color: rgba(255,255,255,.6); text-decoration: none; transition: color .2s; }
        footer a:hover { color: var(--amber-light); }
        .footer-divider { border-color: rgba(255,255,255,.1); }
        .social-circle { width: 36px; height: 36px; background: rgba(255,255,255,.08); }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="<?php echo e(request()->routeIs('home') ? 'is-home' : ''); ?>">

 
  <div id="pageLoader" class="page-loader">
    <div class="loader-ball-track">
      <div class="loader-ball"></div>
    </div>
    <span class="loader-text">PLN MCTN</span>
  </div>


<nav class="navbar-main">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between w-100">
     <a class="d-flex align-items-center gap-2 text-decoration-none" href="<?php echo e(route('home')); ?>">
    <img src="<?php echo e(asset('images/LOGO2.jpg')); ?>" alt="Logo PLN MCTN" style="height:48px;width:auto;object-fit:contain;">
</a>

      <ul class="navbar-nav flex-row d-none d-lg-flex align-items-center gap-1 mb-0">
        <li><a class="nav-link-custom <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Beranda</a></li>
        <li><a class="nav-link-custom <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">Tentang Kami</a></li>
        <li><a class="nav-link-custom <?php echo e(request()->routeIs('services') ? 'active' : ''); ?>" href="<?php echo e(route('services')); ?>">Layanan</a></li>
        <li><a class="nav-link-custom <?php echo e(request()->routeIs('facilities') ? 'active' : ''); ?>" href="<?php echo e(route('facilities')); ?>">Fasilitas</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link-custom dropdown-toggle <?php echo e(request()->routeIs('pengadaan.*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pengadaan</a>
          <ul class="dropdown-menu dropdown-menu-custom">
            <?php $__currentLoopData = \App\Models\Procurement::categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a class="dropdown-item <?php echo e(request()->routeIs('pengadaan.*') && request()->route('category') === $slug ? 'active' : ''); ?>" href="<?php echo e(route('pengadaan.index', $slug)); ?>"><?php echo e($label); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
        <li><a class="nav-link-custom <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Kontak</a></li>
      </ul>

      <div class="d-none d-lg-block">
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-nav-contact">Hubungi Kami</a>
      </div>

      <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav">
        <i class="bi bi-list fs-3 text-white"></i>
      </button>
    </div>

    <div class="collapse navbar-collapse d-lg-none" id="mobileNav">
      <ul class="navbar-nav pt-3 pb-2 gap-1">
        <li><a class="nav-link text-white-50" href="<?php echo e(route('home')); ?>">Beranda</a></li>
        <li><a class="nav-link text-white-50" href="<?php echo e(route('about')); ?>">Tentang Kami</a></li>
        <li><a class="nav-link text-white-50" href="<?php echo e(route('services')); ?>">Layanan</a></li>
        <li><a class="nav-link text-white-50" href="<?php echo e(route('facilities')); ?>">Fasilitas</a></li>
        <li>
          <a class="nav-link text-white-50 d-flex justify-content-between align-items-center" href="#pengadaanMobile" data-bs-toggle="collapse" role="button" aria-expanded="false">
            Pengadaan <i class="bi bi-chevron-down small"></i>
          </a>
          <div class="collapse ps-3" id="pengadaanMobile">
            <?php $__currentLoopData = \App\Models\Procurement::categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="nav-link text-white-50 py-1" style="font-size:.9rem;" href="<?php echo e(route('pengadaan.index', $slug)); ?>"><?php echo e($label); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </li>
        <li><a class="nav-link text-white-50" href="<?php echo e(route('contact')); ?>">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<main><?php echo $__env->yieldContent('content'); ?></main>


<footer class="pt-5 pb-4">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-3">
         <img src="<?php echo e(asset('images/logo-pln.jpg')); ?>" alt="Logo PLN MCTN" class="brand-mark" style="object-fit:contain;padding:4px;background:#fff;">
          <div>
            <div style="font-family:'Sora',sans-serif;font-size:1.05rem;font-weight:700;">PT PLN MCTN</div>
            <div style="font-size:.68rem;color:rgba(255,255,255,.5);letter-spacing:.06em;">MANDAU CIPTA TENAGA NUSANTARA</div>
          </div>
        </div>
        <p style="color:rgba(255,255,255,.6);font-size:.875rem;line-height:1.75;">Anak perusahaan PT PLN (Persero) yang memasok listrik dan uap bagi eksplorasi migas Wilayah Kerja Rokan sejak 1998, dengan Gas Turbine Cogeneration North Duri berkapasitas 280 MW.</p>
        <div class="d-flex gap-2 mt-3">
          <a href="https://www.instagram.com/pt.mctn/" class="d-flex align-items-center justify-content-center rounded-circle social-circle"><i class="bi bi-instagram"></i></a>
          <a href="https://www.youtube.com/@PT.MandauCiptaTenagaNusantara" class="d-flex align-items-center justify-content-center rounded-circle social-circle"><i class="bi bi-youtube"></i></a>
          <a href="https://id.linkedin.com/company/pt-mctn" class="d-flex align-items-center justify-content-center rounded-circle social-circle"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-6">
        <div style="font-size:.72rem;font-weight:600;letter-spacing:.08em;color:rgba(255,255,255,.4);text-transform:uppercase;margin-bottom:1rem;">Navigasi</div>
        <ul class="list-unstyled" style="font-size:.875rem;">
          <li class="mb-2"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
          <li class="mb-2"><a href="<?php echo e(route('about')); ?>">Tentang Kami</a></li>
          <li class="mb-2"><a href="<?php echo e(route('services')); ?>">Layanan</a></li>
          <li class="mb-2"><a href="<?php echo e(route('facilities')); ?>">Fasilitas</a></li>
          <li class="mb-2"><a href="<?php echo e(route('pengadaan.index', 'lelang')); ?>">Pengadaan</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-6">
        <div style="font-size:.72rem;font-weight:600;letter-spacing:.08em;color:rgba(255,255,255,.4);text-transform:uppercase;margin-bottom:1rem;">Layanan</div>
        <ul class="list-unstyled" style="font-size:.875rem;">
          <li class="mb-2"><a href="<?php echo e(route('services')); ?>">Power Generation</a></li>
          <li class="mb-2"><a href="<?php echo e(route('services')); ?>">Steam Generation</a></li>
          <li class="mb-2"><a href="<?php echo e(route('services')); ?>">Power Quality (E-UTIS)</a></li>
          <li class="mb-2"><a href="<?php echo e(route('services')); ?>">E-Steam</a></li>
          <li class="mb-2"><a href="<?php echo e(route('services')); ?>">Operasi &amp; Pemeliharaan</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <div style="font-size:.72rem;font-weight:600;letter-spacing:.08em;color:rgba(255,255,255,.4);text-transform:uppercase;margin-bottom:1rem;">Kontak</div>
        <ul class="list-unstyled" style="font-size:.875rem;color:rgba(255,255,255,.6);">
          <li class="mb-2 d-flex gap-2"><i class="bi bi-geo-alt" style="color:var(--amber-light);margin-top:2px;flex-shrink:0;"></i> Plaza Simatupang, Lt. 7 &amp; 9, Jl. TB Simatupang Raya, Kby. Lama, Jakarta Selatan 12310</li>
          <li class="mb-2 d-flex gap-2"><i class="bi bi-telephone" style="color:var(--amber-light);flex-shrink:0;"></i> +62 811-1300-821</li>
          <li class="mb-2 d-flex gap-2"><i class="bi bi-envelope" style="color:var(--amber-light);flex-shrink:0;"></i> info@mctn.co.id</li>
        </ul>
      </div>
    </div>
    <hr class="footer-divider mt-4 mb-3">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2" style="font-size:.8rem;color:rgba(255,255,255,.4);">
      <span>© <?php echo e(date('Y')); ?> PT PLN Mandau Cipta Tenaga Nusantara. All rights reserved.</span>
      <span>Anak Perusahaan PT PLN (Persero)</span>
    </div>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
  <?php echo $__env->yieldContent('scripts'); ?>
   <script>
   document.addEventListener('DOMContentLoaded', function () {
       const reveals = document.querySelectorAll('.reveal');

       const observer = new IntersectionObserver((entries) => {
           entries.forEach(entry => {
               if (entry.isIntersecting) {
                   entry.target.classList.add('show');
                   observer.unobserve(entry.target);
               }
           });
       }, { threshold: 0.15 });

       reveals.forEach(el => observer.observe(el));
   });
   </script>

   <script>
document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar-main');

    function checkScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    checkScroll(); // cek posisi awal saat halaman dimuat
    window.addEventListener('scroll', checkScroll);
});
</script>
<script>
  const pageLoader = document.getElementById('pageLoader');

  // Sembunyikan loader setelah halaman selesai dimuat
  window.addEventListener('load', () => {
    setTimeout(() => {
      pageLoader.classList.add('hide');
    }, 300); // sedikit delay biar animasi tidak terlalu instan/kedip
  });

  // Munculkan loader lagi saat user klik link internal (sebelum pindah halaman)
  document.addEventListener('click', (e) => {
    const link = e.target.closest('a');
    if (
      link &&
      link.href &&
      link.href.startsWith(window.location.origin) &&   // hanya link internal
      !link.href.includes('#') &&                          // bukan anchor link
      link.target !== '_blank'                             // bukan buka tab baru
    ) {
      pageLoader.classList.remove('hide');
    }
  });

  // Kalau user tekan tombol back/forward browser, loader tetap muncul sebentar
  window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
      pageLoader.classList.add('hide');
    }
  });
</script>
</body>
</html><?php /**PATH D:\XAMPP17\htdocs\Mctn\resources\views/layouts/app.blade.php ENDPATH**/ ?>