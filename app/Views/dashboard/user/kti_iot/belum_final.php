<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="<?= ($active  == 'home') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/home"><i class="fa-solid fa-house"></i> Home</a>
    </li>
    <li class="<?= ($active  == 'abstrak') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/abstrak"><i class="fa-solid fa-note-sticky"></i> Abstrak</a>
    </li>
    <li class="<?= ($active  == 'full_paper') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/full_paper"><i class="fas fa-newspaper"></i> Full Paper</a>
    </li>

    <li class="<?= ($active  == 'final') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/final"><i class="fa-solid fa-trophy"></i> Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Final</h3>
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