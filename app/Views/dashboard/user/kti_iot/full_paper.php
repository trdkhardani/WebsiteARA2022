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
<h3 class="mb-3">Full Paper</h3>
<!-- Selamat -->
<div class="card-dashboard">
  <h4>Selamat, tim anda lolos ke babak 2 / Full Paper!</h4>
  <ul>
    <li>Mohon segera untuk mengumpulkan full paper tim anda.</li>
    <li>Anda dapat bergabung ke grup berikut untuk informasi lebih lanjut: <a href="https://chat.whatsapp.com/IYRQpToWSW1D0VdYDuKBzo" target="_blank">Join grup</a></li>
  </ul>
</div>
<!-- Informasi -->
<div class="card-dashboard">
  <h4>Informasi Full Paper</h4>
  <ul>
    <li><i class="fas fa-calendar-alt"></i> Pelaksanaan: 16 April - 23 Mei</li>
  </ul>
</div>
<!-- pengumpulan full paper -->
<?php if (!$full_paper) : ?>
  <div class="card-dashboard">
    <h4>Pengumpulan Full Paper</h4>
    <ul>
      <li><i class="fas fa-exclamation-triangle"></i> Pastikan anda sudah menginputkan file yang benar. Penamaan file ada di guidebook. Format file adalah '.pdf'. File hanya bisa diinputkan satu kali.</li>
      <li>
        <form action="<?= base_url() ?>/dashboard/User_kti_iot/verify_full_paper" method="POST" enctype="multipart/form-data">
          <div class="mb-4">
            <input class="form-control" type="file" name="full_paper" required>
          </div>
          <button type="submit" class="btn d-block mx-auto text-white">Submit</button>
        </form>
      </li>
    </ul>
  </div>
<?php endif; ?>
<!-- sudah mengumpulkan full paper -->
<?php if ($full_paper) : ?>
  <div class="card-dashboard">
    <h4>Pengumpulan Full Paper</h4>
    <ul>
      <li><i class="fas fa-thumbs-up"></i> Terima kasih sudah mengumpulkan Full Paper. Pantau terus Instagram ARA untuk mengecek hasilnya.</li>
      <li><i class="fas fa-calendar-alt"></i> Seleksi Full Paper: 23 Mei - 28 Mei</li>
      <li><i class="fas fa-clock"></i> Pengumuman Lolos ke tahap Final: 29 Mei</li>
    </ul>
  </div>
<?php endif; ?>
<?= $this->endSection(); ?>
<!-- /end content -->