<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang ARA | ARA HMIT ITS 2022</title>
  <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
  <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
  <meta name="author" content="Divisi Website ARA 2022">

  <!-- links -->
  <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/tentang_ara.css">
</head>

<body>
  <!-- nav -->
  <?= $this->include("/auth/navbar"); ?>

  <!-- main -->
  <main class="py-5 mx-auto">
    <div class="container">
      <section id="hero" class="mb-5">
        <h1 class="text-center mb-5 fw-bold">ARA (A Renewal Agent) 2022</h1>
        <div id="carouselExampleIndicators" class="carousel slide mx-auto position-relative" data-bs-ride="carousel">
          <div class="carousel-indicators position-absolute">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= base_url() ?>/images/test1.jpg" class="img-fluid" alt="Dokumentasi ARA">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url() ?>/images/test2.jpg" class="img-fluid" alt="Dokumentasi ARA">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url() ?>/images/test3.jpg" class="img-fluid" alt="Dokumentasi ARA">
            </div>
          </div>
        </div>
      </section>

      <section id="apa-itu" class="my-5">
        <h2 class="mb-3">Apa itu ARA 2022</h2>
        <p class="mb-5">
          ARA atau A Renewal Agent merupakan sebuah kegiatan yang diselenggarakan oleh Himpunan
          Mahasiswa Teknologi Informasi ITS periode 2020-2021. Kegiatan ARA atau A Renewal Agent
          diadakan sebagai upaya untuk memberikan wadah bagi khususnya siswa SMA/SMK dan
          mahasiswa untuk menyalurkan minat dan bakatnya di bidang Internet of Things dan Cyber
          Security (keamanan siber), dalam rangka meningkatkan kreativitas dan inovasi generasi muda untuk mendukung
          Pembangunan Infrastruktur Teknologi untuk Indonesia
        </p>
        <div class="row">
          <div class="col">
            <img src="<?= base_url() ?>/images/test1.jpg" class="img-fluid d-block mx-auto" alt="Dokumentasi ARA">
          </div>
          <div class="col">
            <img src="<?= base_url() ?>/images/test2.jpg" class="img-fluid d-block mx-auto" alt="Dokumentasi ARA">
          </div>
        </div>
      </section>

      <section id="fakta-unik" class="my-5">
        <h2 class="mb-3">Fakta Unik ARA 2022</h2>
        <p class="mb-5">
          ARA 2022 mengusung tema <b>“Encouraging Innovation and Development of Technology for
            Indonesia”</b>. Dengan tagline “#SemangatMembARA2022” dan “#ARenewalAgentforITInnovation”
          dengan harapan ARA dapat melahirkan agen-agen pembaruan yang memiliki semangat yang
          membara, yang akan mendukung perkembangan dan kemajuan khususnya bidang teknologi
          informasi di Indonesia.
        </p>
        <div class="row">
          <div class="col">
            <img src="<?= base_url() ?>/images/test1.jpg" class="img-fluid d-block mx-auto" alt="Dokumentasi ARA">
          </div>
          <div class="col">
            <img src="<?= base_url() ?>/images/test2.jpg" class="img-fluid d-block mx-auto" alt="Dokumentasi ARA">
          </div>
        </div>
      </section>

      <section id="support-sponsors" class="my-5">
        <h2 class="text-center mb-5">Support and Sponsor</h2>
        <div class="row justify-content-center mx-auto" style="max-width: 768px">
          <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
          <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
          <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
          <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
          <img class="col-4" src="<?= base_url() ?>/images/HMIT 1.png" alt="">
        </div>
      </section>
    </div>
  </main>
  <!-- end main -->

  <!-- footer -->
  <?= $this->include("auth/footer"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>