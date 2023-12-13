<?php
session_start();

// Tentukan username dan password yang benar
$username = 'admin';
$password = '123';

// Periksa jika pengguna sudah login, redirect ke halaman beranda jika sudah
if (isset($_SESSION['username'])) {
    header("Location: admin/admin.php");
    exit();
}

// Proses login jika form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Lakukan validasi login
    if ($input_username === $username && $input_password === $password) {
        // Set session dan redirect ke halaman beranda
        $_SESSION['username'] = $username;
        header("Location: admin/admin.php");
        exit();
    } else {
        $error_message = "Login gagal. Cek kembali username dan password.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<!--login -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="rounded border p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">  
                    <h3>Login hanya Admin</h3>
                </div>
                <!-- tampilkan error -->
                <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="username">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>                       
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Masuk</button>
                </form>
                <p>Kembali ke halaman <a href="index.php">utama</a></p>
            </div>
        </div>
    </div>            
</div>
<!-- Sign In End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>