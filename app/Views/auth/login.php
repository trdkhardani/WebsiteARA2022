<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARA HMIT ITS 2022</title>
  <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
  <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
  <meta name="author" content="Divisi Website ARA 2022">

  <!-- links -->
  <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>/css/auth/login.css">
</head>

<body>
  <div class="body">
    <!-- nav -->
    <?= $this->include("auth/navbar-login"); ?>

    <!-- main -->
    <div class="container-main p-3 p-sm-5">
      <main class="text-white w-50 mx-auto p-4 p-sm-5">
        <div class="header text-center mb-5">
          <h1>Login</h1>
          <p>Silahkan isi username dan password anda untuk login</p>
        </div>
        <form action="" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control shadow-none" placeholder="Username">
          </div>
          <div class="mb-5">
            <input type="password" class="form-control shadow-none" placeholder="Password">
          </div>
          <button class="btn d-block mx-auto">Login</button>
        </form>
      </main>
    </div>
    <!-- end main -->
  </div>

  <!-- footer -->
  <?= $this->include("auth/footer"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script>
    const nav = document.querySelector('nav');

    window.addEventListener('scroll', function() {
      const offset = window.pageYOffset;

      if (offset > 1) {
        nav.classList.add('shadow');
        nav.classList.add('nav-gradient');
      } else {
        nav.classList.remove('shadow');
        nav.classList.remove('nav-gradient');
      }
    });
  </script>
</body>

</html>