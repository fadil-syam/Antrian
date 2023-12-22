<!-- Modal konfirmasi -->
<!-- a -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Penghapusan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus semua data dari rekap? Jika data dihapus, maka semua data akan dipindahkan.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <!-- Formulir untuk mengirim permintaan penghapusan setelah konfirmasi -->
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="hidden" name="confirmed" value="1">
                        <input class="btn btn-sm btn-primary" type="submit" value="Hapus Data"/>
                    </form>
                </div>
            </div>
        </div>
    </div>