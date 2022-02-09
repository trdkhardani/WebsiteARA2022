<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ARA HMIT ITS 2022</title>
    <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
    <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
    <meta name="author" content="Divisi Website ARA 2022">

    <!-- link -->
    <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pilihan-registrasi/registration.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-2">
        <div class="container-fluid row px-5">
            <div class="col-4">
                <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/images/ara-putih.svg" alt="Rocket Icon" height="50" class=""></a>
            </div>
            <button class="navbar-toggler col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-4 mx-auto text-center" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link" aria-current="page" href="#">CTF</a>
                    <a class="nav-link" href="#">IOT</a>
                    <a class="nav-link" href="#">Olimpiade</a>
                    <a class="nav-link" href="#">Webinar</a>
                    <a class="nav-link" href="#">Expo</a>
                </div>
            </div>
            <div class="collapse navbar-collapse col-4 text-center navbar-2" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-4" aria-current="page" href="#">Login</a>
                    <a class="btn btn-outline-secondary nav-link px-4 rounded-pill" href="#">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bulat-pink rounded-circle"></div>
    <div class="bulat-merah rounded-circle"></div>
    <div class="bulat-merah-2 rounded-circle"></div>
    <div class="bulat-biru rounded-circle"></div>

    <main class="text-white">
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
        <footer data-aos="fade-up" data-aos-duration="3000" class="container-fluid py-5">
            <img class="mx-auto py-5" src="<?= base_url() ?>/images/ara-gradient.svg" alt="" width="250">
            <p class="h1 text-center fw-bold">#ARA2022</p>
            <p class="text-center mt-5">Connect With Us</p>

            <div class="mx-auto text-center d-flex justify-content-center">
                <a class="sosial-media mx-2 rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                <a class="sosial-media mx-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                <a class="sosial-media mx-2 rounded-circle" href=""><i class="fab fa-line"></i></a>
                <a class="sosial-media mx-2 rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="d-grid col-3 mx-auto mt-5">
                <a id="top" href="#" class="btn ke-atas rounded-pill py-4 my-5"><i class="fas fa-arrow-up"></i> Kembali Ke Atas</a>
            </div>
        </footer>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/landing_page/script.js"></script>
</body>

</html>