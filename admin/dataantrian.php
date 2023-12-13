<?php
include "../conneksi.php";

session_start();
// Periksa jika pengguna belum login, redirect ke halaman login jika belum
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data Antrian</title>
    <?php require_once('_css.php'); ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>BMTI</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> <!--  --> </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="dataantrian.php" class="nav-item nav-link active"><i class="bi bi-credit-card-2-front-fill me-2"></i>Antrian</a>
                    <a href="datauser.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-volume-up-fill me-2"></i>Pangil Antrian</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="datauserloket.php" class="dropdown-item">Loket 1</a>
                            <a href="datauserloket/_datauserloket-b.php" class="dropdown-item">Loket 2</a>
                            <a href="datauserloket/_datauserloket-c.php" class="dropdown-item">Loket 3</a>
                            <a href="datauserloket/_datauserloket-d.php" class="dropdown-item">Loket 4</a>
                            <a href="datauserloket/_datauserloket-e.php" class="dropdown-item">Loket 5</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><i class="bi bi-printer-fill me-2"></i>Setting Printer</a>
                    <a href="rekap.php" class="nav-item nav-link"><i class="bi bi-folder-fill me-2"></i>Rekap Antrian</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <?php require_once('atribut/_navbar.php'); ?>

            <!-- Blank Start -->
            
            <td>
                            <form action="componen/actif.php" method="post">
                                <input type="hidden" name="kodea" value="<?php echo $data['kodea']; ?>">
                                <button type="submit" class='btn btn-primary' name="submit">Panggil</button>
                            </form>
                            

                            <td>
                                <?php 
                                // if($data['statusa'] == 0) { ?>
                                    <!-- <button class="btn btn-sm btn-primary" id="pangil">pangil</button> -->
                                <?php //} ?>
                                <a id="playButton" href="../index.php?kodea=<?= $data["kodea"]?>"> 
                                <button class="btn btn-primary" id="pangil">Panggil</button>
                                 <audio id="audioPlayer" src="../audio/a/<?= $data['kodea'];?>.m4a" type="audio/mp4"></audio>
                                </a>
                            </td>

            <!-- Blank End -->
            <?php require_once('atribut/_footer.php'); ?>
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="atribut/main.js"></script>
</body>

</html>