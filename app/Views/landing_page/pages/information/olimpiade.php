<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/detail-event.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>
<section class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>Olimpiade</h1>
        <p class="mt-4">Olimpiade ARA 2022 adalah olimpiade nasional dengan topik Cyber Security (keamanan siber) dan IoT berbasis tim yang terdiri dari 1-3 siswa/siswi SMA/SMK yang akan berkompetisi dalam 2 babak, yaitu penyisihan dengan soal teori dan final mengenai studi kasus beserta solusinya. Tunjukkan pengetahuan dan taring kalian dalam kompetisi Olimpiade ARA 2022!</p>
        <a href="https://drive.google.com/file/d/1HyPGJPTjOKniRnLeVenLlyHl60-Xr4XA/view?usp=sharing" target="_blank" class="btn btn-primary px-4 py-3 mt-4 me-4 rounded-pill">Download Guide Book</a>
        <a href="<?= base_url() ?>/auth/registrasi_olim" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Daftar Olimpiade</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/winner.svg" alt="" class="ms-auto">
    </div>
</section>
<section>
    <div class="timeline">
        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pendaftaran Periode 1</p>
                <p>Melalui website resmi ARA ITS <a class="text-white" href="https://arek.its.ac.id/ara">https://arek.its.ac.id/ara</a></p>
                <p>1 Maret 2022 - 31 Maret 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Pembagian Modul Olimpiade</p>
                <p>Melalui website resmi ARA ITS <a class="text-white" href="https://arek.its.ac.id/ara">https://arek.its.ac.id/ara</a></p>
                <p>1 Maret 2022</p>
            </div>
        </div>
        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pendaftaran Periode 2</p>
                <p>Melalui website resmi ARA ITS <a class="text-white" href="https://arek.its.ac.id/ara">https://arek.its.ac.id/ara</a></p>
                <p>1 April 2022 - Batas Waktu Tertentu</p>
            </div>
        </div>

        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Technical Meeting</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>11 Mei 2022</p>
            </div>
        </div>
        <div class="event kiri mt-5">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Simulasi Platform</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>14 Mei 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Babak Penyisihan</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>15 Mei 2022</p>
            </div>
        </div>

        <div class="event kiri mt-5">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pengumuman Finalis</p>
                <p>Melalui Web dan Sosial Media ARA 2022</p>
                <p>16 Mei 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Babak Final</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>22 Mei 2022</p>
            </div>
        </div>
        <div class="event kiri mt-5">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pengumuman Juara</p>
                <p>Melalui Web dan Sosial Media ARA 2022</p>
                <p>12 Juni 2022</p>
            </div>
        </div>



    </div>
</section>

<?= $this->include('landing_page/component/HMIT-card') ?>

<?= $this->include("landing_page/component/sponsor"); ?>

<?= $this->endSection('') ?>