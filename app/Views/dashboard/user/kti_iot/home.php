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
<h3 class="mb-3">Informasi Umum</h3>
<!-- guide book -->
<div class="card-dashboard">
  <h4>Guide Book</h4>
  <ul>
    <li><i class="fas fa-book"></i> Link: <a href="https://drive.google.com/file/d/17rm4UaSQGzFAV9JeZSuX8J6bpr3GtVJz/view?usp=sharing" target="_blank">Lihat Disini</a></li>
  </ul>
</div>
<!-- data tim -->
<div class="card-dashboard">
  <h4>Data Tim</h4>
  <ul>
    <li><i class="fas fa-university"></i> Institusi: <?= $institusi; ?></li>
    <li><i class="fa-solid fa-id-badge"></i> ID tim: <?= $id; ?></li>
    <li><i class="fas fa-user"></i> Ketua Tim: <?= $ketua; ?></li>
    <li>
      <i class="fas fa-user"></i> Anggota 1:
      <?php if ($anggota_1) { ?>
        <?= $anggota_1 ?>
      <?php } else { ?>
        -
      <?php } ?>
    </li>
    <li>
      <i class="fas fa-user"></i> Anggota 2:
      <?php if ($anggota_2) { ?>
        <?= $anggota_2 ?>
      <?php } else { ?>
        -
      <?php } ?>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->