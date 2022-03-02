<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-2">
  <div class="container-fluid px-3">
    <div class="col-4">
      <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/images/ara-putih.svg" alt="Rocket Icon" height="50" class=""></a>
    </div>
    <button class="navbar-toggler col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-4 mx-auto text-center" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link" aria-current="page" href="<?= base_url() ?>/home/ctf">CTF</a>
        <a class="nav-link" href="<?= base_url() ?>/home/iot">IOT</a>
        <a class="nav-link" href="<?= base_url() ?>/home/olimpiade">Olimpiade</a>
        <a class="nav-link" href="<?= base_url() ?>/home/webinar">Webinar</a>
        <a class="nav-link" href="<?= base_url() ?>/home/expo">Expo</a>
      </div>
    </div>
    <div class="collapse navbar-collapse col-4 text-center navbar-2" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link mx-4" aria-current="page" href="<?= base_url() ?>/auth/login">Login</a>
        <a class="btn btn-outline-secondary nav-link px-4 rounded-pill" href="<?= base_url() ?>/home/registrasi">Daftar</a>
      </div>
    </div>
  </div>
</nav>