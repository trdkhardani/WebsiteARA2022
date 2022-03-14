<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_ctf/home"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_ctf/team"><i class="fas fa-user-friends"></i> Tim Anda</a>
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
    <li><i class="fas fa-book"></i> Link: <a href="https://drive.google.com/file/d/1bNqLIt6ejWc28Ww_tcoWWBsqLJJVDWHH/view?usp=sharing" target="_blank">Lihat Disini</a></li>
  </ul>
</div>
<!-- <div class="card-dashboard">
  <h4>Discord Link</h4>
  <ul>
    <li><i class="fa-brands fa-discord"></i> Link: <a href="https://discord.gg/PH2yVuq7" target="_blank">Join dan temukan Flag!</a></li>
  </ul>
</div> -->
<?= $this->endSection(); ?>
<!-- /end content -->