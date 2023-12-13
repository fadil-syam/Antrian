<?php
session_start(); // Mulai session

// Simpan data ke dalam session
$_SESSION['data_indexs'] = "Data dari indexs.php";

// Redireksi ke public.php
header("Location: data.php");
exit();
?>
