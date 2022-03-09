<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_olim/list_team"><i class="fas fa-list"></i> List Team</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_olim/konfirmasi_team"><i class="fas fa-check-circle"></i> Konfirmasi Team</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-4">Konfirmasi Team</h3>
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
        <th>Kartu Pelajar Ketua</th>
        <th>Kartu Pelajar Anggota 1</th>
        <th>Kartu Pelajar Anggota 2</th>
        <th>Follow IG Ara Ketua</th>
        <th>Follow IG Ara Anggota 1</th>
        <th>Follow IG Ara Anggota 2</th>
        <th>Follow IG HMIT Ketua</th>
        <th>Follow IG HMIT Anggota 1</th>
        <th>Follow IG HMIT Anggota 2</th>
        <th>Bukti Bayar</th>
        <th>Aksi</th>
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
          <td><a href="<?= base_url() ?>/uploads/olimpiade/kp/<?= $tim['olim_suket_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['olim_suket_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/olimpiade/kp/<?= $tim['olim_suket_anggota_1'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['olim_suket_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/olimpiade/kp/<?= $tim['olim_suket_anggota_2'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td><a href="<?= base_url() ?>/uploads/olimpiade/ig/<?= $tim['olim_ig_ara_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['olim_ig_ara_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/olimpiade/ig/<?= $tim['olim_ig_ara_anggota_1'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['olim_ig_ara_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/olimpiade/ig/<?= $tim['olim_ig_ara_anggota_2'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td><a href="<?= base_url() ?>/uploads/olimpiade/ig/<?= $tim['olim_ig_hmit_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['olim_ig_hmit_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/olimpiade/ig/<?= $tim['olim_ig_hmit_anggota_1'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['olim_ig_hmit_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/olimpiade/ig/<?= $tim['olim_ig_hmit_anggota_2'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td><a href="<?= base_url() ?>/uploads/olimpiade/bukti_bayar/<?= $tim['olim_pembayaran'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td>
            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima" onclick="document.getElementById('buttTerima').href = '<?= base_url() ?>/dashboard/admin_olim/verify_konfirmasi_team/<?= $tim['olim_id'] ?>/1';">Terima</a>
            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak" onclick="document.getElementById('buttTolak').href = '<?= base_url() ?>/dashboard/admin_olim/verify_konfirmasi_team/<?= $tim['olim_id'] ?>/0';">Tolak</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->