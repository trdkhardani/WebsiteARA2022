<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/home"><img class="me-2" src="<?= base_url() ?>/images/dashboard/home.svg" alt="Icon"> Home</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/abstrak"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Abstrak</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/full_paper"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Full Paper</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/final"><img class="me-2" src="<?= base_url() ?>/images/dashboard/people.svg" alt="Icon"> Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Informasi Umum</h3>
<!-- guide book -->
<div class="card-dashboard">
  <h4>Guide Book</h4>
  <ul>
    <li><i class="fas fa-book"></i> Link: <a href="https://drive.ara.guide.book.com" target="_blank">https://drive.ara.guide.book.com</a></li>
  </ul>
</div>
<!-- data tim -->
<div class="card-dashboard">
  <h4>Data Tim</h4>
  <ul>
    <li><i class="fas fa-university"></i> Institusi: Institut Teknologi Sepuluh Nopember</li>
    <li><i class="fas fa-user"></i> Ketua Tim: <?= $ketua; ?></li>
    <li><i class="fas fa-user"></i> Anggota 1: <?= $anggota_1; ?></li>
    <li><i class="fas fa-user"></i> Anggota 2: <?= $anggota_2; ?></li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->