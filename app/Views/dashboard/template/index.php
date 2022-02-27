<!DOCTYPE html>

<html lang="en" dir="ltr" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
  <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
  <meta name="author" content="Divisi Website ARA 2022">
  <link rel="icon" href="<?= base_url() ?>/images/logo-ara.svg" type="image/x-icon">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- template css -->
  <link rel="stylesheet" href="<?= base_url() ?>/css/dashboard/template/template.css">
</head>

<body class="d-flex position-relative h-100">
  <!-- modal handler -->
  <?= $this->include("dashboard/template/modal"); ?>
  <!-- /end modal handler -->

  <!-- floating object -->
  <?= $this->include("dashboard/template/floating-object"); ?>
  <!-- /end floating object -->

  <!-- SIDEBAR -->
  <?= $this->renderSection("sidebar"); ?>
  <!-- /end SIDEBAR -->

  <!-- CONTENT -->
  <div class="content text-white h-100 w-100">

    <!-- navbar -->
    <?= $this->include("dashboard/template/navbar"); ?>
    <!-- /end navbar -->

    <!-- main -->
    <main>
      <div class="p-4">
        <h2 class="d-block d-lg-none"><?= $lomba ?></h2>
        <p class="d-block d-lg-none"><?= $nama ?></p>
        <hr class="d-block d-lg-none">
        <?= $this->renderSection("content"); ?>
        <p class="text-center mt-5 text-white"><i class="far fa-copyright"></i> ARA 2022</p>
      </div>
    </main>
    <!-- /end main -->

  </div>
  <!-- /end CONTENT -->

  <!-- floating button -->
  <?= $this->include("dashboard/template/floating-button"); ?>
  <!-- /end floating button -->

  <!-- bundle bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- template js -->
  <script>
    function logout() {
      // destroy sesinya
    }

    const btnOpenSide = document.getElementById("btn-open-side");
    const btnCloseSide = document.getElementById("btn-close-side");
    const sidebar = document.getElementById("sidebar-menu");

    btnOpenSide.addEventListener("click", () => {
      sidebar.classList.add("responsive");
    });

    btnCloseSide.addEventListener("click", () => {
      sidebar.classList.remove("responsive");
    })
  </script>
</body>

</html>