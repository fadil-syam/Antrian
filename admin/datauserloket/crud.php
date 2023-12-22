<?php
include "../../conneksi.php";

$query = mysqli_query($conn, "SELECT * from admin");
foreach ($query as $admin);

$resault1 = mysqli_query($conn,"SELECT * from loketa");
$resault2 = mysqli_query($conn,"SELECT * from loketb");
$resault3 = mysqli_query($conn,"SELECT * from loketc");
$resault4 = mysqli_query($conn,"SELECT * from loketd");
$resault5 = mysqli_query($conn,"SELECT * from lokete");

// dashboard admin 
$get1 = mysqli_query($conn,"SELECT * from loketa where mejaa='pengaduan'");
$count1 = mysqli_num_rows($get1);
$get2 = mysqli_query($conn,"SELECT * from loketb where mejab='perbaikan'");
$count2 = mysqli_num_rows($get2);
$get3 = mysqli_query($conn,"SELECT * from loketc where mejac='meet'");
$count3 = mysqli_num_rows($get3);
$get4 = mysqli_query($conn,"SELECT * from loketd where mejad='tamu'");
$count4 = mysqli_num_rows($get4);
$get5 = mysqli_query($conn,"SELECT * from lokete where mejae='pengambilan'");
$count5 = mysqli_num_rows($get5);


?>