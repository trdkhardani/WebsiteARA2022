<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
  <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
  <meta name="author" content="Divisi Website ARA 2022">

  <!-- links -->
  <link rel="icon" href="<?= base_url() ?>/images/logo-ara.svg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>/css/auth/regist.css">
  <style>
    main {
      min-height: 70vh;
    }


    .btn-back-home {
      background: linear-gradient(115.27deg, #523aa8 19.54%, #523aa8 19.55%, #161175 86.12%);
      border-radius: 38px;
      padding: 8px 40px;
    }

    @media screen and (max-width: 768px) {
      .main-finish {
        width: 80% !important;
      }
    }
  </style>
</head>

<body>
  <!-- nav -->
  <?= $this->include("auth/navbar"); ?>

  <main class="w-50 mx-auto text-center p-5 main-finish">
    <h2 class="mb-5 mt-5">Terima kasih sudah melakukan pendaftaran di event ARA 2022. Pantau terus <span class="text-danger">email</span> anda untuk pemberitahuan selanjutnya!</h2>
    <button class="btn btn-back-home text-white mb-5" onclick="backHome()">Kembali ke home</button>
  </main>

  <!-- footer -->
  <?= $this->include("auth/footer"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script>
    function backHome() {
      window.location.href = "<?= base_url(); ?>"
    }
  </script>
</body>

</html>