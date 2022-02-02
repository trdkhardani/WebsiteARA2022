<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Webinar</title>
  <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
  <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
  <meta name="author" content="Divisi Website ARA 2022">

  <!-- links -->
  <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>/css/auth/regist.css">
</head>

<body>
  <!-- nav -->
  <?= $this->include("auth/navbar"); ?>

  <!-- main -->
  <div class="container w-50 p-3 wrapper-main">
    <header class="mb-4">
      <h1 class="mb-3 text-center">Registrasi Webinar</h1>
      <p>Halo sobat ARA! Bagaimana? Sudah tertarik belum untuk mendaftar di event Webinar ini? Harusnya tertarik udah tertarik dong ya hehe. Apabila kamu ada pertanyaan terkait pendaftaran ini, silahkan menghubungi kontak berikut ya:</p>
      <ul>
        <li>Coming soon dari Mita</li>
        <li>Coming soon dari Mita</li>
      </ul>
      <p><b><span class="text-danger">*</span> Wajib diisi</b></p>
    </header>
    <main>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="nama">
        </div>
        <div class="mb-3">
          <label for="asal_institusi" class="form-label">Asal Institusi <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="asal_institusi">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="whatsapp" class="form-label">Whatsapp <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="whatsapp">
        </div>
        <div class="mb-3">
          <label for="share_post" class="form-label">Share Post Webinar <span class="text-danger">*</span></label>
          <input class="form-control" type="file" id="share_post">
        </div>
        <div class="mb-3">
          <label for="follow_ig_ara" class="form-label">Follow IG ARA <span class="text-danger">*</span></label>
          <input class="form-control" type="file" id="follow_ig_ara">
        </div>
        <div class="mb-3">
          <label for="follow_ig_hmit" class="form-label">Follow IG HMIT <span class="text-danger">*</span></label>
          <input class="form-control" type="file" id="follow_ig_hmit">
        </div>
        <div class="mb-3">
          <label for="subs_yt_it" class="form-label">Subscribe Youtube HMIT <span class="text-danger">*</span></label>
          <input class="form-control" type="file" id="subs_yt_it">
        </div>
        <div class="mb-3">
          <label for="share_group" class="form-label">Share Post ke 2 grup <span class="text-danger">*</span></label>
          <input class="form-control" type="file" id="share_group">
        </div>
        <div class="mb-3">
          <label for="post_twibbon" class="form-label">Post Twibbon</label>
          <input class="form-control" type="file" id="post_twibbon">
        </div>
        <div class="mb-5">
          <button class="btn btn-submit text-white d-block mx-auto">Submit</button>
        </div>
      </form>
    </main>
  </div>
  <!-- end main -->

  <!-- footer -->
  <?= $this->include("auth/footer"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>