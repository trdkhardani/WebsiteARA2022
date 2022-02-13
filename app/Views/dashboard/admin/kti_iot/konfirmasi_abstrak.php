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
    <li class="active">
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
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/konfirmasi_final"><i class="fas fa-check-circle"></i> Konfirmasi Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-4">Konfirmasi Abstrak</h3>
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
        <th>KTM Ketua</th>
        <th>KTM Anggota 1</th>
        <th>KTM Anggota 2</th>
        <th>Follow IG Ara Ketua</th>
        <th>Follow IG Ara Anggota 1</th>
        <th>Follow IG Ara Anggota 2</th>
        <th>Follow IG HMIT Ketua</th>
        <th>Follow IG HMIT Anggota 1</th>
        <th>Follow IG HMIT Anggota 2</th>
        <th>Share Post Story Ketua</th>
        <th>Share Post Story Anggota 1</th>
        <th>Share Post Story Anggota 2</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($list_tim_abstrak as $tim) : ?>
        <tr>
          <td><?= $i ?>.</td>
          <td><?= $tim['iot_nama_tim']; ?></td>
          <td><?= $tim['iot_institusi']; ?></td>
          <td><?= $tim['iot_nama_ketua']; ?></td>
          <td><?= $tim['iot_nama_anggota_1']; ?></td>
          <td><?= $tim['iot_nama_anggota_2']; ?></td>
          <td><?= $tim['iot_contact']; ?></td>
          <td><?= $tim['iot_email_ketua']; ?></td>
          <td><a href="<?= base_url() ?>/files/iot/ktm/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/ktm/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/ktm/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/share_post/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/share_post/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/iot/share_post/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td>
            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima">Terima</a>
            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak">Tolak</a>

            <!-- <form action="/dashboard/Admin_kti_iot/verify_konfirmasi_abstrak/<?= $tim['iot_id']; ?>/1" method="post">
              <button type="submit" class="btn btn-sm btn-success">Terima</button>
            </form>
            <form action="/dashboard/Admin_kti_iot/verify_konfirmasi_abstrak/<?= $tim['iot_id']; ?>/0" method="post">
              <button type="submit" class="btn btn-sm btn-danger">Tolak</button>
            </form> -->
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->