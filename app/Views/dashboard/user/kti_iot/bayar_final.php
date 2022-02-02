<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/home"><img class="me-2" src="<?= base_url() ?>/images/dashboard/home.svg" alt="Icon"> Home</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/abstrak"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Abstrak</a>
    </li>
    <li class="">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/full_paper"><img class="me-2" src="<?= base_url() ?>/images/dashboard/submission.svg" alt="Icon"> Full Paper</a>
    </li>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_kti_iot/final"><img class="me-2" src="<?= base_url() ?>/images/dashboard/people.svg" alt="Icon"> Final</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>
<h3 class="mb-3">Pembayaran Final</h3>
<!-- Informasi -->
<div class="card-dashboard">
  <h4>Informasi</h4>
  <ul>
    <li><i class="fas fa-clock"></i> Deadline Pembayaran: 22 Maret</li>
  </ul>
</div>
<!-- Upload Bukti Pembayaran -->
<div class="card-dashboard">
  <h4>Upload Bukti Pembayaran</h4>
  <ul>
    <li><i class="fas fa-exclamation-triangle"></i> Pastikan anda sudah menginputkan file yang benar. File hanya bisa diinputkan satu kali.</li>
    <li>
      <form action="" method="POST">
        <div class="mb-4">
          <input class="form-control" type="file" name="bukti_bayar">
        </div>
        <button type="submit" class="btn d-block mx-auto text-white">Submit</button>
      </form>
    </li>
  </ul>
</div>
<!-- sudah bayar -->
<div class="card-dashboard">
  <h4>Upload Bukti Pembayaran</h4>
  <ul>
    <li><i class="fas fa-thumbs-up"></i> Terima kasih sudah melakukan pembayaran untuk mengikuti tahap pengumpulan Final. Terus pantau email anda untuk keterangan lebih lanjut.</li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end content -->