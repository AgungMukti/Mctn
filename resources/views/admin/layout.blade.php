<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — PLN MCTN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy-deep: #061428;
            --navy: #0A3D7A;
            --navy-light: #1C6FD8;
            --amber: #F2A00E;
            --amber-light: #FFC857;
            --mist: #F1F5F9;
            --line: #e6eaef;
        }
        body { font-family: 'Inter', sans-serif; background: var(--mist); }
        h1,h2,h3,h4,h5,h6 { font-family: 'Sora', sans-serif; }
        .admin-sidebar { background: #14a2ba; min-height: 100vh; width: 240px; flex-shrink: 0; }
        .admin-sidebar .brand { padding: 1.25rem 1.25rem .75rem; }
        .admin-sidebar .brand-text { color: #fff; font-weight: 700; font-size: 1rem; }
        .admin-sidebar .brand-sub { color: rgba(255,255,255,.45); font-size: .65rem; letter-spacing: .06em; text-transform: uppercase; }
        .admin-sidebar a.nav-link { color: rgba(255,255,255,.7); font-size: .88rem; padding: .65rem 1.25rem; border-left: 3px solid transparent; }
        .admin-sidebar a.nav-link:hover { color: #fff; background: rgba(255,255,255,.05); }
        .admin-sidebar a.nav-link.active { color: #fff; background: rgba(255,255,255,.08); border-left-color: var(--amber); font-weight: 600; }
        .admin-topbar { background: #fff; border-bottom: 1px solid var(--line); padding: .9rem 1.5rem; }
        .admin-content { padding: 1.75rem; flex: 1; min-width: 0; }
        .btn-amber { background: var(--amber); color: var(--navy-deep); border: none; font-weight: 700; }
        .btn-amber:hover { background: var(--amber-light); color: var(--navy-deep); }
        .card-admin { background: #fff; border: 1px solid var(--line); border-radius: 10px; }
        table.table thead th { font-size: .72rem; text-transform: uppercase; letter-spacing: .05em; color: #6b7280; border-bottom-width: 1px; }
    </style>
    @yield('styles')
</head>
<body>

<div class="d-flex">
  <aside class="admin-sidebar d-none d-lg-block">
    <div class="brand d-flex align-items-center gap-2">
      <div style="width:36px;height:36px;background:linear-gradient(135deg,var(--navy-light),var(--navy));border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--amber-light);"><i class="bi bi-lightning-charge-fill"></i></div>
      <div>
        <div class="brand-text">PLN MCTN</div>
        <div class="brand-sub">Admin Panel</div>
      </div>
    </div>
    <nav class="nav flex-column mt-3">
      <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
      <a class="nav-link {{ request()->routeIs('admin.pengadaan.*') ? 'active' : '' }}" href="{{ route('admin.pengadaan.index') }}"><i class="bi bi-file-earmark-text me-2"></i> Pengadaan</a>
      <a class="nav-link" href="{{ route('home') }}" target="_blank"><i class="bi bi-box-arrow-up-right me-2"></i> Lihat Website</a>
    </nav>
  </aside>

  <div class="flex-grow-1 d-flex flex-column" style="min-width:0;">
    <div class="admin-topbar d-flex justify-content-between align-items-center">
      <div class="fw-bold">@yield('page-title', 'Admin')</div>
      <div class="d-flex align-items-center gap-3">
        <span class="text-muted small">{{ auth()->user()->name ?? '' }}</span>
        <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
          @csrf
          <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-box-arrow-right me-1"></i> Keluar</button>
        </form>
      </div>
    </div>

    <div class="admin-content">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif
      @if($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @yield('content')
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {
    const reveals = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target); // muncul sekali saja, tidak berulang
            }
        });
    }, {
        threshold: 0.15 // muncul saat 15% elemen kelihatan di layar
    });

    reveals.forEach(el => observer.observe(el));
});
</script>
</body>
</html>
