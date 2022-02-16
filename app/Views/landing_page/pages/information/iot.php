<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/detail-event.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>
<section class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>Internet of Things (IOT)</h1>
        <p class="mt-4">Kompetisi ide inovatif dalam rangkaian acara ARA 2022 menggunakan mekanisme yang hampir serupa dengan Lomba Karya Tulis Ilmiah. Peserta diharapkan dapat menuangkan idenya dalam bentuk karya tulis ilmiah dengan topik utama Internet of Things. Kompetisi ide inovatif IoT ditujukan bagi mahasiswa aktif PTN/PTS se Indonesia.</p>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 me-4 rounded-pill disabled">Download Guide Book</a>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Daftar IOT</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/nambang-wifi.svg" alt="" class="ms-auto">
    </div>
</section>
<section>
    <div class="timeline">
        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Open Registrasi.</p>
                <p>1 Maret 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Close Registrasi</p>
                <p>31 Maret 2022</p>
            </div>
        </div>
        <div class="event kiri mt-5">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Coming Soon...</p>
            </div>
        </div>
    </div>
</section>

<?= $this->include('landing_page/component/HMIT-card') ?>

<?= $this->include("landing_page/component/sponsor"); ?>

<?= $this->endSection('') ?>