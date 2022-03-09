<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_olim/home"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_olim/team"><i class="fas fa-user-friends"></i> Tim Anda</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Informasi Umum</h3>
<!-- guide book -->
<div class="card-dashboard">
  <h4>Guide Book</h4>
  <ul>
    <li><i class="fas fa-book"></i> Link: <a href="https://drive.google.com/file/d/1HyPGJPTjOKniRnLeVenLlyHl60-Xr4XA/view?usp=sharing" target="_blank">Download</a></li>
  </ul>
</div>
<!-- Modul Link -->
<div class="card-dashboard">
  <h4>Modul</h4>
  <ul>
    <li><i class="fa-solid fa-book"></i> Link: <a href="https://drive.google.com/file/d/1Rmrlx-0lBDHtHE-J6w2OB2rDM0QZsKrL/view?usp=drivesdk" target="_blank">Download</a></li>
  </ul>
</div>
<!-- Whatsapp group -->
<div class="card-dashboard">
  <h4>Whatsapp Group</h4>
  <ul>
    <li><i class="fa-brands fa-whatsapp"></i> Link: <a href="https://chat.whatsapp.com/LxoqllQdG1VDhgiCa2Q3qA" target="_blank">Klik dan Bergabung</a></li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->
