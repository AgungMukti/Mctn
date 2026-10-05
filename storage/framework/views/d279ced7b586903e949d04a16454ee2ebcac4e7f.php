<?php $__env->startSection('title', 'Layanan — PLN MCTN'); ?>
<?php $__env->startSection('content'); ?>

<section class="services-hero-section">
  <div class="container">
    <h2 class="section-title mb-5">Solusi Energi Terintegrasi</h2>
    <div class="title-underline"></div>
  </div>

  <div class="container">
  <div class="services-overlap-wrap" id="servicesWrap">

    <div class="service-card-grid" id="serviceCardGrid">
      <div class="service-card" data-service="fast">
        <img src="<?php echo e(asset('images/fastt.jpg')); ?>" class="service-card-img" alt="FAST">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Interconnection Extra Facility Solutions</span>
          <h3 class="service-card-title">FAST</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="poqs">
        <img src="<?php echo e(asset('images/poqss.jpg')); ?>" class="service-card-img" alt="POQs">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Power Quality Solutions</span>
          <h3 class="service-card-title">POQs</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="utis">
        <img src="<?php echo e(asset('images/utiss.jpg')); ?>" class="service-card-img" alt="UTIS">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Utility Solutions</span>
          <h3 class="service-card-title">UTIS</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="steam">
        <img src="<?php echo e(asset('images/steamm.jpg')); ?>" class="service-card-img" alt="STEAM">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Steam Solutions</span>
          <h3 class="service-card-title">STEAM</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="gres">
        <img src="<?php echo e(asset('images/gress.jpg')); ?>" class="service-card-img" alt="GRES">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Green & Renewable Energy Solutions</span>
          <h3 class="service-card-title">GRES</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
    </div>

    <div class="services-cards-viewport">
      <div class="service-detail-panel" id="serviceModal">
        <button class="service-detail-close" id="serviceModalClose">
          <i class="bi bi-arrow-left"></i> <span>Kembali</span>
        </button>
        <div class="service-detail-tabs" id="serviceModalTabs"></div>

        <div class="service-detail-scroll">
          <div class="service-detail-img"><img id="modalImg" src="" alt=""></div>
          <div class="service-detail-body">
            <span class="section-tag mb-2" id="modalTag"></span>
            <h2 id="modalTitle"></h2>
            <p id="modalDesc" class="text-muted"></p>
            <h4 class="mt-4 mb-3">Hasil yang Telah Dikerjakan</h4>
            <div id="modalResults" class="service-modal-results"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center justify-content-around g-5 flex-wrap">
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo1.jpg')); ?>" alt="Pertamina" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo2.jpg')); ?>" alt="Danantara Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo6.jpg')); ?>" alt="PLN" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo4.jpg')); ?>" alt="SAP" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo5.jpg')); ?>" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center">
        <img src="<?php echo e(asset('images/partner/logo3.jpg')); ?>" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

const serviceData = {
  fast:  { tag:'FAST',  title:'FAST',  desc:'Enterprise Interconnection Extra Facility Solutions. Gardu Induk, IML, Freq Converter, dan saluran transmisi & distribusi.', img:'<?php echo e(asset("images/fast.jpg")); ?>', fullTitle:'Enterprise Interconnection Extra Facility Solutions', results:['Pemasangan Gardu Induk Blok Hulu Rokan','Instalasi Onshore Power Supply 4000 kVA','Pemeliharaan saluran transmisi & distribusi'] },
  poqs:  { tag:'POQs',  title:'POQs',  desc:'Enterprise Power Quality Solutions. Peralatan power quality, voltage quality, dan watt/var compensator.', img:'<?php echo e(asset("images/poqs.jpg")); ?>', fullTitle:'Enterprise Power Quality Solutions', results:['Instalasi sistem voltage quality','Pemasangan UPS backup daya kritikal','Optimalisasi power factor operasional'] },
  utis:  { tag:'UTIS',  title:'UTIS',  desc:'Enterprise Utility Solutions. Unit Gardu Spesial, Trafo, Genset, dan Capacitor Banks.', img:'<?php echo e(asset("images/utis.jpg")); ?>', fullTitle:'Enterprise Utility Solutions', results:['Pengoperasian Unit Gardu Spesial 24/7','Pemeliharaan trafo & genset cadangan','Manajemen capacitor banks'] },
  steam: { tag:'STEAM', title:'STEAM', desc:'Enterprise Steam Solutions. Produksi dan distribusi uap dengan Gas Turbine Cogeneration.', img:'<?php echo e(asset("images/steam.jpg")); ?>', fullTitle:'Enterprise Steam Solutions', results:['Produksi 46.850 Ton/hari uap eksplorasi Duri','Kontribusi 70% kebutuhan uap eksplorasi','Operasi Gas Turbine Cogeneration tanpa henti'] },
  gres:  { tag:'GRES',  title:'GRES',  desc:'Enterprise Green & Renewable Energy Solutions. Solusi energi hijau mendukung Net Zero Emission.', img:'<?php echo e(asset("images/gres.jpg")); ?>', fullTitle:'Enterprise Green & Renewable Energy Solutions', results:['Studi kelayakan energi terbarukan Blok Hulu Rokan','Inisiatif pengurangan emisi karbon operasional','Kolaborasi riset teknologi energi hijau'] }
};

const servicesWrap = document.getElementById('servicesWrap');
const modalImg = document.getElementById('modalImg');
const modalTag = document.getElementById('modalTag');
const modalTitle = document.getElementById('modalTitle');
const modalDesc = document.getElementById('modalDesc');
const modalResults = document.getElementById('modalResults');
const modalClose = document.getElementById('serviceModalClose');

function setActiveCard(key) {
  document.querySelectorAll('.service-card').forEach(card => {
    card.classList.toggle('active', card.dataset.service === key);
  });
}

function renderContent(key) {
  const data = serviceData[key];
  modalImg.src = data.img;
  modalTag.textContent = data.tag;
  modalTitle.textContent = data.fullTitle;
  modalDesc.textContent = data.desc;
  modalResults.innerHTML = data.results.map(r =>
    `<div class="service-modal-result-item"><i class="bi bi-check-circle-fill"></i><span>${r}</span></div>`
  ).join('');

  document.querySelectorAll('.service-modal-tab').forEach(tab => {
    tab.classList.toggle('active', tab.dataset.key === key);
  });

  setActiveCard(key);
}

function buildTabs(activeKey) {
  const tabsWrap = document.getElementById('serviceModalTabs');
  tabsWrap.innerHTML = Object.keys(serviceData).map(key => {
    const d = serviceData[key];
    return `<div class="service-modal-tab" data-key="${key}">${d.tag}</div>`;
  }).join('');

  tabsWrap.querySelectorAll('.service-modal-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      renderContent(tab.dataset.key);
      document.querySelector('.service-detail-scroll').scrollTo({ top: 0, behavior: 'smooth' });
    });
  });
}

function openDetail(key) {
  buildTabs(key);
  renderContent(key);
  servicesWrap.classList.add('detail-open');
}

function closeDetail() {
  servicesWrap.classList.remove('detail-open');
}

document.getElementById('serviceCardGrid').addEventListener('click', (e) => {
  const card = e.target.closest('.service-card');
  if (!card) return;
  openDetail(card.dataset.service);
});

modalClose.addEventListener('click', closeDetail);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP17\htdocs\Mctn\resources\views/services.blade.php ENDPATH**/ ?>