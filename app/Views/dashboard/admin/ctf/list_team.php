<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_ctf/list_team"><img class="me-2" src="<?= base_url() ?>/images/dashboard/home.svg" alt="Icon"> List Team</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_ctf/konfirmasi_team"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Konfirmasi Team</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-4">List Team</h3>
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
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->