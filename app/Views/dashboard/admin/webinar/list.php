<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_webinar/list"><i class="fas fa-list"></i> List</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_webinar/konfirmasi"><i class="fas fa-check-circle"></i> Konfirmasi</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-4">List</h3>
<?= $this->include("dashboard/template/counting") ?>
<div class="table-responsive">
  <table class="table table-light table-striped table-bordered border-dark">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Peserta</th>
        <th>event</th>
        <th>Nama</th>
        <th>Institusi</th>
        <th>WA</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data as $item) { ?>
        <?php if ($item->webinar_event == "IoT") { ?>
        <tr>
          <td><?= $i++ ?></td>
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
          <td><?= $item->webinar_nama ?></td>
          <td><?= $item->webinar_instansi ?></td>
          <td><?= $item->webinar_contact ?></td>
          <td><?= $item->webinar_email ?></td>
        </tr>
        <?php } ?>
      <?php } ?>
      <!--<?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
          <td><?= $i ?>.</td>
          <td>M Fernando</td>
          <td>Institut Teknologi Sepuluh Nopember</td>
          <td>081241227574</td>
          <td>rmurshal@gmail.com</td>
        </tr>
      <?php } ?>-->
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->