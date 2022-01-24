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
  <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- template css -->
  <link rel="stylesheet" href="<?= base_url() ?>/css/dashboard/template/template.css">
</head>

<body class="d-flex h-100">
  <!-- sidebar -->
  <div class="sidebar h-100 p-3">
    <h1>Sidebar</h1>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Submission</a></li>
      <li><a href="">Member Team</a></li>
    </ul>
  </div>
  <!-- /end sidebar -->

  <!-- content -->
  <div class="content p-3">
    <nav class="d-flex justify-content-between">
      <h1>KTI Internet Of Things</h1>
      <ul>
        <li><a href="">Nama Tim</a></li>
        <li><a href="">Logout</a></li>
      </ul>
    </nav>
    <main>
      <?= $this->renderSection("content"); ?>
    </main>
  </div>
  <!-- /end contnet -->

  <!-- bundle bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>