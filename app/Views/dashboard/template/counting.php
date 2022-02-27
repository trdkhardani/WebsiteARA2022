<div class="d-flex mb-3" id="counting">
  <div class="p-3 card-count">
    <h4><i class="fa-solid fa-users"></i> Jumlah Peserta <?= $tahap ?></h4>
    <h5><?= $total_peserta; ?></h5>
  </div>
  <div class="p-3 card-count">
    <h4><i class="far fa-check-circle"></i> Peserta Terkonfirmasi <?= $tahap ?></h4>
    <h5><?= $terkonfirmasi; ?></h5>
  </div>
  <div class="p-3 card-count">
    <h4><i class="fas fa-exclamation-triangle"></i> Peserta Pending <?= $tahap ?></h4>
    <h5><?= $belum_terkonfirmasi; ?></h5>
  </div>
</div>
