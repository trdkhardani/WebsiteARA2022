<?= $this->extend('landing_page/template/default') ?>

<?= $this->section('custom-css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/auth/registration.css">
<?= $this->endSection('') ?>

<?= $this->section('content') ?>

<div class="bulat-pink rounded-circle"></div>
<div class="bulat-merah rounded-circle"></div>
<div class="bulat-merah-2 rounded-circle"></div>
<div class="bulat-biru rounded-circle"></div>

<div data-aos-duration="1500" data-aos="fade-up" class="container row align-items-center mx-auto position-relatve" style="margin-bottom: 200px;">
    <p class="h1 text-center">Ingin mendaftar di Bidang Apa?</p>
    <p class="text-center mt-4">Silahkan Pilih Bidang yang ingin kamu daftar</p>
</div>
<section data-aos-duration="1500" data-aos="fade-left" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <img src="<?= base_url() ?>/images/pilihan-regis-1.svg" alt="">
    </div>
    <div class="col-md-6">
        <h2 class="h1">Webinar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
        <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Daftar Webinar <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-right" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <h2 class="h1">Olimpiade</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
        <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Daftar Olimpiade <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/pilihan-regis-2.svg" alt="" class="ms-auto p-3">
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-left" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <img src="<?= base_url() ?>/images/pilihan-regis-3.svg" alt="" class="p-3">
    </div>
    <div class="col-md-6 ms-auto">
        <h2 class="h1">Capture The Flag</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
        <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Daftar CTF <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-right" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <h2 class="h1">IOT</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
        <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Daftar IOT <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
    <div class="col-md-6">
        <img src="<?= base_url() ?>/images/pilihan-regis-4.svg" alt="" class="ms-auto p-3">
    </div>
</section>
<section data-aos-anchor-placement="top-center" data-aos-duration="1500" data-aos="fade-left" class="container row mx-auto align-items-center">
    <div data-aos="zoom-in-right" data-aos-duration="1500" class="col-md-6">
        <img src="<?= base_url() ?>/images/pilihan-regis-5.svg" alt="" class="p-3">
    </div>
    <div class="col-md-6">
        <h2 class="h1">EXPO</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
        <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Daftar EXPO <i class="fas fa-chevron-right ps-2"></i> </a>
    </div>
</section>

<?= $this->endSection() ?>