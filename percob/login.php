<!-- user login.php -->
<?php
    include("../conneksi.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login user</title>
</head>
<body>
    <h2>login user</h2>
    <form action="" method="post">
        <input type="text" name="txtusername" placeholder="enter yor username"><br><br>
        <input type="text" name="txtpassword" placeholder="enter yor password"><br><br>
        <input type="submit" value="login" name="btnlogin">
    </form>
    <?php
        if(isset($_POST['btnlogin'])) 
        {
            $username = $_POST['txtusername'];
            $password = $_POST['txtpassword'];
            $query = "SELECT * FROM tbl_user WHERE username='$username' and password='$password'";
            $login_query = mysqli_num_rows(mysqli_query($conn,$query));
            if($login_query)
            {
                $check_login_status = mysqli_fetch_assoc(mysqli_query($conn,$query));
                if($check_login_status{'status'}==1)
                {
                    echo "<script>alert('login sukses')</script>";
                }
                else
                {
                    echo "<script>alert('your account is not aktif')</script>";
                }
            }
            else
            {
                echo "<script>alert('incorret username or password')</script>";
            }
        }
    ?>
</body>
</html>