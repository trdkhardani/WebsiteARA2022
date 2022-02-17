<?= $this->extend('landing_page/template/default') ?>


<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/home.css">
<?= $this->endSection() ?>



<?= $this->section('content') ?>

<section data-aos-duration="1500" data-aos="fade-up" class="container row align-items-center mx-auto position-relatve">
    <div class="col-md-6">
        <h1>A Renewal Agent</h1>
        <p class="mt-4">ARA (A Renewal Agent) 2022 adalah kegiatan yang diselenggarakan oleh HMIT (Himpunan Mahasiswa Teknologi Informasi) ITS periode 2020-2021 yang dimana event ini akan menjadi media untuk menyalurkan minat di bidang IT (teknologi informasi) bagi siswa SMA/SMK dan mahasiswa.</p>
        <a href="<?= base_url() ?>/home/tentang_ara" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Selengkapnya tentang ARA</a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/ilustration-1.svg" alt="" class="ms-auto">
    </div>
    <div class="row gap-4 gerigi mt-5 pt-5">
        <img src="<?= base_url() ?>/images/gerigi-1.svg" alt="" class="col-2">
        <img src="<?= base_url() ?>/images/gerigi-2.svg" alt="" class="col-3">
    </div>
</section>
<section data-aos-duration="1500" data-aos="fade-left" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <img src="<?= base_url() ?>/images/manusia-laptop.svg" alt="" width="450">
    </div>
    <div class="col-md-6">
        <h2 class="h1">Webinar</h2>
        <p>Webinar merupakan acara pertama dalam rangkaian kegiatan ARA 2022 yang membahas dua topik khusus.</p>
        <a href="<?= base_url() ?>/home/webinar" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-right" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <h2 class="h1">Olimpiade</h2>
        <p>Olimpiade ARA 2022 adalah olimpiade dengan topik IoT dan Cyber Security (keamanan siber).</p>
        <a href="<?= base_url() ?>/home/olimpiade" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/winner.svg" alt="" width="600" class="ms-auto">
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-left" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <img src="<?= base_url() ?>/images/misterius.svg" alt="" width="720">
    </div>
    <div class="col-md-6 ms-auto">
        <h2 class="h1">Capture The Flag</h2>
        <p>Capture the flag ARA adalah sebuah kompetisi di bidang jaringan dan keamanan informasi dimana setiap peserta diminta untuk mengumpulkan flag sebanyak-banyaknya dari soal yang telah diberikan.</p>
        <a href="<?= base_url() ?>/home/ctf" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-right" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <h2 class="h1">IOT</h2>
        <p>Kompetisi ide inovatif dalam rangkaian acara ARA 2022 merupakan lomba dengan mekanisme yang hampir serupa dengan Lomba Karya Tulis Ilmiah. Peserta diharapkan dapat menuangkan idenya dalam bentuk karya tulis ilmiah dengan topik utama Internet of Things.</p>
        <a href="<?= base_url() ?>/home/iot" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/nambang-wifi.svg" alt="" width="440" class="ms-auto">
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-left" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <img src="<?= base_url() ?>/images/future-robot.svg" alt="" width="370">
    </div>
    <div class="col-md-6">
        <h2 class="h1">EXPO</h2>
        <p>ExpoIT adalah sebuah exhibisi online yang menjadi wadah untuk memperkenalkan karya dari Mahasiswa Teknologi Informasi ITS serta komunitas lokal di bidang Teknologi Informasi.</p>
        <a href="<?= base_url() ?>/home/expo" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
</section>

<?= $this->include("landing_page/component/HMIT-card"); ?>

<?= $this->include("landing_page/component/sponsor"); ?>

<?= $this->endSection() ?>