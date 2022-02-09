<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/detail-event.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>
<section class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>ExpoIT</h1>
        <p class="mt-4">Di Expo IT para pembicara akan memamerkan serta memaparkan kepada audiens mengenai hasil karya mereka dan bagaimana program di bidang tersebut bisa berjalan. Sehingga para audiens akan mendapat wawasan seputar potensi karir dan karya Departemen Teknologi Informasi ITS.</p>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 me-4 rounded-pill">Download Guide Book</a>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Daftar ExpoIT</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/future-robot.svg" alt="" class="ms-auto">
    </div>
</section>
<section>
    <div class="timeline">
        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>01-01-2022 - 31-12-2023</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>01-01-2022 - 31-12-2023</p>
            </div>
        </div>
        <div class="event kiri mt-5">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>01-01-2022 - 31-12-2023</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>01-01-2022 - 31-12-2023</p>
            </div>
        </div>
    </div>
</section>

<?= $this->include('landing_page/component/HMIT-card') ?>

<?= $this->endSection('') ?>