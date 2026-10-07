<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin'); ?> — PLN MCTN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            /* warna Figma */
            --sky: #99DBE6;
            --teal: #14A2BA;
            --teal-dark: #0E7C8A;
            --teal-deep: #0B4A57;
            --yellow: #E8C606;
            --ink: #1F2937;

            /* nama lama, tetap dipakai halaman admin lain */
            --navy-deep: #0B2E36;
            --navy: #0B4A57;
            --navy-light: #14A2BA;
            --amber: #E8C606;
            --amber-light: #F2D84A;
            --mist: #F4F8FA;
            --line: #E2E8F0;
        }
        body { font-family: 'Inter', sans-serif; background: var(--mist); color: var(--ink); }
        h1,h2,h3,h4,h5,h6 { font-family: 'Sora', sans-serif; }

        /* ===== Navigasi atas ===== */
        .adm-nav {
            background: linear-gradient(90deg, var(--sky) 0%, var(--teal) 55%, var(--teal-dark) 100%);
            color: #0B2E36;
            display: flex; align-items: center; gap: 6px; flex-wrap: wrap;
            padding: 0 28px; min-height: 68px;
        }
        .adm-brand { display: flex; align-items: center; gap: 12px; margin-right: 24px; text-decoration: none; color: inherit; }
        .adm-logo { height: 40px; width: auto; display: block; }
        .adm-brand b { font-family: 'Sora', sans-serif; font-size: 16px; line-height: 1.1; display: block; }
        .adm-brand small { display: block; font-size: 10px; letter-spacing: .12em; font-weight: 500; text-transform: uppercase; }
        .adm-link { padding: 10px 14px; border-radius: 8px; font-size: 14px; color: inherit; text-decoration: none; font-weight: 500; }
        .adm-link:hover { background: rgba(255,255,255,.35); color: inherit; }
        .adm-link.active { background: #fff; color: var(--teal-dark); font-weight: 700; }
        .adm-spacer { flex: 1; }
        .adm-user { font-size: 14px; margin-right: 10px; }
        .adm-logout { border: 1px solid #0B2E36; background: transparent; color: #0B2E36; border-radius: 8px; padding: 8px 16px; font-size: 13px; }
        .adm-logout:hover { background: #fff; }

        /* ===== Konten ===== */
        .adm-wrap { max-width: 1280px; margin: 0 auto; padding: 28px 28px 48px; }
        .adm-title { font-size: 24px; font-weight: 800; margin: 0 0 20px; }

        /* ===== Kartu statistik ===== */
        .adm-stats { display: grid; grid-template-columns: repeat(5, 1fr); gap: 14px; margin-bottom: 24px; }
        .adm-card { border-radius: 14px; padding: 18px; display: flex; flex-direction: column; min-height: 150px; }
        .adm-card span { font-size: 14px; line-height: 1.35; }
        .adm-card strong { font-family: 'Sora', sans-serif; font-size: 36px; line-height: 1; margin: 10px 0 12px; }
        .adm-card a { margin-top: auto; font-size: 14px; font-weight: 700; color: inherit; text-decoration: none; }
        .adm-card a:hover { text-decoration: underline; }
        .adm-card.c1 { background: var(--teal-dark); color: #fff; }
        .adm-card.c2 { background: var(--sky); color: #0B2E36; }
        .adm-card.c3 { background: var(--yellow); color: var(--ink); }
        .adm-card.c4 { background: var(--teal); color: #0B2E36; }
        .adm-card.c5 { background: var(--teal-deep); color: #fff; }

        /* ===== Panel & tabel ===== */
        .adm-panel { background: #fff; border-radius: 14px; padding: 22px 24px; box-shadow: 0 1px 3px rgba(0,0,0,.06); }
        .adm-panel-head { display: flex; justify-content: space-between; align-items: center; gap: 12px; flex-wrap: wrap; margin-bottom: 14px; }
        .adm-panel-head h2 { margin: 0; font-size: 18px; font-weight: 800; }
        .adm-btn { background: var(--yellow); color: var(--ink); border: 0; border-radius: 8px; padding: 10px 18px; font-size: 14px; font-weight: 700; text-decoration: none; display: inline-block; }
        .adm-btn:hover { filter: brightness(.95); color: var(--ink); }
        .adm-table { width: 100%; border-collapse: collapse; font-size: 14px; }
        .adm-table th { text-align: left; font-size: 11px; letter-spacing: .08em; color: #64748B; padding: 10px 8px; }
        .adm-table td { padding: 14px 8px; border-top: 1px solid var(--line); vertical-align: middle; }
        .adm-chip { background: #E6F5F8; border-radius: 6px; padding: 4px 10px; font-size: 12px; font-weight: 600; white-space: nowrap; }
        .adm-status { background: var(--teal-dark); color: #fff; border-radius: 6px; padding: 4px 10px; font-size: 12px; font-weight: 700; }
        .adm-status--draft { background: #64748B; }
        .adm-edit { border: 1px solid #CBD5E1; background: #fff; color: var(--ink); border-radius: 6px; padding: 6px 14px; font-size: 13px; text-decoration: none; }
        .adm-edit:hover { background: #F1F5F9; color: var(--ink); }

        /* ===== Kompatibel dengan halaman admin lain ===== */
        .btn-amber { background: var(--amber); color: var(--navy-deep); border: none; font-weight: 700; }
        .btn-amber:hover { background: var(--amber-light); color: var(--navy-deep); }
        .card-admin { background: #fff; border: 1px solid var(--line); border-radius: 14px; }
        table.table thead th { font-size: .72rem; text-transform: uppercase; letter-spacing: .05em; color: #6b7280; border-bottom-width: 1px; }
        .alert-success { background: #E6F5F8; border-color: #B5E0E8; color: #0B4A57; }

        /* ===== Responsif ===== */
        @media (max-width: 1100px) { .adm-stats { grid-template-columns: repeat(3, 1fr); } }
        @media (max-width: 700px) {
            .adm-stats { grid-template-columns: repeat(2, 1fr); }
            .adm-nav { padding: 10px 16px; }
            .adm-wrap { padding: 20px 16px 40px; }
        }
    </style>
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>

<nav class="adm-nav">
  <a href="<?php echo e(route('admin.dashboard')); ?>" class="adm-brand">
    
    <img src="<?php echo e(asset('images/LOGO.P-.jpg')); ?>" alt="PLN MCTN" class="adm-logo" onerror="this.style.display='none'">
  </a>

  <a class="adm-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
  <a class="adm-link <?php echo e(request()->routeIs('admin.pengadaan.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.pengadaan.index')); ?>">Pengadaan</a>
  <a class="adm-link" href="<?php echo e(route('home')); ?>" target="_blank">Lihat Website</a>

  <span class="adm-spacer"></span>
  <span class="adm-user"><?php echo e(auth()->user()->name ?? ''); ?></span>
  <form method="POST" action="<?php echo e(route('admin.logout')); ?>" class="m-0">
    <?php echo csrf_field(); ?>
    <button class="adm-logout"><i class="bi bi-box-arrow-right me-1"></i> Keluar</button>
  </form>
</nav>

<main class="adm-wrap">
  <h1 class="adm-title"><?php echo $__env->yieldContent('page-title', 'Admin'); ?></h1>

  <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
  <?php endif; ?>
  <?php if(session('error')): ?>
    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
  <?php endif; ?>
  <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul class="mb-0">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php echo $__env->yieldContent('content'); ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
</body>
</html><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/admin/layout.blade.php ENDPATH**/ ?>