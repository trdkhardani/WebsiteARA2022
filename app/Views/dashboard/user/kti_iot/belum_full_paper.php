<?= $this->extend("dashboard/template/index"); ?>

<!-- child-css -->
<?= $this->section("child-css") ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/dashboard/template/page.css">
<?= $this->endSection(); ?>
<!-- /end child-css -->

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
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/full_paper"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Full Paper</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/final"><img class="me-2" src="<?= base_url() ?>/images/dashboard/people.svg" alt="Icon"> Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- title nav -->
<?= $this->section("title-nav"); ?>
KTI Internet Of Things
<?= $this->endSection(); ?>
<!-- /end title nav -->

<!-- content -->
<?= $this->section("content"); ?>
<h2 class="d-block d-lg-none">KTI Internet Of Things</h2>
<p class="d-block d-lg-none">Tim IT'03</p>
<hr class="d-block d-lg-none">
<h3 class="mb-3">Full Paper</h3>

<!-- belum lulus -->
<div class="mx-auto" id="container-belum-lulus">
  <div class="p-3" id="container-img-belum-lulus">
    <img src="<?= base_url() ?>/images/dashboard/belum_lulus.svg" alt="Icon" class="img-fluid d-block mx-auto">
  </div>
  <div class="text-center p-3" id="container-text-belum-lulus">
    <h3>Mohon Maaf</h3>
    <p>Tim anda belum dapat lanjut ke tahap ini</p>
  </div>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->