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
        <form action="/Home/logout" method="POST">

          <button type="submit" class="btn shadow-none" id="btn-logout">Keluar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- for accept -->
<div class="modal fade" id="modalTerima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin mengormasi peserta ini?</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Setelah menekan tombol terima, maka peserta akan segera dikirimkan username dan password melalui email
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Gajadi</button>
        <button type="button" class="btn btn-success shadow-none" onclick="alert('Handle di template index.php biar bisa pake kode php jangan dipisah ke .js')">Terima</button>
      </div>
    </div>
  </div>
</div>

<!-- for reject -->
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
        <button type="button" class="btn btn-danger shadow-none" onclick="alert('Handle di template index.php biar bisa pake kode php jangan dipisah ke .js')">Tolak</button>
      </div>
    </div>
  </div>
</div>