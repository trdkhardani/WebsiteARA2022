<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi CTF</title>
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
      <h1 class="mb-3 text-center">Registrasi Capture The Flag</h1>
      <p>Halo sobat ARA! Bagaimana? Sudah tertarik belum untuk mendaftar di lomba Capture The Flag ini? Harusnya tertarik udah tertarik dong ya hehe. Apabila kamu ada pertanyaan terkait pendaftaran ini, silahkan menghubungi kontak berikut ya:</p>
      <ul>
        <li>Aqila Aqsa : lalaingook (Line) / 081234253472 (Whatsapp)</li>
        <li>Richard Nicolas : richardrn2002 (Line) / 08236384762 (Whatsapp)</li>
      </ul>
      <p><b><span class="text-danger">*</span> Wajib diisi</b></p>
    </header>
    <main>
      <form action="../Verify/verify_registrasi_ctf" method="POST" enctype="multipart/form-data">
        <!-- tim -->
        <div class="mb-4">
          <div class="mb-3">
            <label for="nama_tim" class="form-label">Nama Tim <span class="text-danger">*<?= '<br>' . $validation->getError('nama_tim') ?></span></label>
            <input type="text" class="form-control" id="nama_tim" name="nama_tim">
          </div>
          <div class="mb-3">
            <label for="asal_institusi" class="form-label">Asal Institusi <span class="text-danger">*<?= '<br>' . $validation->getError('asal_institusi') ?></span></label>
            <input type="text" class="form-control" id="asal_institusi" name="asal_institusi">
          </div>
        </div>
        <!-- end tim -->

        <!-- ketua -->
        <div class="mb-4">
          <h2>Ketua Tim <span class="text-danger">*</span></h2>
          <div class="mb-3">
            <label for="nama_ketua" class="form-label">Nama <span class="text-danger">*<?= '<br>' . $validation->getError('nama_ketua') ?></span></label>
            <input type="text" class="form-control" id="nama_ketua" name="nama_ketua">
          </div>
          <div class="mb-3">
            <label for="email_ketua" class="form-label">Email <span class="text-danger">*<?= '<br>' . $validation->getError('email_ketua') ?></span></label>
            <input type="email" class="form-control" id="email_ketua" name="email_ketua">
          </div>
          <div class="mb-3">
            <label for="wa_ketua" class="form-label">Whatsapp <span class="text-danger">*<?= '<br>' . $validation->getError('wa_ketua') ?></span></label>
            <input type="text" class="form-control" id="wa_ketua" name="wa_ketua">
          </div>
          <div class="mb-3">
            <label for="ktm_ketua" class="form-label">Kartu Tanda Mahasiswa <span class="text-danger">*<?= '<br>' . $validation->getError('ktm_ketua') ?></span></label>
            <input class="form-control" type="file" id="ktm_ketua" name="ktm_ketua">
          </div>
          <div class="mb-3">
            <label for="ig_ara_ketua" class="form-label">Follow IG ARA <span class="text-danger">*<?= '<br>' . $validation->getError('ig_ara_ketua') ?></span></label>
            <input class="form-control" type="file" id="ig_ara_ketua" name="ig_ara_ketua">
          </div>
          <div class="mb-3">
            <label for="ig_hmit_ketua" class="form-label">Follow IG HMIT <span class="text-danger">*<?= '<br>' . $validation->getError('ig_hmit_ketua') ?></span></label>
            <input class="form-control" type="file" id="ig_hmit_ketua" name="ig_hmit_ketua">
          </div>
        </div>
        <!-- end ketua -->

        <!-- anggota 1 -->
        <div class="mb-4">
          <h2>Anggota 1 <span class="text-danger">*</span></h2>
          <div class="mb-3">
            <label for="nama_anggota_1" class="form-label">Nama <span class="text-danger">*<?= '<br>' . $validation->getError('nama_anggota_1') ?></span></label>
            <input type="text" class="form-control" id="nama_anggota_1" name="nama_anggota_1">
          </div>
          <div class="mb-3">
            <label for="ktm_anggota_1" class="form-label">Kartu Tanda Mahasiswa <span class="text-danger">*<?= '<br>' . $validation->getError('ktm_anggota_1') ?></span></label>
            <input class="form-control" type="file" id="ktm_anggota_1" name="ktm_anggota_1">
          </div>
          <div class="mb-3">
            <label for="ig_ara_anggota_1" class="form-label">Follow IG ARA <span class="text-danger">*<?= '<br>' . $validation->getError('ig_ara_anggota_1') ?></span></label>
            <input class="form-control" type="file" id="ig_ara_anggota_1" name="ig_ara_anggota_1">
          </div>
          <div class="mb-3">
            <label for="ig_hmit_anggota_1" class="form-label">Follow IG HMIT <span class="text-danger">*<?= '<br>' . $validation->getError('ig_hmit_anggota_1') ?></span></label>
            <input class="form-control" type="file" id="ig_hmit_anggota_1" name="ig_hmit_anggota_1">
          </div>
        </div>
        <!-- end anggota 1 -->

        <!-- anggota 2 -->
        <div class="mb-3">
          <h2>Anggota 2</h2>
          <div class="mb-3">
            <label for="nama_anggota_2" class="form-label">Nama</label> <span class="text-danger">*<?= '<br>' . $validation->getError('nama_anggota_2') ?></span>
            <input type="text" class="form-control" id="nama_anggota_2" name="nama_anggota_2">
          </div>
          <div class="mb-3">
            <label for="ktm_anggota_2" class="form-label">Kartu Tanda Mahasiswa</label> <span class="text-danger">*<?= '<br>' . $validation->getError('ktm_anggota_2') ?></span>
            <input class="form-control" type="file" id="ktm_anggota_2" name="ktm_anggota_2">
          </div>
          <div class="mb-3">
            <label for="ig_ara_anggota_2" class="form-label">Follow IG ARA</label> <span class="text-danger">*<?= '<br>' . $validation->getError('ig_ara_anggota_2') ?></span>
            <input class="form-control" type="file" id="ig_ara_anggota_2" name="ig_ara_anggota_2">
          </div>
          <div class="mb-3">
            <label for="ig_hmit_anggota_2" class="form-label">Follow IG HMIT</label> <span class="text-danger">*<?= '<br>' . $validation->getError('ig_hmit_anggota_2') ?></span>
            <input class="form-control" type="file" id="ig_hmit_anggota_2" name="ig_hmit_anggota_2">
          </div>
        </div>
        <!-- end anggota 2 -->

        <!-- Bukti bayar -->
        <div class="mb-5">
          <h2>Upload Bukti Pembayaran <span class="text-danger">*</span></h2>
          <div class="mb-3">
            <label for="bukti_bayar" class="form-label">Bukti Bayar <span class="text-danger">*<?= '<br>' . $validation->getError('bukti_bayar') ?></span></label>
            <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar">
          </div>
        </div>
        <!-- end Bukti bayar -->

        <div class="mb-3">
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