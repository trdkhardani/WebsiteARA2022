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
    <a href="<?= base_url() ?>/dashboard/admin_expo/day1" class="btn btn-sm btn-success" >day 1</a>
    <a href="<?= base_url() ?>/dashboard/admin_expo/day2" class="btn btn-sm btn-success" >day 2</a>
    <a href="<?= base_url() ?>/dashboard/admin_expo/day1_all" class="btn btn-sm btn-success" >day 1 - all</a>
    <a href="<?= base_url() ?>/dashboard/admin_expo/day2_all" class="btn btn-sm btn-success" >day 2 - all</a>
</div>

<?= $this->endSection(); ?>
<!-- /end content -->