<?php
    include("../../conneksi.php");

    mysqli_query($conn, "UPDATE loketa SET status=0 WHERE kodea='$_GET[kodea]'");
    header("location:../datauserloket.php");
    

    mysqli_query($conn, "UPDATE loketb SET status=0 WHERE kodeb='$_GET[kodeb]'");

    mysqli_query($conn, "UPDATE loketc SET status=0 WHERE kodec='$_GET[kodec]'");

    mysqli_query($conn, "UPDATE loketd SET status=0 WHERE koded='$_GET[koded]'");

    mysqli_query($conn, "UPDATE lokete SET status=0 WHERE kodee='$_GET[kodee]'");
?>