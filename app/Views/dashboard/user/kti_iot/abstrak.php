<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="<?= ($active  == 'home') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/home"><i class="fa-solid fa-house"></i> Home</a>
    </li>
    <li class="<?= ($active  == 'abstrak') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/abstrak"><i class="fa-solid fa-note-sticky"></i> Abstrak</a>
    </li>
    <li class="<?= ($active  == 'full_paper') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/full_paper"><i class="fas fa-newspaper"></i> Full Paper</a>
    </li>
    <li class="<?= ($active  == 'final') ? 'active' : '' ?>">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/final"><i class="fa-solid fa-trophy"></i> Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Abstrak</h3>

<!-- informasi abstrak -->
<div class="card-dashboard">
  <h4>Informasi Abstrak</h4>
  <ul>
    <li><i class="fas fa-calendar-alt"></i> Open Registrasi: 1 Maret - 14 April</li>
    <li><i class="fas fa-clock"></i> Waktu Pengumpulan: 1 Maret - 14 April</li>
  </ul>
</div>
<!-- pengumpulan abstrak -->
<?php if (!$abstrak) : ?>
  <div class="card-dashboard">
    <h4>Pengumpulan Abstrak</h4>
    <ul>
      <li><i class="fas fa-exclamation-triangle"></i> Pastikan anda sudah menginputkan file yang benar. Penamaan file ada pada guidebook. Format file adalah '.pdf'. File hanya bisa diinputkan satu kali.</li>
      <li>
        <form action="<?= base_url() ?>/dashboard/User_kti_iot/verify_abstrak" method="POST" enctype="multipart/form-data">
          <div class="mb-4">
            <input class="form-control" type="file" name="abstrak" required>
          </div>
          <button type="submit" class="btn d-block mx-auto text-white">Submit</button>
        </form>
      </li>
    </ul>
  </div>
<?php endif; ?>
<!-- sudah mengumpulkan abstrak -->
<?php if ($abstrak) : ?>
  <div class="card-dashboard">
    <h4>Pengumpulan Abstrak</h4>
    <ul>
      <li><i class="fas fa-thumbs-up"></i> Terima kasih sudah mengumpulkan Abstrak. Pantau terus Instagram ARA untuk mengecek hasilnya.</li>
      <li><i class="fas fa-calendar-alt"></i> Seleksi Abstrak: 14 April - 16 April</li>
      <li><i class="fas fa-clock"></i> Pengumuman Lolos ke Tahap Full Paper: 16 April</li>
    </ul>
  </div>
<?php endif; ?>
<?= $this->endSection(); ?>
<!-- /end content -->