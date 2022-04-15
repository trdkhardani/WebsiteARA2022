<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_webinar/list"><i class="fas fa-list"></i> List</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_webinar/konfirmasi"><i class="fas fa-check-circle"></i> Konfirmasi</a>
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
        <th>ID Peserta</th>
        <th>Event</th>
        <th>Nama</th>
        <th>Institusi</th>
        <th>WA</th>
        <th>Email</th>
        <!-- <th>Post Twibbon</th> -->
        <th>Share Poster Webinar CTF</th>
        <th>Share Poster Webinar IOT</th>
        <th>Follow IG ARA</th>
        <th>Follow IG HMIT</th>
        <th>Follow Sponsor 1</th>
        <th>Follow Sponsor 2</th>
        <!--  <th>Subscribe Youtube IT ITS</th>
        <th>Share Poster Grup 1</th>
        <th>Share Poster Grup 2</th>  -->
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data as $item) { ?>
        <tr>
          <td> <?= $i++ ?> </td>
          <td><?= $item->webinar_id; ?></td>
          <td>
            <?php if ($item->webinar_event == "CTF") { ?>
              Cyber Security
            <?php } else if ($item->webinar_event == "IoT") { ?>
              IoT
            <?php } else { ?>
              Cyber Security & IoT
            <?php } ?>
          </td>
          <td> <?= $item->webinar_nama ?> </td>
          <td> <?= $item->webinar_instansi ?> </td>
          <td> <?= $item->webinar_contact ?> </td>
          <td> <?= $item->webinar_email ?> </td>
          <!--  <?php if ($item->webinar_twibbon) { ?>
            <td><a href="<?= base_url() ?>/uploads/webinar/post_twibbon/<?= $item->webinar_twibbon ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php } else { ?>
            <td> - </td>
          <?php } ?> -->
          <?php if ($item->webinar_post_ctf != '-') { ?>
            <td><a href="<?= base_url() ?>/uploads/webinar/post_ctf/<?= $item->webinar_post_ctf ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php } else { ?>
            <td><a> - </a></td>
          <?php } ?>
          <?php if ($item->webinar_post_iot != '-') { ?>
            <td><a href="<?= base_url() ?>/uploads/webinar/post_iot/<?= $item->webinar_post_iot ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php } else { ?>
            <td><a> - </a></td>
          <?php } ?>
          <td><a href="<?= base_url() ?>/uploads/webinar/ig_ara/<?= $item->webinar_ig_ara ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php if ($item->webinar_ig_hmit != NULL) { ?>
            <td><a href="<?= base_url() ?>/uploads/webinar/ig_hmit/<?= $item->webinar_ig_hmit ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php } else { ?>
            <td><a> - </a></td>
          <?php } ?>
          <?php if ($item->webinar_sponsor_1 != NULL) { ?>
            <td><a href="<?= base_url() ?>/uploads/webinar/sponsor_1/<?= $item->webinar_sponsor_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php } else { ?>
            <td><a> - </a></td>
          <?php } ?>
          <?php if ($item->webinar_sponsor_2 != NULL) { ?>
            <td><a href="<?= base_url() ?>/uploads/webinar/sponsor_2/<?= $item->webinar_sponsor_2 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php } else { ?>
            <td><a> - </a></td>
          <?php } ?>
          <!--  <td><a href="<?= base_url() ?>/uploads/webinar/subs/<?= $item->webinar_subscribe ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/uploads/webinar/share_1/<?= $item->webinar_share_1 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/uploads/webinar/share_2/<?= $item->webinar_share_2 ?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td> -->
          <td>
            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima" onclick="document.getElementById('buttTerima').href = '<?= base_url() ?>/dashboard/Admin_webinar/Accept/<?= $item->webinar_id ?>';">Terima</a>
            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak" onclick="document.getElementById('buttTolak').href = '<?= base_url() ?>/dashboard/Admin_webinar/Reject/<?= $item->webinar_id ?>';">Tolak</a>
          </td>
        </tr>
      <?php } ?>

      <!--<?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
          <td><?= $i ?>.</td>
          <td>Rama Muhammad Murshal</td>
          <td>Institut Teknologi Sepuluh Nopember</td>
          <td>081241227574</td>
          <td>rmurshal@gmail.com</td>
          <td><a href="<?= base_url() ?>/files/webinar/twibbon/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/webinar/share_poster/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/webinar/share_poster/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/webinar/follow_ig_ara/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/webinar/follow_ig_hmit/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/webinar/subs_yt_it/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/webinar/share_post_group/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/files/webinar/share_post_group/testing.jpg" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
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