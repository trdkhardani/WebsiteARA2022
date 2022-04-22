<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Expo | ARA HMIT ITS 2022</title>
  <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
  <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
  <meta name="author" content="Divisi Website ARA 2022">

  <!-- links -->
  <link rel="icon" href="<?= base_url() ?>/images/logo-ara.svg" type="image/x-icon">
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
      <h1 class="mb-3 text-center">Registrasi Expo IT</h1>
      <p>Halo sobat ARA! Bagaimana? Sudah tertarik belum untuk mendaftar di event Expo IT ini? Harusnya tertarik udah tertarik dong ya hehe. Apabila kamu ada pertanyaan terkait pendaftaran ini, silahkan menghubungi kontak berikut ya:</p>
      <ul>
        <li>Primary Secondary :
          (<a href="http://line.me/ti/p/~primasecondary121201" target="_blank">Line</a>) atau
          (<a href="https://wa.me/6285232414072" target="_blank">Whatsapp</a>).
        </li>
        <li>Axellino Anggoro:
          (<a href="http://line.me/ti/p/~axellino-aa" target="_blank">Line</a>) atau
          (<a href="https://wa.me/62082133453710" target="_blank">Whatsapp</a>).
        </li>
      </ul>
      <p><b><span class="text-danger">*</span> Wajib diisi</b></p>
    </header>
    <main>
      <form action="<?= base_url() ?>/Verify/verify_registrasi_expo" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama <span class="text-danger">*<?= '<br>' . $validation->getError('nama') ?></span></label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>">
        </div>
        <div class="mb-3">
          <label for="asal_institusi" class="form-label">Asal Institusi <span class="text-danger">*<?= '<br>' . $validation->getError('asal_institusi') ?></span></label>
          <input type="text" class="form-control" id="asal_institusi" name="asal_institusi" value="<?= old('asal_institusi') ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email <span class="text-danger">*<?= '<br>' . $validation->getError('email') ?></span></label>
          <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>">
        </div>
        <div class="mb-3">
          <label for="whatsapp" class="form-label">Whatsapp <span class="text-danger">*<?= '<br>' . $validation->getError('whatsapp') ?></span></label>
          <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= old('whatsapp') ?>">
        </div>
        <div class="mb-3">
          <label for="share_post" class="form-label">Share Post Expo IT di Story IG dan tag 3 temanmu (<a href="https://drive.google.com/file/d/1HikaYKrtOGPZNOLcRnKgy6du1InmWfK3/view?usp=sharing" target="_blank">Lihat Poster</a>)<span class="text-danger">*<?= '<br>' . $validation->getError('share_post') ?></span></label>
          <input class="form-control" type="file" id="share_post" name="share_post" value="<?= old('share_post') ?>">
        </div>
        <div class="mb-3">
          <label for="follow_ig_ara" class="form-label">Follow IG ARA (<a href="https://www.instagram.com/ara_its/" target="_blank">Instagram ARA 2022</a>) <span class="text-danger">*<?= '<br>' . $validation->getError('follow_ig_ara') ?></span></label>
          <input class="form-control" type="file" id="follow_ig_ara" name="follow_ig_ara" value="<?= old('follow_ig_ara') ?>">
        </div>
        <div class="mb-3">
          <label for="follow_ig_hmit" class="form-label">Follow IG HMIT (<a href="https://www.instagram.com/hmit_its/" target="_blank">Instagram HMIT ITS</a>) <span class="text-danger">*<?= '<br>' . $validation->getError('follow_ig_hmit') ?></span></label>
          <input class="form-control" type="file" id="follow_ig_hmit" name="follow_ig_hmit" value="<?= old('follow_ig_hmit') ?>">
        </div>
        <div class="mb-5">
          <label class="form-label">Pilihan Day Expo <span class="text-danger">*</span></label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="event" id="expoDay1" value="Day 1" checked>
            <label class="form-check-label" for="expoDay1">
              Day 1 Expo - UI/UX, Smart City, Cyber Security
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="event" id="handleDay2" value="Day 2">
            <label class="form-check-label" for="handleDay2">
              Day 2 Expo - Workshop IoT, Workshop Cloud
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="event" id="expoAllDay" value="All Day">
            <label class="form-check-label" for="expoAllDay">
              Day 1 dan Day 2
            </label>
          </div>
        </div>
        <!--  <div class="mb-3">
          <label for="post_twibbon" class="form-label">Post Twibbon</label>
          <input class="form-control" type="file" id="post_twibbon" name="post_twibbon" value="<?= old('post_twibbon') ?>">
        </div> -->
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