<!-- 
    p
    login
    kosong-
    actif
    deactif
 -->

<!-- register user -->

<?php
include("../conneksi.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register user</title>
</head>
<body>
    <h2>register user</h2>
    <form action="" method="post">
        <input type="text" name="txtname" placeholder="enter yor name"><br><br>
        <input type="text" name="txtusername" placeholder="enter yor username"><br><br>
        <input type="text" name="txtpassword" placeholder="enter yor password"><br><br>
        <input type="submit" value="register" name="btnregister">
    </form>
    <?php
        if(isset($_POST['btnregister'])) {
            $name = $_POST['txtname'];
            $username = $_POST['txtusername'];
            $password = $_POST['txtpassword'];
            if(mysqli_query($conn, "INSERT INTO tbl_user(name,username,password)
            values('$name','$username','$password')")) 
            {
                echo 
                "<script>
                    alert('register sukses');
                    window.locationr.href='login.php';
                </script>";
            }
        }
    ?>
</body>
</html>