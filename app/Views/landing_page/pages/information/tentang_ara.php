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
  <link rel="icon" href="<?= base_url() ?>/images/logo-ara.svg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="<?= base_url() ?>/css/landing_page/pages/information/tentang_ara.css">
</head>

<body>
  <!-- nav -->
  <?= $this->include("/auth/navbar"); ?>

  <!-- main -->
  <main class="py-5 mx-auto">
    <div class="container">
      <section id="hero" class="mb-5" data-aos="fade-down">
        <h1 class="text-center mb-5 fw-bold">ARA (A Renewal Agent) 2022</h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= base_url() ?>/images/tentang_ara/maslambang.PNG" class="d-block w-100 rounded shadow-lg" alt="Dokumentasi ARA">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url() ?>/images/tentang_ara/juara1olim.jpg" class="d-block w-100 rounded shadow-lg" alt="Dokumentasi ARA">
            </div>
            <div class="carousel-item">
              <img src="<?= base_url() ?>/images/tentang_ara/presentasi.jpg" class="d-block w-100 rounded shadow-lg" alt="Dokumentasi ARA">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <i class="fa-solid fa-circle-chevron-left"></i>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <i class="fa-solid fa-circle-chevron-right"></i>
          </button>
        </div>
      </section>

      <section id="apa-itu" class="my-5">
        <div data-aos="zoom-in">
          <h2 class="mb-3 fw-bold">Apa itu ARA 2022</h2>
          <p class="mb-5">
            ARA atau A Renewal Agent merupakan sebuah kegiatan yang diselenggarakan oleh Himpunan
            Mahasiswa Teknologi Informasi ITS periode 2020-2021. Kegiatan ARA atau A Renewal Agent
            diadakan sebagai upaya untuk memberikan wadah bagi khususnya siswa SMA/SMK dan
            mahasiswa untuk menyalurkan minat dan bakatnya di bidang Internet of Things dan Cyber
            Security (keamanan siber), dalam rangka meningkatkan kreativitas dan inovasi generasi muda untuk mendukung
            Pembangunan Infrastruktur Teknologi untuk Indonesia
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-2" data-aos="fade-right">
            <img src="<?= base_url() ?>/images/tentang_ara/juara1ctf.jpg" class="img-fluid d-block mx-auto rounded shadow-lg" alt="Dokumentasi ARA">
          </div>
          <div class="col-sm-6 mb-2" data-aos="fade-left">
            <img src="<?= base_url() ?>/images/tentang_ara/pemaparan.PNG" class="img-fluid d-block mx-auto rounded shadow-lg" alt="Dokumentasi ARA">
          </div>
        </div>
      </section>

      <section id="fakta-unik" class="my-5 text-end">
        <div data-aos="zoom-in">
          <h2 class="mb-3 fw-bold">Fakta Unik ARA 2022</h2>
          <p class="mb-5">
            ARA 2022 mengusung tema <b>“Encouraging Innovation and Development of Technology for
              Indonesia”</b>. Dengan tagline “#SemangatMembARA2022” dan “#ARenewalAgentforITInnovation”
            dengan harapan ARA dapat melahirkan agen-agen pembaruan yang memiliki semangat yang
            membara, yang akan mendukung perkembangan dan kemajuan khususnya bidang teknologi
            informasi di Indonesia.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-2" data-aos="fade-right">
            <img src="<?= base_url() ?>/images/tentang_ara/presentasi2.PNG" class="img-fluid d-block mx-auto rounded shadow-lg" alt="Dokumentasi ARA">
          </div>
          <div class="col-sm-6 mb-2" data-aos="fade-left">
            <img src="<?= base_url() ?>/images/tentang_ara/juara1iot.jpg" class="img-fluid d-block mx-auto rounded shadow-lg" alt="Dokumentasi ARA">
          </div>
        </div>
      </section>

      <section id="support-sponsors" class="my-5" data-aos="zoom-in">
        <h2 class="text-center mb-3">Sponsors</h2>
        <div class="row justify-content-center mx-auto mb-5" style="max-width: 768px">
          <div class="col-7 col-md-4 my-auto">
            <img class="img-fluid px-1 py-4" src="<?= base_url() ?>/images/sponsor/L_logo Paragon Crop - 16.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="img-fluid px-3 py-4" src="<?= base_url() ?>/images/sponsor/S_antares.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="img-fluid px-3 py-4" src="<?= base_url() ?>/images/sponsor/S_Qlue Corporate.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="img-fluid px-3 py-4" src="<?= base_url() ?>/images/sponsor/S_indigospace-sub-logo-red.png" alt="">
          </div>
          <div class="col-9 col-md-6 my-auto">
              <img class="img-fluid px-3 py-4" src="<?= base_url() ?>/images/sponsor/XL_Logo Kencana Ahlinya Baja Ringan.png" alt="">
          </div>
          <div class="col-9 col-md-4 my-auto">
              <img class="img-fluid px-4 py-4" src="<?= base_url() ?>/images/sponsor/L_New Logo for SIG-1.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
            <img class="px-1 py-4 img-fluid" src="<?= base_url() ?>/images/sponsor/L_logo pama hd.png" alt="">
        </div>
        </div>

        <h2 class="text-center mb-5">Media Partners</h2>
        <div class="row justify-content-center mx-auto" style="max-width: 768px">
          <div class="col-5 col-md-2 my-auto">
            <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/Event Jawa Timur.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/Logo @eventsurabaya.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/LOGO INFO OLIMPIADE.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/Logo @Info Event.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/logo-himsi-46.png" alt="">
          </div>
          <div class=" col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/1646459209049.jpg" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/himtiug-logo.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/Logo @acaramahasiswa .jpeg" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/LOGO @eventcampus.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/Logo @infolomba.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/Logo @infoselanjutnya.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/LOGO HIMATIF 2.0.png" alt="">
          </div>
          <div class="col-5 col-md-2 my-auto">
              <img class="p-4 img-fluid" src="<?= base_url() ?>/images/Logo Media Partner/LOGO SOAL EVENT.jpg" alt="">
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- end main -->

  <!-- footer -->
  <?= $this->include("auth/footer"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 200,
      duration: 1000,
    });
  </script>
</body>

</html>
