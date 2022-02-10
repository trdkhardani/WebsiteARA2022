<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/home"><img class="me-2" src="<?= base_url() ?>/images/dashboard/home.svg" alt="Icon"> Home</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/abstrak"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Abstrak</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/full_paper"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Full Paper</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/final"><img class="me-2" src="<?= base_url() ?>/images/dashboard/people.svg" alt="Icon"> Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Final</h3>
<!-- Technical Meeting -->
<div class="card-dashboard">
  <h4>Technical Meeting</h4>
  <ul>
    <li><i class="fas fa-clock"></i> Waktu: 14 April</li>
    <li><i class="fas fa-external-link-alt"></i> Link: <span class="important">Coming Soon</span></li>
  </ul>
</div>
<!-- informasi -->
<div class="card-dashboard">
  <h4>Presentasi</h4>
  <ul>
    <li><i class="fas fa-headset"></i> Pantau email anda untuk mengecek sesi.</li>
  </ul>
</div>
<!-- hasil akhir -->
<div class="card-dashboard">
  <h4>Hasil Akhir</h4>
  <ul>
    <li><i class="fas fa-trophy"></i> Pantau terus Instagram ARA untuk mengecek hasil akhir.</li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->