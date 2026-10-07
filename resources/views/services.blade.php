@extends('layouts.app')
@section('title', 'Layanan — PLN MCTN')
@section('content')

{{-- Cadangan jika JavaScript mati: semua elemen tetap tampil --}}
<noscript><style>.rv, .rv-cards .service-card { opacity: 1 !important; }</style></noscript>

<section class="services-hero-section">
  <div class="container">
    <h2 class="section-title mb-5 rv rv-up">Solusi Energi Terintegrasi</h2>
    <div class="title-underline rv rv-line"></div>
  </div>

  <div class="container">
  <div class="services-overlap-wrap" id="servicesWrap">

    <div class="service-card-grid rv-cards" id="serviceCardGrid">
      <div class="service-card" data-service="fast">
        <img src="{{ asset('images/fastt.jpg') }}" class="service-card-img" alt="FAST">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Interconnection Extra Facility Solutions</span>
          <h3 class="service-card-title">FAST</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="poqs">
        <img src="{{ asset('images/poqss.jpg') }}" class="service-card-img" alt="POQs">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Power Quality Solutions</span>
          <h3 class="service-card-title">POQs</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="utis">
        <img src="{{ asset('images/utiss.jpg') }}" class="service-card-img" alt="UTIS">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Utility Solutions</span>
          <h3 class="service-card-title">UTIS</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="steam">
        <img src="{{ asset('images/steamm.jpg') }}" class="service-card-img" alt="STEAM">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Steam Solutions</span>
          <h3 class="service-card-title">STEAM</h3>
        </div>
        <span class="service-card-arrow"><i class="bi bi-arrow-right"></i></span>
      </div>
      <div class="service-card" data-service="gres">
        <img src="{{ asset('images/gress.jpg') }}" class="service-card-img" alt="GRES">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <span class="service-card-label">Enterprise Green &amp; Renewable Energy Solutions</span>
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

{{-- ========== MENGAPA MEMILIH PLN MCTN ========== --}}
<section class="sv-section sv-why">
  <div class="sv-wrap">
    <h2 class="sv-heading rv rv-up">Mengapa memilih PLN MCTN</h2>
    <div class="sv-underline rv rv-line"></div>

    <div class="sv-why-grid">
      <div class="sv-why-item rv rv-up">
        <svg class="sv-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
        <h3>Berpengalaman</h3>
        <p>Beroperasi andal sejak 1998.</p>
      </div>
      <div class="sv-why-item rv rv-up">
        <svg class="sv-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="9" r="2.5"/><path d="M17 14c2.5 0 4 1.8 4 4.5"/></svg>
        <h3>Tim kompeten</h3>
        <p>Operator dan teknisi yang kompeten.</p>
      </div>
      <div class="sv-why-item rv rv-up">
        <svg class="sv-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M13 3L5 14h6l-1 7 8-11h-6l1-7z"/></svg>
        <h3>Pasokan andal</h3>
        <p>Listrik dan uap tersedia setiap hari.</p>
      </div>
      <div class="sv-why-item rv rv-up">
        <svg class="sv-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l8 3v6c0 4.5-3.2 7.8-8 9-4.8-1.2-8-4.5-8-9V6l8-3z"/><path d="M8.5 12l2.5 2.5 4.5-5"/></svg>
        <h3>Keselamatan kerja</h3>
        <p>Standar keselamatan di setiap operasi.</p>
      </div>
    </div>
  </div>
</section>

<section class="kt3-cta">
  <svg class="kt3-cta-deco" viewBox="0 0 260 100" aria-hidden="true">
    <g fill="none" stroke="#0E8FA8" stroke-opacity=".18" stroke-width="1.5">
      <path d="M60 50 L100 10 L140 50 L100 90 Z"/>
      <path d="M120 50 L160 10 L200 50 L160 90 Z"/>
      <path d="M180 50 L220 10 L260 50 L220 90 Z"/>
    </g>
  </svg>

  <div class="kt3-cta-body">
    <span class="kt3-cta-icon"><i class="bi bi-headset"></i></span>
    <div>
  <p class="kt3-cta-title">Butuh solusi energi untuk operasi Anda?</p>
  <p class="kt3-cta-sub">Tim kami siap membantu menentukan layanan yang paling sesuai.</p>
    </div>
    </div>

  <a href="{{ url('/kontak') }}" class="kt3-cta-btn">Hubungi kami <i class="bi bi-arrow-right"></i></a>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center justify-content-around g-5 flex-wrap">
      <div class="col-auto text-center rv rv-up">
        <img src="{{ asset('images/partner/logo1.jpg') }}" alt="Pertamina" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center rv rv-up">
        <img src="{{ asset('images/partner/logo2.jpg') }}" alt="Danantara Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center rv rv-up">
        <img src="{{ asset('images/partner/logo6.jpg') }}" alt="PLN" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center rv rv-up">
        <img src="{{ asset('images/partner/logo4.jpg') }}" alt="SAP" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center rv rv-up">
        <img src="{{ asset('images/partner/logo5.jpg') }}" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
      <div class="col-auto text-center rv rv-up">
        <img src="{{ asset('images/partner/logo3.jpg') }}" alt="BUMN Untuk Indonesia" class="img-fluid pengadaan-logo">
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script>

