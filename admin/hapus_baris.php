<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $indexToDelete = $_POST["index"];

    // Baca data dari file
    $rekapData = file_get_contents("rekap_data.txt");
    $lines = explode("\n", $rekapData);

    // Hapus baris yang ditentukan
    unset($lines[$indexToDelete]);

    // Simpan data yang diperbarui kembali ke file
    file_put_contents("rekap_data.txt", implode("\n", $lines));
    header("Location: rekap.php");
    exit();
}
?>
