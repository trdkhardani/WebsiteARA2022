<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/list_abstrak"><i class="fas fa-list"></i> List Team Abstrak</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/konfirmasi_abstrak"><i class="fas fa-check-circle"></i> Konfirmasi Abstrak</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/list_fullpaper"><i class="fas fa-list"></i> List Team Full Paper</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/konfirmasi_fullpaper"><i class="fas fa-check-circle"></i> Konfirmasi Full Paper</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/list_final"><i class="fas fa-list"></i> List Team Final</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/konfirmasi_final"><i class="fas fa-check-circle"></i> Konfirmasi Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-4">Konfirmasi Final</h3>
<?= $this->include("dashboard/template/counting") ?>
<div class="table-responsive">
  <table class="table table-light table-striped table-bordered border-dark">
    <thead>
      <tr>
        <th>No</th>
        <th>Tim</th>
        <th>Institusi</th>
        <th>Ketua</th>
        <th>Anggota 1</th>
        <th>Anggota 2</th>
        <th>WA Ketua</th>
        <th>Email Ketua</th>
        <th class="text-primary">Bukti Bayar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
          <td><?= $i ?>.</td>
          <td>Tim IT'03</td>
          <td>Institut Teknologi Sepuluh Nopember</td>
          <td>Rama Muhammad Murshal</td>
          <td>Rangga Gak tau Lagi</td>
          <td>Diktia gak tau lagi</td>
          <td>081241227574</td>
          <td>rmurshal@gmail.com</td>
          <td><a href="<?= base_url() ?>/files/iot/bayar_final/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td>
            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima">Terima</a>
            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak">Tolak</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->