/* ================= ANIMASI SCROLL ================= */
(function () {
  const items = document.querySelectorAll('.rv, .rv-cards');

  // Browser lama tanpa IntersectionObserver: tampilkan semuanya langsung
  if (!('IntersectionObserver' in window)) {
    items.forEach(el => el.classList.add('is-visible'));
    return;
  }

  const io = new IntersectionObserver((entries) => {
    let i = 0;
    entries.filter(e => e.isIntersecting).forEach(e => {
      e.target.style.setProperty('--d', (Math.min(i, 5) * 0.12) + 's');
      e.target.classList.add('is-visible');
      io.unobserve(e.target);
      i++;
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -5% 0px' });

  items.forEach(el => io.observe(el));
})();

/* ================= DETAIL LAYANAN ================= */
const serviceData = {
  fast:  { tag:'FAST',  title:'FAST',  desc:'Enterprise Interconnection Extra Facility Solutions. Gardu Induk, IML, Freq Converter, dan saluran transmisi & distribusi.', img:'{{ asset("images/fast.jpg") }}', fullTitle:'Enterprise Interconnection Extra Facility Solutions', results:['Pemasangan Gardu Induk Blok Hulu Rokan','Instalasi Onshore Power Supply 4000 kVA','Pemeliharaan saluran transmisi & distribusi'] },
  poqs:  { tag:'POQs',  title:'POQs',  desc:'Enterprise Power Quality Solutions. Peralatan power quality, voltage quality, dan watt/var compensator.', img:'{{ asset("images/poqs.jpg") }}', fullTitle:'Enterprise Power Quality Solutions', results:['Instalasi sistem voltage quality','Pemasangan UPS backup daya kritikal','Optimalisasi power factor operasional'] },
  utis:  { tag:'UTIS',  title:'UTIS',  desc:'Enterprise Utility Solutions. Unit Gardu Spesial, Trafo, Genset, dan Capacitor Banks.', img:'{{ asset("images/utis.jpg") }}', fullTitle:'Enterprise Utility Solutions', results:['Pengoperasian Unit Gardu Spesial 24/7','Pemeliharaan trafo & genset cadangan','Manajemen capacitor banks'] },
  steam: { tag:'STEAM', title:'STEAM', desc:'Enterprise Steam Solutions. Produksi dan distribusi uap dengan Gas Turbine Cogeneration.', img:'{{ asset("images/steam.jpg") }}', fullTitle:'Enterprise Steam Solutions', results:['Produksi 46.850 Ton/hari uap eksplorasi Duri','Kontribusi 70% kebutuhan uap eksplorasi','Operasi Gas Turbine Cogeneration tanpa henti'] },
  gres:  { tag:'GRES',  title:'GRES',  desc:'Enterprise Green & Renewable Energy Solutions. Solusi energi hijau mendukung Net Zero Emission.', img:'{{ asset("images/gres.jpg") }}', fullTitle:'Enterprise Green & Renewable Energy Solutions', results:['Studi kelayakan energi terbarukan Blok Hulu Rokan','Inisiatif pengurangan emisi karbon operasional','Kolaborasi riset teknologi energi hijau'] }
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

// Putar ulang animasi foto (dari kiri) & teks (dari kanan) setiap ganti layanan
function replaySwapAnimation() {
  document.querySelectorAll('.service-detail-img, .service-detail-body').forEach(el => {
    el.classList.remove('swap-in');
    void el.offsetWidth; // paksa reflow agar animasi bisa diulang
    el.classList.add('swap-in');
  });
}

function renderContent(key) {
  const data = serviceData[key];
  modalImg.src = data.img;
  modalTag.textContent = data.tag;
  modalTitle.textContent = data.fullTitle;
  modalDesc.textContent = data.desc;
  modalResults.innerHTML = data.results.map((r, i) =>
    `<div class="service-modal-result-item" style="--i:${i}"><i class="bi bi-check-circle-fill"></i><span>${r}</span></div>`
  ).join('');

  document.querySelectorAll('.service-modal-tab').forEach(tab => {
    tab.classList.toggle('active', tab.dataset.key === key);
  });

  setActiveCard(key);
  replaySwapAnimation();
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
@endsection