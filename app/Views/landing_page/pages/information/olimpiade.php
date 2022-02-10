<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/detail-event.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>
<section class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>Olimpiade</h1>
        <p class="mt-4">Olimpiade ARA 2022 adalah olimpiade nasional dengan topik Cyber Security (keamanan siber) dan IoT berbasis tim yang terdiri dari 1-3 siswa/siswi SMA/SMK yang akan berkompetisi dalam 2 babak, yaitu penyisihan dengan soal teori dan final mengenai studi kasus beserta solusinya. Tunjukkan pengetahuan dan taring kalian dalam kompetisi Olimpiade ARA 2022!</p>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 me-4 rounded-pill">Download Guide Book</a>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Daftar Olimpiade</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/winner.svg" alt="" class="ms-auto">
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