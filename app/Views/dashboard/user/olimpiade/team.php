<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_olim/home"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_olim/team"><i class="fas fa-user-friends"></i> Tim Anda</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Informasi Tim</h3>
<!-- data tim -->
<div class="card-dashboard">
  <h4>Data Tim</h4>
  <ul>
    <li><i class="fas fa-university"></i> Asal Sekolah: <?= $institusi; ?></li>
    <li><i class="fa-solid fa-id-badge"></i> ID Tim: <?= $id ?></li>
    <li><i class="fas fa-user"></i> Ketua Tim: <?= $ketua; ?></li>
    <li>
      <i class="fas fa-user"></i> Anggota 1:
      <?php if ($anggota_1) { ?>
        <?= $anggota_1; ?>
      <?php } else { ?>
        -
      <?php } ?>
    </li>
    <li>
      <i class="fas fa-user"></i> Anggota 2:
      <?php if ($anggota_2) { ?>
        <?= $anggota_2; ?>
      <?php } else { ?>
        -
      <?php } ?>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->