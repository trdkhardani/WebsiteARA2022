<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_olim/list_team"><i class="fas fa-list"></i> List Team</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_olim/konfirmasi_team"><i class="fas fa-check-circle"></i> Konfirmasi Team</a>
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
        <th>ID Tim</th>
        <th>Tim</th>
        <th>Sekolah</th>
        <th>Ketua</th>
        <th>Anggota 1</th>
        <th>Anggota 2</th>
        <th>WA Ketua</th>
        <th>Email Ketua</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($list_tim as $tim) : ?>
        <tr>
          <td><?= $i ?>.</td>
          <td><?= $tim["olim_id"] ?></td>
          <td><?= $tim['olim_nama_tim']; ?></td>
          <td><?= $tim['olim_institusi']; ?></td>
          <td><?= $tim['olim_nama_ketua']; ?></td>
          <td><?= ($tim['olim_nama_anggota_1']) ? $tim['olim_nama_anggota_1'] : '-'; ?></td>
          <td><?= ($tim['olim_nama_anggota_2']) ? $tim['olim_nama_anggota_2'] : '-'; ?></td>
          <td><?= $tim['olim_contact']; ?></td>
          <td><?= $tim['olim_email_ketua']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->