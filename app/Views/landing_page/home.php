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
    <link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/home/home.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid row px-5">
            <div class="py-1 col-4">
                <img src="<?= base_url() ?>/images/ara-putih.svg" alt="Rocket Icon" height="70" class="">
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
                </div>
            </div>
            <div class="collapse navbar-collapse col-4 text-center" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-4" aria-current="page" href="#">Login</a>
                    <a class="btn btn-outline-secondary nav-link px-4 rounded-pill" href="#">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="text-white">
        <section class="container row align-items-center mx-auto position-relatve">
            <div class="col-md-6">
                <h1>A Renewal Agent</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
                <a href="#" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Selengkapnya tentang ARA</a>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url() ?>/images/ilustration-1.svg" alt="" class="ms-auto">
            </div>
            <div class="row gap-4 gerigi mt-5 pt-5">
                <img src="<?= base_url() ?>/images/gerigi-1.svg" alt="" class="col-2">
                <img src="<?= base_url() ?>/images/gerigi-2.svg" alt="" class="col-3">
            </div>
        </section>
        <section class="container row mx-auto align-items-center">
            <div class="col-md-6">
                <img src="<?= base_url() ?>/images/manusia-laptop.svg" alt="" width="450">
            </div>
            <div class="col-md-6">
                <h2 class="h1">Webinar</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
                <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
            </div>
        </section>
        <section class="container row mx-auto align-items-center">
            <div class="col-md-6">
                <h2 class="h1">Olimpiade</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
                <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url() ?>/images/winner.svg" alt="" width="600" class="ms-auto">
            </div>
        </section>
        <section class="container row mx-auto align-items-center">
            <div class="col-md-6">
                <img src="<?= base_url() ?>/images/misterius.svg" alt="" width="720">
            </div>
            <div class="col-md-6 ms-auto">
                <h2 class="h1">Capture The Flag</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
                <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
            </div>
        </section>
        <section class="container row mx-auto align-items-center">
            <div class="col-md-6">
                <h2 class="h1">IOT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
                <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url() ?>/images/nambang-wifi.svg" alt="" width="440" class="ms-auto">
            </div>
        </section>
        <section class="container row mx-auto align-items-center">
            <div class="col-md-6">
                <img src="<?= base_url() ?>/images/future-robot.svg" alt="" width="370">
            </div>
            <div class="col-md-6">
                <h2 class="h1">EXPO</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
                <a href="#" class="btn btn-primary px-4 py-2 mt-4 rounded-pill">Selengkapnya <i class="fas fa-chevron-right ps-2"></i> </a>
            </div>
        </section>
        <section class="container bg-light px-5 py-5" style="--bs-bg-opacity: .27; border-radius: 79px">
            <small class="mx-auto d-block text-center fw-bold">Diselenggarakan Oleh</small>
            <h2 class="h1 text-center font-weight-bold mt-4">HMIT ITS</h2>
            <p class="text-center my-5 py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet diam a libero vulputate, nec dapibus enim vestibulum. Praesent id metus luctus, venenatis ex eget, tincidunt massa. Pellentesque a ullamcorper sapien.</p>
            <div class="mx-auto text-center d-flex justify-content-center">
                <a class="sosial-media mx-2 rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                <a class="sosial-media mx-2 rounded-circle" href=""><i class="fab fa-line"></i></a>
                <a class="sosial-media mx-2 rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div id="carousel-HMIT" class="w-75 mx-auto my-5 carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url() ?>/images/example.png" class="d-block w-100" alt="...">
                        <p class="mt-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cumque exercitationem iste ea fugiat dolorem? Quaerat, officia sunt perspiciatis temporibus eaque quas iste ratione! Non odio laboriosam incidunt obcaecati cum!</p>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>/images/example.png" class="d-block w-100" alt="...">
                        <p class="mt-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cumque exercitationem iste ea fugiat dolorem? Quaerat, officia sunt perspiciatis temporibus eaque quas iste ratione! Non odio laboriosam incidunt obcaecati cum!</p>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>/images/example.png" class="d-block w-100" alt="...">
                        <p class="mt-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cumque exercitationem iste ea fugiat dolorem? Quaerat, officia sunt perspiciatis temporibus eaque quas iste ratione! Non odio laboriosam incidunt obcaecati cum!</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-HMIT" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-HMIT" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="container">
            <small class="h3 mx-auto mb-5 d-block text-center fw-bold">Sponsored by</small>
            <div class="row justify-content-center mx-auto" style="max-width: 768px">
                <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
                <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
                <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
                <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
                <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
            </div>
        </section>
        <footer class="container-fluid py-5">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/landing_page/script.js"></script>
</body>

</html>