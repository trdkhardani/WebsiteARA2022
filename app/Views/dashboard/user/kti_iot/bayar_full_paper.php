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
<h3 class="mb-3">Pembayaran Full Paper</h3>

<!-- Informasi -->
<div class="card-dashboard">
  <h4>Informasi</h4>
  <ul>
    <li><i class="fas fa-clock"></i> Deadline Pembayaran: 16 April - 21 Mei</li>
  </ul>
</div>
<!-- Upload Bukti Pembayaran -->
<?php if (!$pembayaran_full_paper) : ?>
  <div class="card-dashboard">
    <h4>Upload Bukti Pembayaran</h4>
    <ul>
      <li><i class="fas fa-exclamation-triangle"></i> Pastikan anda sudah menginputkan file yang benar. File hanya bisa diinputkan satu kali.</li>
      <li>
        <form action="<?= base_url() ?>/dashboard/User_kti_iot/payment_full_paper" method="POST" enctype="multipart/form-data">
          <div class="mb-4">
            <input class="form-control" type="file" name="bukti_bayar" required>
          </div>
          <button type="submit" class="btn d-block mx-auto text-white">Submit</button>
        </form>
      </li>
    </ul>
  </div>
<?php endif; ?>
<!-- sudah bayar -->
<?php if ($pembayaran_full_paper) : ?>
  <div class="card-dashboard">
    <h4>Upload Bukti Pembayaran</h4>
    <ul>
      <li><i class="fas fa-thumbs-up"></i> Terima kasih sudah melakukan pembayaran untuk mengikuti tahap pengumpulan Full Paper. Terus pantau email anda untuk keterangan lebih lanjut.</li>
    </ul>
  </div>
<?php endif; ?>
<?= $this->endSection(); ?>
<!-- /end content -->
