<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Close Registration | ARA HMIT ITS 2022</title>
    <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
    <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
    <meta name="author" content="Divisi Website ARA 2022">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <script src="https://kit.fontawesome.com/3b29c0245b.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-2 nav-gradient sticky-top">
        <div class="container-fluid px-3">
            <div class="col-4">
                <a href="<?= base_url() ?>"><img src="https://i.ibb.co/HhMhkn7/ARA-navbar.png" alt="Rocket Icon"
                        height="50" class=""></a>
            </div>
            <button class="navbar-toggler col-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-4 mx-auto text-center" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link" aria-current="page" href="<?= base_url() ?>/home/ctf">CTF</a>
                    <a class="nav-link" href="<?= base_url() ?>/home/iot">IOT</a>
                    <a class="nav-link" href="<?= base_url() ?>/home/olimpiade">Olimpiade</a>
                    <a class="nav-link" href="<?= base_url() ?>/home/webinar">Webinar</a>
                    <a class="nav-link" href="<?= base_url() ?>/home/expo">Expo</a>
                </div>
            </div>
            <div class="collapse navbar-collapse col-4 text-center navbar-2" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-4" aria-current="page" href="<?= base_url() ?>/auth/login">Login</a>
                    <a class="btn btn-outline-secondary nav-link px-4 rounded-pill"
                        href="<?= base_url() ?>/home/registrasi">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="main"">
        <p>
            <h1 class= " mohonmaaf" style="font-weight: 700; font-size: 3vw;">Mohon maaf</h1>
        </p>
        <img class="sadlogo" src="https://i.ibb.co/sQQH79C/sadlogo.png" alt="" style="text-align: center;">

        <p class="maintext">
            <h2 style="white-space: pre-line">Pendaftaran untuk event XX telah di tutup.
                Sampai jumpa pada ARA 2023</h2>
        </p>

        <a href="'<?= base_url() ?>'" class="btn btn-primary px-4 py-3 mt-4 rounded-pill">Kembali ke Home</a>

    </main>

    <footer class=" container-fluid py-3 text-white text-center">
        <img class="py-5" src="https://i.ibb.co/7Qq9dWL/ara-gradient.png" alt="" width="250">
        <p class="h1 text-center fw-bold">#ARA2022</p>
        <p class="text-center mt-5">Connect With Us</p>

        <div class="mx-auto text-center d-flex justify-content-center">
            <a class="sosial-media mx-2 rounded-circle" href="https://www.instagram.com/ara_its/" target="_blank"><i
                    class="fab fa-instagram"></i></a>
            <a class="sosial-media mx-2 rounded-circle" href="https://www.youtube.com/channel/UChWjgJMQIYVivMx_gIy1eDA"
                target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="sosial-media mx-2 rounded-circle" href="https://vt.tiktok.com/ZSe7r9nLL/" target="_blank"><i
                    class="fab fa-tiktok"></i></a>
        </div>
        <div class="d-grid col-3 mx-auto mt-5">
            <a id="top" href="#" class="btn ke-atas rounded-pill py-4 my-5"><i class="fas fa-arrow-up"></i> Kembali Ke
                Atas</a>
        </div>
    </footer>
</body>

</html>