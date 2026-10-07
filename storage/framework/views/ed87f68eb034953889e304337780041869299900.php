<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — PLN MCTN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Inter',sans-serif; background: linear-gradient(135deg,#061428,#0A3D7A); min-height:100vh; display:flex; align-items:center; }
        h1,h2,h3,h4,h5 { font-family:'Sora',sans-serif; }
        .login-card { background:#fff; border-radius:14px; max-width:400px; width:100%; margin:auto; padding:2.25rem; }
        .brand-mark { width:44px;height:44px;background:linear-gradient(135deg,#1C6FD8,#0A3D7A);border-radius:10px;display:flex;align-items:center;justify-content:center;color:#FFC857;font-size:1.3rem; }
        .btn-amber { background:#F2A00E;color:#061428;border:none;font-weight:700; }
        .btn-amber:hover { background:#FFC857;color:#061428; }
    </style>
</head>
<body>
  <div class="login-card">
    <div class="d-flex align-items-center gap-2 mb-4">
      <div class="brand-mark"><i class="bi bi-lightning-charge-fill"></i></div>
      <div>
        <div class="fw-bold">PLN MCTN</div>
        <div class="text-muted small">Panel Admin</div>
      </div>
    </div>

    <?php if(session('error')): ?>
      <div class="alert alert-danger py-2 small"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
    <?php if(session('success')): ?>
      <div class="alert alert-success py-2 small"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
      <div class="alert alert-danger py-2 small">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div><?php echo e($error); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label class="form-label small fw-semibold">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" required autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label small fw-semibold">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="form-check mb-3">
        <input type="checkbox" name="remember" class="form-check-input" id="remember">
        <label class="form-check-label small" for="remember">Ingat saya</label>
      </div>
      <button type="submit" class="btn btn-amber w-100">Masuk</button>
    </form>

    <div class="text-center mt-4">
      <a href="<?php echo e(route('home')); ?>" class="text-muted small text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Kembali ke Website</a>
    </div>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Mctn\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>