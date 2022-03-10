<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_ctf/home"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_ctf/team"><i class="fas fa-user-friends"></i> Tim Anda</a>
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
    <li><i class="fas fa-university"></i> Institusi: <?= $data[0]->ctf_intitusi ?></li>
    <li><i class="fa-solid fa-id-badge"></i> ID Tim: <?= $data[0]->ctf_id ?></li>
    <li><i class="fas fa-user"></i> Ketua Tim: <?= $data[0]->ctf_nama_ketua ?></li>
    <li>
      <i class="fas fa-user"></i> Anggota 1:
      <?php if ($data[0]->ctf_nama_anggota_1) { ?>
        <?= $data[0]->ctf_nama_anggota_1 ?>
      <?php } else { ?>
        -
      <?php } ?>
    </li>
    <li>
      <i class="fas fa-user"></i> Anggota 2:
      <?php if ($data[0]->ctf_nama_anggota_2) { ?>
        <?= $data[0]->ctf_nama_anggota_2 ?>
      <?php } else { ?>
        -
      <?php } ?>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->
