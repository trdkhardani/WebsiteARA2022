<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Webinar | ARA HMIT ITS 2022</title>
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
      <h1 class="mb-3 text-center">Registrasi Webinar</h1>
      <p>Halo sobat ARA! Bagaimana? Sudah tertarik belum untuk mendaftar di event Webinar ini? Harusnya tertarik udah tertarik dong ya hehe. Apabila kamu ada pertanyaan terkait pendaftaran ini, silahkan menghubungi kontak berikut ya:</p>
      <ul>
        <li>Dimas Bagus :
          (<a href="http://line.me/ti/p/~dimasbagusrachmadani" target="_blank">Line</a>) atau
          (<a href="https://wa.me/6281336195441" target="_blank">Whatsapp</a>).
        </li>
        <li>Icha :
          (<a href="http://line.me/ti/p/~tarishaicha" target="_blank">Line</a>) atau
          (<a href="https://wa.me/62082333082308" target="_blank">Whatsapp</a>).
        </li>
      </ul>
      <p><b><span class="text-danger">*</span> Wajib diisi</b></p>
    </header>
    <main>
      <form action="<?= base_url() ?>/Verify/verify_registrasi_webinar" method="POST" enctype="multipart/form-data">
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
        <!-- <div class="mb-3">
          <label class="form-label">Pilihan Webinar <span class="text-danger">*</span></label>
          <div class="form-check" @click="handleCTF">
            <input class="form-check-input" type="radio" name="event" id="webinarCySec" value="CTF" checked>
            <label class="form-check-label" for="webinarCySec">
              Cyber Security
            </label>
          </div>
          <div class="form-check" @click="handleIOT">
            <input class="form-check-input" type="radio" name="event" id="webinarIoT" value="IoT">
            <label class="form-check-label" for="webinarIoT">
              Internet of Things
            </label>
          </div>
          <div class="form-check" @click="handleKeduanya">
            <input class="form-check-input" type="radio" name="event" id="webinarIoT&CTF" value="IoT & CTF">
            <label class="form-check-label" for="webinarIoT&CTF">
              Keduanya
            </label>
          </div>
        </div> -->
        <!-- add v-if when IoT has open -->
        <input type="text" value="IoT" hidden name="event">
        <div class="mb-3">
          <label for="share_post_iot" class="form-label">Share Post Webinar Internet of Things di story IG (<a href="https://drive.google.com/file/d/12wBG60w8Ki-G3WEUxaJ6sTAmq8qdyQbM/view?usp=sharing" target="_blank">Lihat Poster</a>) <span class="text-danger">*<?= '<br>' . $validation->getError('share_post_iot') ?></span></label>
          <input class="form-control" type="file" id="share_post_iot" name="share_post_iot" value="<?= old('share_post_iot') ?>">
        </div>
        <!-- <div class="mb-3" v-if="isIot">
          <label for="share_post_iot" class="form-label">Share Post Webinar Internet Of Things di story IG <span class="text-danger">*<?= '<br>' . $validation->getError('share_post_iot') ?></span></label>
          <input class="form-control" type="file" id="share_post_iot" name="share_post_iot" value="<?= old('share_post_iot') ?>">
        </div> -->
        <div class="mb-3">
          <label for="follow_ig_ara" class="form-label">Follow IG ARA (<a href="https://www.instagram.com/ara_its/" target="_blank">Instagram ARA 2022</a>) <span class="text-danger">*<?= '<br>' . $validation->getError('follow_ig_ara') ?></span></label>
          <input class="form-control" type="file" id="follow_ig_ara" name="follow_ig_ara" value="<?= old('follow_ig_ara') ?>">
        </div>
        <!-- <div class="mb-3">
          <label for="follow_ig_hmit" class="form-label">Follow IG HMIT (<a href="https://www.instagram.com/hmit_its/" target="_blank">Instagram HMIT ITS</a>) <span class="text-danger">*<?= '<br>' . $validation->getError('follow_ig_hmit') ?></span></label>
          <input class="form-control" type="file" id="follow_ig_hmit" name="follow_ig_hmit" value="<?= old('follow_ig_hmit') ?>">
        </div> -->
        <div class="mb-3">
          <label for="share_group" class="form-label">Follow 2 Sponsor (<a href="https://www.instagram.com/paragon.id/" target="_blank">Instagram Paragon</a>) (<a href="https://www.instagram.com/kencana.indo/" target="_blank">Instagram PT Kencana</a>) <span class="text-danger">*<?= '<br>' . $validation->getError('sponsor_group[]') ?></span></label>
          <input class="form-control" type="file" id="share_group" name="sponsor_group[]" multiple value="<?= old('share_group[]') ?>">
        </div>
        <!-- <div class="mb-3">
          <label for="subs_yt_it" class="form-label">Subscribe Youtube HMIT <span class="text-danger">*<?= '<br>' . $validation->getError('subs_yt_it') ?></span></label>
          <input class="form-control" type="file" id="subs_yt_it" name="subs_yt_it" value="<?= old('subs_yt_it') ?>">
        </div>
        <div class="mb-3">
          <label for="share_group" class="form-label">Share Post Webinar ke 2 grup <span class="text-danger">*<?= '<br>' . $validation->getError('share_group[]') ?></span></label>
          <input class="form-control" type="file" id="share_group" name="share_group[]" multiple value="<?= old('share_group[]') ?>">
        </div>
        <div class="mb-3">
          <label for="post_twibbon" class="form-label">Post Twibbon</label>
          <input class="form-control" type="file" id="post_twibbon" name="post_twibbon">
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

  <!-- <script src="https://unpkg.com/vue@3.1.1/dist/vue.global.prod.js"></script>

  <script>
    const app = Vue.createApp({
      data() {
        return {
          isCtf: true,
          isIot: false,
        };
      },
      methods: {
        reset() {
          this.isCtf = false;
          this.isIot = false;
        },
        handleCTF() {
          this.reset();
          this.isCtf = true;
        },
        handleIOT() {
          this.reset();
          this.isIot = true;
        },
        handleKeduanya() {
          this.reset();
          this.isCtf = true;
          this.isIot = true;
        },
      },
    });

    app.mount("main");
  </script> -->
</body>

</html>