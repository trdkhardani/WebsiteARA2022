<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_expo/home"><i class="fas fa-home"></i> Home</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Informasi Umum</h3>
<!-- card dashboard -->
<div class="card-dashboard">
  <h4>Tema Expo A</h4>
  <ul>
    <li><i class="fas fa-user"></i> Pemateri: Haffif Rasya Fauzi</li>
    <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 4 April 2022</li>
    <li><i class="fas fa-external-link-alt"></i> Link Meeting: <span class="important">Coming Soon</span></li>
  </ul>
</div>
<!-- card dashboard -->
<div class="card-dashboard">
  <h4>Tema Expo A</h4>
  <ul>
    <li><i class="fas fa-user"></i> Pemateri: Haffif Rasya Fauzi</li>
    <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 4 April 2022</li>
    <li><i class="fas fa-external-link-alt"></i> Link Meeting: <span class="important">Coming Soon</span></li>
  </ul>
</div>
<!-- card dashboard -->
<div class="card-dashboard">
  <h4>Tema Expo A</h4>
  <ul>
    <li><i class="fas fa-user"></i> Pemateri: Haffif Rasya Fauzi</li>
    <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 4 April 2022</li>
    <li><i class="fas fa-external-link-alt"></i> Link Meeting: <span class="important">Coming Soon</span></li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->