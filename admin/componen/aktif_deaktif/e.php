<?php
    include("../../../conneksi.php");
    mysqli_query($conn, "UPDATE admin SET status5=1 WHERE id='$_GET[id]'");
    header("location:../../datauser.php");
?>