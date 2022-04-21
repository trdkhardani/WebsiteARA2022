<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_expo/list"><i class="fas fa-list"></i> List</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_expo/konfirmasi"><i class="fas fa-check-circle"></i> Konfirmasi</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_expo/notify"><i class="fas fa-bell"></i> Notify</a>
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
        <th>Nama</th>
        <th>Institusi</th>
        <th>WA</th>
        <th>Email</th>
        <th>Day</th>
      <!--  <th>Post Twibbon</th> -->
        <th>Share Poster</th>
        <th>Follow IG ARA</th>
        <th>Follow IG HMIT</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1; 
      foreach($data as $item){ ?>
        <tr>
          <td> <?= $i++ ?> </td> 
          <td><?= $item->expo_id; ?></td>
          <td> <?= $item->expo_nama ?> </td> 
          <td> <?= $item->expo_institusi ?> </td> 
          <td> <?= $item->expo_contact ?> </td> 
          <td> <?= $item->expo_email ?> </td> 
          <td> <?= $item->expo_day ?> </td> 
        <!--  <?php if ($item->expo_twibbon) { ?>
            <td><a href="<?= base_url() ?>/uploads/expo/post_twibbon/<?= $item->expo_twibbon?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <?php } else { ?>
            <td> - </td>
          <?php } ?> -->
          <td><a href="<?= base_url() ?>/uploads/expo/share_post/<?= $item->expo_poster?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/uploads/expo/follow_ig_ara/<?= $item->expo_ig_ara?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td><a href="<?= base_url() ?>/uploads/expo/follow_ig_hmit/<?= $item->expo_ig_hmit?>" target="_blank">Lihat <i class="fas fa-external-link-alt"></i></a></td>
          <td>
            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalTerima" onclick="document.getElementById('buttTerima').href = '<?= base_url() ?>/dashboard/Admin_expo/Accept/<?= $item->expo_id ?>';">Terima</a>
            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak" onclick="document.getElementById('buttTolak').href = '<?= base_url() ?>/dashboard/Admin_expo/Reject/<?= $item->expo_id ?>';">Tolak</a>
          </td>
        </tr>
      <?php }?> 
      <!--<?php for ($i = 1; $i <= 10; $i++) { ?>
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
      <?php } ?>-->
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->