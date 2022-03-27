<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/detail-event.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>
<section class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>ExpoIT</h1>
        <p class="mt-4">Di Expo IT para pembicara akan memamerkan serta memaparkan kepada audiens mengenai hasil karya mereka dan bagaimana program di bidang tersebut bisa berjalan. Sehingga para audiens akan mendapat wawasan seputar potensi karir dan karya Departemen Teknologi Informasi ITS.</p>
        <a href="<?= base_url() ?>/auth/registrasi_expo" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Daftar ExpoIT</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/future-robot.svg" alt="" class="ms-auto mt-4">
    </div>
</section>
<section>
    <div class="timeline">
        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Open Registrasi</p>
                <p>20 Maret 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Close Registrasi</p>
                <p>20 April 2022</p>
            </div>
        </div>
        <div class="event kiri mt-5">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Day 1 EXPO</p>
                <p>Topik: </p>
                <ul>
                  <li><i class="fa-solid fa-compass-drafting"></i> UI/UX Show</li>
                  <li><i class="fa-solid fa-city"></i> Smart City</li>
                  <li><i class="fa-solid fa-book-skull"></i> Cyber Security - Live Hacking</li>
                </ul>
                <p>Pembicara: </p>
                <ul>
                  <li>Muhammad Rifaldi - Art Director at Retrux Studio, UI/UX Designer at Decofuture</li>
                  <li>Anis Saidatur Rochma - Gold Medalist of Smart City GEMASTIK XIV 2021, UI/UX Designer at DPTSI ITS</li>
                  <li>Lambang Akbar Wijayadi - Gold Medalist of Cyber Security GEMASTIK XIV 2021, Penestration Tester</li>
                </ul>
                <p>23 April 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Day 2 EXPO</p>
                <p>Topik: </p>
                <ul>
                  <li><i class="fa-solid fa-desktop"></i> Workshop IoT - Hands on Micropython</li>
                  <li><i class="fa-solid fa-cloud"></i> Workshop Cloud</li>
                </ul>
                <p>Pembicara: </p>
                <ul>
                  <li>Riza Alaudin Syah - IoT Manager at Bluebird Group</li>
                </ul>
                <p>24 April 2022</p>
            </div>
        </div>
    </div>
</section>

<?= $this->include('landing_page/component/HMIT-card') ?>

<?= $this->include("landing_page/component/sponsor"); ?>

<?= $this->endSection('') ?>