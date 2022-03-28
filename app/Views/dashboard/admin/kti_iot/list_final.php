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
    <!-- <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/konfirmasi_fullpaper"><i class="fas fa-check-circle"></i> Konfirmasi Full Paper</a>
    </li> -->
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/list_final"><i class="fas fa-list"></i> List Team Final</a>
    </li>
    <!-- <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/konfirmasi_final"><i class="fas fa-check-circle"></i> Konfirmasi Final</a>
    </li> -->
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-4">List Team Final</h3>
<?= $this->include("dashboard/template/counting") ?>
<div class="table-responsive">
  <table class="table table-light table-striped table-bordered border-dark">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Tim</th>
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
      <?php $i = 1; ?>
      <?php foreach ($list_tim_final as $tim) : ?>
        <tr>
          <td><?= $i ?>.</td>
          <td><?= $tim["iot_id"] ?></td>
          <td><?= $tim['iot_nama_tim']; ?></td>
          <td><?= $tim['iot_institusi']; ?></td>
          <td><?= $tim['iot_nama_ketua']; ?></td>
          <td><?= ($tim['iot_nama_anggota_1']) ? $tim['iot_nama_anggota_1'] : '-' ?></td>
          <td><?= ($tim['iot_nama_anggota_2']) ? $tim['iot_nama_anggota_2'] : '-' ?></td>
          <td><?= $tim['iot_contact']; ?></td>
          <td><?= $tim['iot_email_ketua']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->