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
    <?php if ($status_penyisihan) : ?>
      <li class="<?= ($active  == 'full_paper') ? 'active' : '' ?>">
        <a href="<?= base_url() ?>/dashboard/user_kti_iot/full_paper"><i class="fas fa-newspaper"></i> Full Paper</a>
      </li>
      <?php if ($status_final) : ?>
        <li class="<?= ($active  == 'final') ? 'active' : '' ?>">
          <a href="<?= base_url() ?>/dashboard/user_kti_iot/final"><i class="fa-solid fa-trophy"></i> Final</a>
        </li>
      <?php endif; ?>
    <?php endif; ?>
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