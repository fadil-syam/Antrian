<?php
include "../conneksi.php";
include "crud.php";

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
    <title>datauser loket A</title>
    <?php require_once('_css.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <script>
         setTimeout(() => {
                location.reload();                
            }, 5*1000);
    </script>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="#" class="navbar-brand mx-4 mb-3">
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
                    <a href="../index.php" class="nav-item nav-link"><i class="bi bi-credit-card-2-front-fill me-2"></i>Antrian</a>
                    <a href="datauser.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Pengaturan</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="bi bi-volume-up-fill me-2"></i>Pangil Antrian</a>                        
                        <div class="dropdown-menu bg-transparent border-0">
                            <?php if ($admin['status'] == 1): ?>
                                    <a href="datauserloket.php" class="dropdown-item active">Loket 1</a>
                                <?php else: ?>
                                    <a href="" class="dropdown-item disabled">Loket 1</a>
                                <?php endif; ?>
                            <?php if ($admin['status2'] == 1): ?>
                                    <a href="datauserloket/_datauserloket-b.php" class="dropdown-item">Loket 2</a>
                                <?php else: ?>
                                    <a href="" class="dropdown-item disabled">Loket 2</a>
                                <?php endif; ?>
                            <?php if ($admin['status3'] == 1): ?>
                                    <a href="datauserloket/_datauserloket-c.php" class="dropdown-item">Loket 3</a>
                                <?php else: ?>
                                    <a href="" class="dropdown-item disabled">Loket 3</a>
                                <?php endif; ?>
                            <?php if ($admin['status4'] == 1): ?>
                                    <a href="datauserloket/_datauserloket-d.php" class="dropdown-item">Loket 4</a>
                                <?php else: ?>
                                    <a href="" class="dropdown-item disabled">Loket 4</a>
                                <?php endif; ?>
                            <?php if ($admin['status5'] == 1): ?>
                                    <a href="datauserloket/_datauserloket-e.php" class="dropdown-item">Loket 5</a>
                                <?php else: ?>
                                    <a href="" class="dropdown-item disabled">Loket 5</a>
                                <?php endif; ?>
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
            <div class="container">
                <br>
                <table class="table caption-top">
                <caption>Panggil Antrian Pengaduan di Loket A</caption>
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Kode.Antrian</th>
                    <th scope="col">Panggil</th>
                    <th scope="col">Panggil.Ulang</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $query = mysqli_query($conn,"SELECT * from loketa");
                        $no=1;
                        while ($data = mysqli_fetch_array($query)){ ?>     
                        <tr>
                            <th scope="row"><?php echo $no;$no++; ?></th>
                            <td><?php echo $data['mejaa']; ?></td>
                            <td><?php echo $data['kodea']; ?></td>
                            <td>
                                <?php if ($data['status'] == 1): ?>
                                    <button class="btn btn-sm btn-secondary" disabled>Panggil</button>
                                <?php else: ?>
                                    <a href='componen/actif.php?kodea=<?php echo $data['kodea']; ?>&mejaa=<?php echo $data['mejaa']; ?>' class='btn btn-sm btn-primary'>
                                        Panggil 
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <button id="playButton" class="btn btn-sm btn-warning">Panggil.Ulang</button>
                                <audio id="audioPlayer" src="../audio/a/<?= $data['kodea'];?>.m4a" type="audio/mp4"></audio>
                            </td>
                            <td>
                                <?php if ($data['status'] == 1): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" checked disabled>
                                    </div>
                                <?php else: ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" disabled>
                                    </div>
                                <?php endif; ?>
                            </td>
                        </tr>    
                    <?php } ?>
                </tbody>
                </table>
            </div> 
            <!-- Blank End -->
            <?php require_once('atribut/_footer.php'); ?>
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    
    <?php include "_js.php" ?>
</body>

</html>


