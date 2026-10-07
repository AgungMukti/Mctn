<?php $__env->startSection('title', 'Kontak — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<link href="https://fonts.googleapis.com/css2?family=Newsreader:opsz,wght@6..72,600&display=swap" rel="stylesheet">

<section class="kt3-page">
  <div class="kt3-wrap">

    <h1 class="kt3-title">PT PLN Mandau Cipta Tenaga Nusantara</h1>

    <div class="kt3-info">
      <div class="kt3-col">
        <small>Alamat</small>
        <p>Plaza Simatupang, Lantai 7 &amp; 9, Jl. Tahi Bonar Simatupang Raya, Kby. Lama, Jakarta Selatan 12310</p>
      </div>
      <div class="kt3-col">
        <small>Telepon</small>
        <p>+62 811-1300-821</p>
      </div>
      <div class="kt3-col">
        <small>Email</small>
        <p>info@mctn.co.id</p>
      </div>
    </div>

    <div class="kt3-grid">

      <div>
        <?php if(session('success')): ?>
          <div class="kt3-alert" role="alert">
            <i class="bi bi-check-circle-fill"></i> <?php echo e(session('success')); ?>

          </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('contact.send')); ?>">
          <?php echo csrf_field(); ?>

          <div class="kt3-row">
            <div class="kt3-f">
              <label for="name">Nama</label>
              <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama lengkap Anda">
              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="kt3-err"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="kt3-f">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="nama@perusahaan.com">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="kt3-err"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>

          <div class="kt3-f">
            <label for="company">Perusahaan (opsional)</label>
            <input type="text" id="company" name="company" value="<?php echo e(old('company')); ?>" class="<?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama perusahaan Anda">
            <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="kt3-err"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="kt3-f">
            <label for="message">Pesan</label>
            <textarea id="message" name="message" rows="5" class="<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Ceritakan kebutuhan energi atau uap industri Anda"><?php echo e(old('message')); ?></textarea>
            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="kt3-err"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <button type="submit" class="kt3-btn">Kirim Pesan</button>
          <span class="kt3-bar"></span>
        </form>
      </div>

      
      <div class="kt3-map">
        <iframe
          src="https://www.google.com/maps?q=Plaza+Simatupang,+Jl.+Tahi+Bonar+Simatupang+Raya,+Jakarta+Selatan+12310&z=17&output=embed"
          allowfullscreen loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Lokasi PT PLN Mandau Cipta Tenaga Nusantara"></iframe>
      </div>

    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mctn\resources\views/contact.blade.php ENDPATH**/ ?>