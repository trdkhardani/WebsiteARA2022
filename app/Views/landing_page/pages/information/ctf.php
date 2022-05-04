<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/detail-event.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>
<section class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>Capture The Flag</h1>
        <p class="mt-4">Capture the flag ARA adalah sebuah kompetisi di bidang jaringan dan keamanan informasi dengan mekanisme setiap peserta diminta untuk mengumpulkan flag sebanyak-banyaknya dari soal yang telah diberikan. Kompetisi ini dapat diikuti oleh tim yang terdiri dari 2-3 orang yang berasal dari instansi/lembaga pendidikan yang sama.Kompetisi ini diselenggarakan untuk mahasiswa di seluruh Indonesia sebagai salah satu cabang kompetisi dari rangkaian event ARA 2022.</p>
        <a href="https://drive.google.com/file/d/1bNqLIt6ejWc28Ww_tcoWWBsqLJJVDWHH/view?usp=sharing" target="_blank" class="btn btn-primary px-4 py-3 mt-4 me-4 rounded-pill">Download Guide Book</a>
        <a href="<?= base_url() ?>/auth/registrasi_ctf" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Daftar CTF</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/misterius.svg" alt="" class="ms-auto mt-4">
    </div>
</section>
<section>
    <div class="timeline">
        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pendaftaran Batch 1</p>
                <p>Melalui website resmi ARA ITS <a class="text-white" href="https://arek.its.ac.id/ara">https://arek.its.ac.id/ara</a></p>
                <p>1 Maret - 31 Maret 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Pendaftaran Batch 2</p>
                <p>Melalui website resmi ARA ITS <a class="text-white" href="https://arek.its.ac.id/ara">https://arek.its.ac.id/ara</a></p>
                <p>1 April - 22 April 2022</p>
            </div>
        </div>

        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pendaftaran Batch 3</p>
                <p>Melalui website resmi ARA ITS <a class="text-white" href="https://arek.its.ac.id/ara">https://arek.its.ac.id/ara</a></p>
                <p>23 April - Batas Waktu Tertentu</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Technical Meeting</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>19 Mei 2022</p>
            </div>
        </div>

        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pemanasan</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>20 Mei 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Penyisihan</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>21 Mei 2022</p>
            </div>
        </div>

        <div class="event kiri">
            <div data-aos="fade-right" class="isi-event">
                <p class="fw-bold">Pengumuman Finalis</p>
                <p>Melalui Web dan Sosial Media ARA 2022</p>
                <p>28 Mei 2022</p>
            </div>
        </div>
        <div class="event kanan mt-5">
            <div data-aos="fade-left" class="isi-event">
                <p class="fw-bold">Babak Final</p>
                <p>Dilakukan secara online melalui platform yang disediakan</p>
                <p>4 Juni 2022</p>
            </div>
        </div>

        <div class="event kiri">
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