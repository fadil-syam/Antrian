<?php 
require_once('../conneksi.php');
require_once('../crud.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard Admin</title>
    <?php include '_css.php'; ?>
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
                    <a href="admin.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="dataantrian.php" class="nav-item nav-link"><i class="bi bi-credit-card-2-front-fill me-2"></i>Antrian</a>
                    <a href="datauser.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="nav-item dropdown">
                        <a href="datauserloket.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-volume-up-fill me-2"></i>Pangil Antrian</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="datauserloket.php" class="dropdown-item">Loket 1</a>
                            <a href="_datauserloket-b.php" class="dropdown-item">Loket 2</a>
                            <a href="#" class="dropdown-item">Loket 3</a>
                            <a href="#" class="dropdown-item">Loket 4</a>
                            <a href="#" class="dropdown-item">Loket 5</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link"><i class="bi bi-printer-fill me-2"></i>Setting Printer</a>
                    <a href="#" class="nav-item nav-link"><i class="bi bi-folder-fill me-2"></i>Rekap Antrian</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <?php require_once('atribut/_navbar.php'); ?>

            <!-- Blank Start -->
            <h1 class="mx-4 mt-2 fs-1 fw-bold">Dashboard</h1>

            <div class="fs-5 text-dark mb-1 mx-4 mt-4">Jumlah Antrian Saat Ini</div>
            <div class="row row-cols-1 row-cols-md-4 g-4 mx-3">
                <div class="col">
                    <div class="card bg-light">      
                    <div class="card-body d-flex">
                        <h1 class="card-title text-primary m-1">A-</h1>
                        <p class="card-text ms-auto">loket antrian hari ini <br><a class="fs-5 fw-bold text-dark"><?=$count1;?></a> </p>
                        
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-light">      
                    <div class="card-body d-flex">
                        <h1 class="card-title text-primary m-1">B-</h1>
                        <p class="card-text ms-auto">loket antrian hari ini <br><a class="fs-5 fw-bold text-dark"><?=$count2;?></a> </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-light">      
                    <div class="card-body d-flex">
                        <h1 class="card-title text-primary m-1">C-</h1>
                        <p class="card-text ms-auto">loket antrian hari ini <br><a class="fs-5 fw-bold text-dark"><?=$count3;?></a> </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-light">      
                    <div class="card-body d-flex">
                        <h1 class="card-title text-primary m-1">D-</h1>
                        <p class="card-text ms-auto">loket antrian hari ini <br><a class="fs-5 fw-bold text-dark"><?=$count4;?></a> </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-light">      
                    <div class="card-body d-flex">
                        <h1 class="card-title text-primary m-1">E-</h1>
                        <p class="card-text ms-auto">loket antrian hari ini <br><a class="fs-5 fw-bold text-dark"><?=$count5;?></a> </p>
                    </div>
                    </div>
                </div>
            </div>

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