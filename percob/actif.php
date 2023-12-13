<?php
    include("../conneksi.php");
    mysqli_query($conn, "UPDATE tbl_user SET status=1 WHERE id='$_GET[id]'");
    header("location:kosong.php");
?>