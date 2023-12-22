<?php
    include("../../../conneksi.php");
    mysqli_query($conn, "UPDATE admin SET status2=0 WHERE id='$_GET[id]'");
    header("location:../../datauser.php");
?>