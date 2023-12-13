<?php
session_start();
// ... kode lainnya ...

// Menampilkan data dari $_SESSION jika ada
if (isset($_SESSION['kodea']) && isset($_SESSION['mejaa'])) {
    echo  $_SESSION['kodea'];
    // Menampilkan tombol panggil dengan tautan ke actif.php
    echo $_SESSION['mejaa'];
}

session_start(); // Mulai session

// Cek apakah data ada di dalam session
if (isset($_SESSION['data_indexs'])) {
    // Ambil data dari session
    $dataIndexs = $_SESSION['data_indexs'];

    // Hapus data dari session jika Anda ingin data tersebut hanya bisa diakses sekali
    unset($_SESSION['data_indexs']);

    // Tampilkan data
    echo "Data dari indexs.php: " . $dataIndexs;
} else {
    // Handle jika data tidak ada di dalam session
    echo "Data tidak ditemukan";
}
?>
