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
    <!-- <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_kti_iot/konfirmasi_fullpaper"><i class="fas fa-check-circle"></i> Konfirmasi Full Paper</a>
    </li> -->
    <li class="">
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
<h3 class="mb-4">Konfirmasi Abstrak</h3>
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
        <th>KTM Ketua</th>
        <th>KTM Anggota 1</th>
        <th>KTM Anggota 2</th>
        <th>KRSM Ketua</th>
        <th>KRSM Anggota 1</th>
        <th>KRSM Anggota 2</th>
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
          <td><?= $tim["iot_id"] ?></td>
          <td><?= $tim['iot_nama_tim']; ?></td>
          <td><?= $tim['iot_institusi']; ?></td>
          <td><?= $tim['iot_nama_ketua']; ?></td>
          <?php if ($tim["iot_nama_anggota_1"]) { ?>
            <td><?= $tim['iot_nama_anggota_1']; ?></td>
          <?php } else { ?>
            <td>-</td>
          <?php } ?>
          <?php if ($tim["iot_nama_anggota_2"]) { ?>
            <td><?= $tim['iot_nama_anggota_2']; ?></td>
          <?php } else { ?>
            <td>-</td>
          <?php } ?>
          <td><?= $tim['iot_contact']; ?></td>
          <td><?= $tim['iot_email_ketua']; ?></td>
          <td><a href="<?= base_url() ?>/uploads/kti_iot/ktm/<?= $tim['iot_suket_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['iot_suket_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ktm/<?= $tim['iot_suket_anggota_1'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['iot_suket_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ktm/<?= $tim['iot_suket_anggota_2'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td><a href="<?= base_url() ?>/uploads/kti_iot/krsm/<?= $tim['iot_krsm_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['iot_krsm_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/krsm/<?= $tim['iot_krsm_anggota_1'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['iot_krsm_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/krsm/<?= $tim['iot_krsm_anggota_2'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/follow/<?= $tim['iot_ig_ara_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['iot_ig_ara_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/follow/<?= ($tim['iot_ig_ara_anggota_1']) ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['iot_ig_ara_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/follow/<?= ($tim['iot_ig_ara_anggota_2']) ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/follow/<?= $tim['iot_ig_hmit_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['iot_ig_hmit_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/follow/<?= ($tim['iot_ig_hmit_anggota_1']) ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['iot_ig_hmit_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/follow/<?= ($tim['iot_ig_hmit_anggota_2']) ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/share/<?= $tim['iot_story_ketua'] ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($tim['iot_story_anggota_1']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/share/<?= ($tim['iot_story_anggota_1']) ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <?php if ($tim['iot_story_anggota_2']) : ?>
            <td><a href="<?= base_url() ?>/uploads/kti_iot/ig/share/<?= ($tim['iot_story_anggota_2']) ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php else : ?>
            <td>-</td>
          <?php endif; ?>
          <td>
            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima" onclick="document.getElementById('buttTerima').href = '<?= base_url() ?>/dashboard/Admin_kti_iot/verify_konfirmasi_abstrak/<?= $tim['iot_id'] ?>/1';">Terima</a>
            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak" onclick="document.getElementById('buttTolak').href = '<?= base_url() ?>/dashboard/Admin_kti_iot/verify_konfirmasi_abstrak/<?= $tim['iot_id'] ?>/0';">Tolak</a>
            <!-- <form action="/dashboard/Admin_kti_iot/verify_konfirmasi_abstrak" method="post">
              <input type="hidden" value="<?= $tim['iot_id']; ?>" name="id">
              <input type="hidden" value="1" name="status">
              <button type="submit" class="btn btn-sm btn-success">Terima</button>
            </form>
            <form action="/dashboard/Admin_kti_iot/verify_konfirmasi_abstrak" method="post">
              <input type="hidden" value="<?= $tim['iot_id']; ?>" name="id">
              <input type="hidden" value="0" name="status">
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