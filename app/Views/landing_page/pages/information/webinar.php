<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/detail-event.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>
<section class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>Webinar</h1>
        <p class="mt-4">Webinar merupakan acara pertama dalam rangkaian kegiatan ARA 2022 yang akan membahas dua topik khusus yaitu Internet of Things dan Cyber Security dimana pembicaranya ialah orang terkemuka dari sektor industri terkait. Pengetahuan adalah sesuatu yang paling berharga di dunia ini. Oleh karena itu, ikuti kegiatan webinar ARA 2022 untuk memperluas pengetahuan kalian!</p>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 me-4 rounded-pill disabled">Download Guide Book</a>
        <a href="#" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Daftar Webinar</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/manusia-laptop.svg" alt="" class="ms-auto">
    </div>
</section>
<section>
    <div class="timeline">
        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Open Registrasi</p>
                <p>9 Maret 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Close Registrasi</p>
                <p>8 April 2022</p>
            </div>
        </div>
        <div class="event kiri mt-5">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Coming Soon...</p>
                <!-- <p>01-01-2022 - 31-12-2023</p> -->
            </div>
        </div>
    </div>
</section>

<?= $this->include('landing_page/component/HMIT-card') ?>

<?= $this->include("landing_page/component/sponsor"); ?>

<?= $this->endSection('') ?>