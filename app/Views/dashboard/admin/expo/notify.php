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
    <li class="">
      <a href="<?= base_url() ?>/dashboard/admin_expo/konfirmasi"><i class="fas fa-check-circle"></i> Konfirmasi</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/admin_expo/notify"><i class="fas fa-bell"></i> Notify</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<div class="">
    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalNotify" onclick="document.getElementById('buttNotify').href = '<?= base_url() ?>/dashboard/admin_expo/day1'; document.getElementById('ModalNotify').innerHTML = 'Apakah anda yakin ingin mengirim reminder email ke <?= $jumlah_day1 ?> peserta?'; document.getElementById('ModalNotify2').innerHTML = 'Setelah menekan tombol kirim, maka <?= $jumlah_day1 ?> peserta akan menerima email reminder tentang expo day 1';">day 1</a>
    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalNotify" onclick="document.getElementById('buttNotify').href = '<?= base_url() ?>/dashboard/admin_expo/day2'; document.getElementById('ModalNotify').innerHTML = 'Apakah anda yakin ingin mengirim reminder email ke <?= $jumlah_day2 ?> peserta?'; document.getElementById('ModalNotify2').innerHTML = 'Setelah menekan tombol kirim, maka <?= $jumlah_day2 ?> peserta akan menerima email reminder tentang expo day 2';">day 2</a>
    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalNotify" onclick="document.getElementById('buttNotify').href = '<?= base_url() ?>/dashboard/admin_expo/day1_all'; document.getElementById('ModalNotify').innerHTML = 'Apakah anda yakin ingin mengirim reminder email ke <?= $jumlah_dayall ?> peserta?'; document.getElementById('ModalNotify2').innerHTML = 'Setelah menekan tombol kirim, maka <?= $jumlah_dayall ?> peserta akan menerima email reminder tentang expo day 1';">day 1 - all</a>
    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalNotify" onclick="document.getElementById('buttNotify').href = '<?= base_url() ?>/dashboard/admin_expo/day2_all'; document.getElementById('ModalNotify').innerHTML = 'Apakah anda yakin ingin mengirim reminder email ke <?= $jumlah_dayall ?> peserta?'; document.getElementById('ModalNotify2').innerHTML = 'Setelah menekan tombol kirim, maka <?= $jumlah_dayall ?> peserta akan menerima email reminder tentang expo day 2';">day 2 - all</a>
</div>

<?= $this->endSection(); ?>
<!-- /end content -->