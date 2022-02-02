<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_expo/list"><img class="me-2" src="<?= base_url() ?>/images/dashboard/home.svg" alt="Icon"> List Team</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_expo/konfirmasi"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Konfirmasi Team</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-4">Konfirmasi</h3>
<?= $this->include("dashboard/template/counting") ?>
<div class="table-responsive">
  <table class="table table-light table-striped table-bordered border-dark">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Institusi</th>
        <th>WA</th>
        <th>Email</th>
        <th>Post Twibbon</th>
        <th>Share Poster</th>
        <th>Follow IG ARA</th>
        <th>Follow IG HMIT</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
          <td><?= $i ?>.</td>
          <td>Rama Muhammad Murshal</td>
          <td>Institut Teknologi Sepuluh Nopember</td>
          <td>081241227574</td>
          <td>rmurshal@gmail.com</td>
          <td><a href="<?= base_url() ?>/files/expo/twibbon/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/expo/share_poster/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/expo/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/expo/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
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