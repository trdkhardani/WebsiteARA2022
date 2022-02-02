<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_ctf/home"><img class="me-2" src="<?= base_url() ?>/images/dashboard/home.svg" alt="Icon"> Home</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_ctf/team"><img class="me-2" src="<?= base_url() ?>/images/dashboard/people.svg" alt="Icon"> Tim Anda</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Informasi Tim</h3>
<!-- data tim -->
<div class="card-dashboard">
  <h4>Data Tim</h4>
  <ul>
    <li><i class="fas fa-university"></i> Institusi: Institut Teknologi Sepuluh Nopember</li>
    <li><i class="fas fa-user"></i> Ketua Tim: Haffif Rasya Fauzi</li>
    <li><i class="fas fa-user"></i> Anggota 1: Naufal Dhiya Ulhaq</li>
    <li><i class="fas fa-user"></i> Anggota 2: Fatih Rian Hibatul Hakim</li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->