<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_expo/list"><i class="fas fa-list"></i> List</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_expo/konfirmasi"><i class="fas fa-check-circle"></i> Konfirmasi</a>
    </li>
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
        <th>Nama</th>
        <th>Institusi</th>
        <th>WA</th>
        <th>Email</th>
        <th>Day</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1; 
        foreach($data as $item){ ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $item->expo_id; ?></td>
            <td><?= $item->expo_nama?></td>
            <td><?= $item->expo_institusi?></td>
            <td><?= $item->expo_contact?></td>
            <td><?= $item->expo_email?></td>
            <td><?= $item->expo_day?></td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->