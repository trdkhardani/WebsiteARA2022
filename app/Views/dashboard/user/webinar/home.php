<?= $this->extend("dashboard/template/index"); ?>

<!-- sidebar -->
<?= $this->section("sidebar"); ?>
<div class="sidebar h-100" id="sidebar-menu">
  <button id="btn-close-side" class="btn shadow-none d-block d-lg-none text-white ms-auto"><i class="fas fa-chevron-left"></i></button>
  <h1 class="fw-bold mb-4 text-white">Dashboard</h1>
  <ul>
    <li class="active">
      <a href="<?= base_url() ?>/dashboard/user_webinar/home"><i class="fas fa-home"></i> Home</a>
    </li>
  </ul>
</div>
<?= $this->endSection(); ?>
<!-- /end sidebar -->

<!-- content -->
<?= $this->section("content"); ?>

<h3 class="mb-3">Informasi Umum</h3>

<?php if ($event == "CTF") { ?>
  <div class="card-dashboard">
    <h4>Link group Informasi Webinar Cyber Security</h4>
    <ul>
      <li><i class="fa-brands fa-whatsapp"></i> Whatsapp: <a href="https://chat.whatsapp.com/CtbVlHoKeue78rIWyf0O67" target="_blank">Join Disini</a></li>
      <li><i class="fa-brands fa-telegram"></i> Telegram: <a href="https://t.me/+BmojfhGELO45ZWE1" target="_blank">Join Disini</a></li>
    </ul>
  </div>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Webinar Cyber Security</h4>
    <ul>
      <li><i class="fa-solid fa-pencil"></i> Tema: <span class="important">A Fundamental Key for Innovation in Digital Infrastructure</span></li>
      <li><i class="fas fa-user"></i> Pemateri 1: Deyanbunayya (Web Security Instructor dan
        Founder Belajarsiber)</li>
      <li><i class="fas fa-user"></i> Pemateri 2: Dendi Zuckergates (Founder Orang Siber Indonesia)</li>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 9 April 2022</li>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting: <span class="important">Coming Soon</span></li>
    </ul>
  </div>
<?php } else if ($event == "IoT") { ?>
  <div class="card-dashboard">
    <h4>Link group Informasi Webinar Internet of Things</h4>
    <ul>
      <li><i class="fa-brands fa-whatsapp"></i> Whatsapp: <a href="https://chat.whatsapp.com/IgakcYFMx5jHrhoqcf3ryP" target="_blank">Join Disini</a></li>
      <li><i class="fa-brands fa-telegram"></i> Telegram: <a href="https://t.me/+pGftH65OTq1jNDY9" target="_blank">Join Disini</a></li>
    </ul>
  </div>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Webinar Internet of Things</h4>
    <ul>
      <li><i class="fa-solid fa-pencil"></i> Tema: <span class="important">Akselerasi Transformasi Digital Indonesia melalui Infrastruktur 5G dalam IoT</span></li>
      <li><i class="fas fa-user"></i> Pemateri 1: Fariz Alemuda (Squad Leader IoT Manufacture at Telkom Indonesia)</li>
      <li><i class="fas fa-user"></i> Pemateri 2: Kukuh Damareza (Manufacturing Excellence Executive PT Paragon)</li>
      <li><i class="fas fa-user"></i> Pemateri 3: Evan Pradipta (IoT Engineer Qlue Smartcity)</li>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 7 Mei 2022</li>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting: <span class="important">Coming Soon</span></li>
    </ul>
  </div>
<?php } else { ?>
  <div class="card-dashboard">
    <h4>Link group Informasi Webinar Cyber Security dan Internet of Things</h4>
    <ul>
      <li><i class="fa-brands fa-whatsapp"></i> Whatsapp Cyber Security: <a href="https://chat.whatsapp.com/CtbVlHoKeue78rIWyf0O67" target="_blank">Join Disini</a></li>
      <li><i class="fa-brands fa-whatsapp"></i> Whatsapp Internet of Things: <a href="https://chat.whatsapp.com/IgakcYFMx5jHrhoqcf3ryP" target="_blank">Join Disini</a></li>
      <li><i class="fa-brands fa-telegram"></i> Telegram Cyber Security: <a href="https://t.me/+BmojfhGELO45ZWE1" target="_blank">Join Disini</a></li>
      <li><i class="fa-brands fa-telegram"></i> Telegram Internet of Things: <a href="https://t.me/+pGftH65OTq1jNDY9" target="_blank">Join Disini</a></li>
    </ul>
  </div>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Webinar IoT</h4>
    <ul>
      <li><i class="fas fa-user"></i> Pemateri: Haffif Rasya Fauzi</li>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 4 April 2022</li>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting: <span class="important">Coming Soon</span></li>
    </ul>
  </div>
  <!-- card dashboard -->
  <div class="card-dashboard">
    <h4>Webinar Cyber Security</h4>
    <ul>
      <li><i class="fas fa-user"></i> Pemateri: Haffif Rasya Fauzi</li>
      <li><i class="fas fa-clock"></i> Waktu Pelaksanaan: 4 April 2022</li>
      <li><i class="fas fa-external-link-alt"></i> Link Meeting: <span class="important">Coming Soon</span></li>
    </ul>
  </div>
<?php } ?>
<?= $this->endSection(); ?>
<!-- /end content -->