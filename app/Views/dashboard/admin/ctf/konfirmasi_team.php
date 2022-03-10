<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_ctf/list_team"><i class="fas fa-list"></i> List Team</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_ctf/konfirmasi_team"><i class="fas fa-check-circle"></i> Konfirmasi Team</a>
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
        <th>Bukti Bayar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data as $item) {
        if ($item->ctf_jumlah_anggota == 1) { ?>
          <tr>
            <td> <?= $i++ ?> </td>
            <td> <?= $item->ctf_id ?> </td>
            <td> <?= $item->ctf_nama_tim ?> </td>
            <td> <?= $item->ctf_intitusi ?> </td>
            <td> <?= $item->ctf_nama_ketua ?> </td>
            <td><a> - </a></td>
            <td><a> - </a></td>
            <td> <?= $item->ctf_contact  ?> </td>
            <td> <?= $item->ctf_email_ketua  ?> </td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ktm/<?= $item->ctf_suket_ketua ?> " target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/krsm/<?= $item->ctf_krsm_ketua ?> " target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_ara/<?= $item->ctf_ig_ara_ketua ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_hmit/<?= $item->ctf_ig_hmit_ketua ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/bukti_bayar/<?= $item->ctf_bukti_bayar ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td>
              <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima" onclick="document.getElementById('buttTerima').href = '<?= base_url() ?>/dashboard/Admin_ctf/Accept/<?= $item->ctf_id ?>';">Terima</a>
              <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak" onclick="document.getElementById('buttTolak').href = '<?= base_url() ?>/dashboard/Admin_ctf/Reject/<?= $item->ctf_id ?>';">Tolak</a>
            </td>
          </tr>
        <?php } elseif ($item->ctf_jumlah_anggota == 2) { ?>
          <tr>
            <td> <?= $i++ ?> </td>
            <td> <?= $item->ctf_id ?> </td>
            <td> <?= $item->ctf_nama_tim ?> </td>
            <td> <?= $item->ctf_intitusi ?> </td>
            <td> <?= $item->ctf_nama_ketua ?> </td>
            <td> <?= $item->ctf_nama_anggota_1 ?> </td>
            <td><a> - </a></td>
            <td> <?= $item->ctf_contact  ?> </td>
            <td> <?= $item->ctf_email_ketua  ?> </td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ktm/<?= $item->ctf_suket_ketua ?> " target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ktm/<?= $item->ctf_suket_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/krsm/<?= $item->ctf_krsm_ketua ?> " target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/krsm/<?= $item->ctf_krsm_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_ara/<?= $item->ctf_ig_ara_ketua ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_ara/<?= $item->ctf_ig_ara_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_hmit/<?= $item->ctf_ig_hmit_ketua ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_hmit/<?= $item->ctf_ig_hmit_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a> - </a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/bukti_bayar/<?= $item->ctf_bukti_bayar ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td>
              <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima" onclick="document.getElementById('buttTerima').href = '<?= base_url() ?>/dashboard/Admin_ctf/Accept/<?= $item->ctf_id ?>';">Terima</a>
              <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak" onclick="document.getElementById('buttTolak').href = '<?= base_url() ?>/dashboard/Admin_ctf/Reject/<?= $item->ctf_id ?>';">Tolak</a>
            </td>
          </tr>
        <?php } elseif ($item->ctf_jumlah_anggota == 3) { ?>
          <tr>
            <td> <?= $i++ ?> </td>
            <td> <?= $item->ctf_id ?> </td>
            <td> <?= $item->ctf_nama_tim ?> </td>
            <td> <?= $item->ctf_intitusi ?> </td>
            <td> <?= $item->ctf_nama_ketua ?> </td>
            <td> <?= $item->ctf_nama_anggota_1 ?> </td>
            <td> <?= $item->ctf_nama_anggota_2 ?> </td>
            <td> <?= $item->ctf_contact  ?> </td>
            <td> <?= $item->ctf_email_ketua  ?> </td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ktm/<?= $item->ctf_suket_ketua ?> " target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ktm/<?= $item->ctf_suket_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ktm/<?= $item->ctf_suket_anggota_2 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/krsm/<?= $item->ctf_krsm_ketua ?> " target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/krsm/<?= $item->ctf_krsm_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/krsm/<?= $item->ctf_krsm_anggota_2 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_ara/<?= $item->ctf_ig_ara_ketua ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_ara/<?= $item->ctf_ig_ara_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_ara/<?= $item->ctf_ig_ara_anggota_2 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_hmit/<?= $item->ctf_ig_hmit_ketua ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_hmit/<?= $item->ctf_ig_hmit_anggota_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/ig_hmit/<?= $item->ctf_ig_hmit_anggota_2 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td><a href="<?= base_url() ?>/uploads/ctf/bukti_bayar/<?= $item->ctf_bukti_bayar ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
            <td>
              <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima" onclick="document.getElementById('buttTerima').href = '<?= base_url() ?>/dashboard/Admin_ctf/Accept/<?= $item->ctf_id ?>';">Terima</a>
              <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak" onclick="document.getElementById('buttTolak').href = '<?= base_url() ?>/dashboard/Admin_ctf/Reject/<?= $item->ctf_id ?>';">Tolak</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
      <!--<?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
          <td><?= $i ?>.</td>
          <td>Tim IT'03</td>
          <td>Institut Teknologi Sepuluh Nopember</td>
          <td>Rama Muhammad Murshal</td>
          <td>Rangga Gak tau Lagi</td>
          <td>Diktia gak tau lagi</td>
          <td>081241227574</td>
          <td>rmurshal@gmail.com</td>
          <td><a href="<?= base_url() ?>/files/ctf/ktm/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/ktm/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/ktm/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/ctf/bukti_bayar/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td>
            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima">Terima</a>
            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak">Tolak</a>
          </td>
        </tr>
      <?php } ?>-->
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->