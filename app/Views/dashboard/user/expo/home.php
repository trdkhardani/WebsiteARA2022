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

<div class="card-dashboard">
    <h4>Link group</h4>
    <ul>
      <li><i class="fa-brands fa-whatsapp"></i> Whatsapp Group: <a href="https://chat.whatsapp.com/HAPHHGZRUpuLaFf2Sun0qL" target="_blank">Join Disini</a></li>
    </ul>
</div>

<div class="card-dashboard">
    <h4>Resources Expo IT</h4>
    <ul>
      <li><i class="fa-solid fa-book"></i> Drive Expo IT: <a href="https://drive.google.com/drive/folders/1GSw5fGoD3FYFDRwebU4owepKYRaFIYVU?usp=sharing" target="_blank">Dapatkan resources</a></li>
    </ul>
</div>

<?php if ($event == "Day 1") { ?>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Expo Day 1</h4>
    <ul>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 23 April 2022</li>
      <li>Topik: </li>
      <ul>
        <li><i class="fa-solid fa-compass-drafting"></i> UI/UX Show</li>
        <li><i class="fa-solid fa-city"></i> Smart City</li>
        <li><i class="fa-solid fa-book-skull"></i> Cyber Security - Live Hacking</li>
      </ul>
      <li>Pembicara: </li>
      <ul>
        <li>Muhammad Rifaldi - Art Director at Retrux Studio, UI/UX Designer at Decofuture</li>
        <li>Anis Saidatur Rochma - Gold Medalist of Smart City GEMASTIK XIV 2021, UI/UX Designer at DPTSI ITS</li>
        <li>Lambang Akbar Wijayadi - Gold Medalist of Cyber Security GEMASTIK XIV 2021, Penestration Tester</li>
      </ul>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting Day: <a href="https://us02web.zoom.us/j/88144452760?pwd=YkJ5MkR4RkZEVXhhUk15TVpBZnhXZz09" target="_blank">Join!</a></li>
    </ul>
  </div>
<?php } else if ($event == "Day 2") { ?>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Expo Day 2</h4>
    <ul>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 24 April 2022</li>
      <li>Topik: </li>
      <ul>
        <li><i class="fa-solid fa-desktop"></i> Workshop IoT - Hands on Micropython</li>
        <li><i class="fa-solid fa-cloud"></i> Workshop Cloud</li>
      </ul>
      <li>Pembicara: </li>
      <ul>
        <li>Riza Alaudin Syah - IoT Manager at Bluebird Group</li>
      </ul>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting Day 2: <a href="https://us02web.zoom.us/j/88677513904?pwd=RW91bHJhSEx6dnFScG9uYU94bFA2dz09" target="_blank">Join!</a></li>
    </ul>
  </div>
<?php } else { ?>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Expo Day 1</h4>
    <ul>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 23 April 2022</li>
      <li>Topik: </li>
      <ul>
        <li><i class="fa-solid fa-compass-drafting"></i> UI/UX Show</li>
        <li><i class="fa-solid fa-city"></i> Smart City</li>
        <li><i class="fa-solid fa-book-skull"></i> Cyber Security - Live Hacking</li>
      </ul>
      <li>Pembicara: </li>
      <ul>
        <li>Muhammad Rifaldi - Art Director at Retrux Studio, UI/UX Designer at Decofuture</li>
        <li>Anis Saidatur Rochma - Gold Medalist of Smart City GEMASTIK XIV 2021, UI/UX Designer at DPTSI ITS</li>
        <li>Lambang Akbar Wijayadi - Gold Medalist of Cyber Security GEMASTIK XIV 2021, Penestration Tester</li>
      </ul>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting Day 1: <a href="https://us02web.zoom.us/j/88144452760?pwd=YkJ5MkR4RkZEVXhhUk15TVpBZnhXZz09" target="_blank">Join!</a></li>
    </ul>
  </div>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Expo Day 2</h4>
    <ul>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 24 April 2022</li>
      <li>Topik: </li>
      <ul>
        <li><i class="fa-solid fa-desktop"></i> Workshop IoT - Hands on Micropython</li>
        <li><i class="fa-solid fa-cloud"></i> Workshop Cloud</li>
      </ul>
      <li>Pembicara: </li>
      <ul>
        <li>Riza Alaudin Syah - IoT Manager at Bluebird Group</li>
      </ul>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting Day 2: <a href="https://us02web.zoom.us/j/88677513904?pwd=RW91bHJhSEx6dnFScG9uYU94bFA2dz09" target="_blank">Join!</a></li>
    </ul>
  </div>
<?php } ?>
<?= $this->endSection(); ?>
<!-- /end content -->
