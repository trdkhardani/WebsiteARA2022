<!-- for logout -->
<div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Saat anda keluar maka sesi anda akan di hapus
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Gajadi</button>
        <!-- <button type="button" class="btn shadow-none" onclick="logout()" id="btn-logout">Keluar</button> -->
        <form action="<?= base_url() ?>/Home/logout" method="POST">
          <button type="submit" class="btn shadow-none" id="btn-logout">Keluar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- for accept account -->
<div class="modal fade" id="modalTerima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin mengonfirmasi peserta ini?</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Setelah menekan tombol terima, maka peserta akan segera dikirimkan username dan password melalui email
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Gajadi</button>
        <a type="button" class="btn btn-success shadow-none" id="buttTerima" onclick="document.getElementById('buttTerima').classList.add('disabled');">Terima</a>
      </div>
    </div>
  </div>
</div>

<!-- for reject account -->
<div class="modal fade" id="modalTolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menolak peserta ini?</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Setelah menekan tombol tolak, maka peserta akan segera diberitahu bahwa data yang mereka kirimkan belum sesuai
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Gajadi</button>
        <a type="button" class="btn btn-danger shadow-none" id="buttTolak" onclick="document.getElementById('buttTolak').classList.add('disabled');">Tolak</a>
      </div>
    </div>
  </div>
</div>

<!-- for accept data -->
<div class="modal fade" id="modalTerimaData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin mengonfirmasi peserta ini?</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Setelah menekan tombol terima, maka peserta akan segera dikirimkan pemberitahuan bahwa ia dapat lanjut ke tahap selanjutnya melalui email
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Gajadi</button>
        <a type="button" class="btn btn-success shadow-none" id="buttTerimaData" onclick="document.getElementById('buttTerimaData').classList.add('disabled');">Terima</a>
      </div>
    </div>
  </div>
</div>

<!-- for reject data -->
<div class="modal fade" id="modalTolakData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menolak peserta ini?</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Setelah menekan tombol tolak, maka peserta akan segera diberitahu bahwa data yang mereka kirimkan belum sesuai
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Gajadi</button>
        <a type="button" class="btn btn-danger shadow-none" id="buttTolakData" onclick="document.getElementById('buttTolakData').classList.add('disabled');">Tolak</a>
      </div>
    </div>
  </div>
</div>

<!-- for notify -->
<div class="modal fade" id="modalNotify" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNotify"></h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="ModalNotify2">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Gajadi</button>
        <a type="button" class="btn btn-success shadow-none" id="buttNotify" onclick="document.getElementById('buttNotify').classList.add('disabled');">Kirim</a>
      </div>
    </div>
  </div>
</div>