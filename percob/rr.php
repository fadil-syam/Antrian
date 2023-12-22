<?php
include "../conneksi.php";

session_start();
// Periksa jika pengguna belum login, redirect ke halaman login jika belum
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

$query = mysqli_query($conn, "SELECT * from admin");
foreach ($query as $admin);

$resault1 = mysqli_query($conn,"SELECT * from loketa");
$resault2 = mysqli_query($conn,"SELECT * from loketb");
$resault3 = mysqli_query($conn,"SELECT * from loketc");
$resault4 = mysqli_query($conn,"SELECT * from loketd");
$resault5 = mysqli_query($conn,"SELECT * from lokete");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data User</title>
    <?php require_once('_css.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                    <a href="dataantrian.php" class="nav-item nav-link"><i class="bi bi-credit-card-2-front-fill me-2"></i>Antrian</a>
                    <a href="datauser.php" class="nav-item nav-link active"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-volume-up-fill me-2"></i>Pangil Antrian</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <?php if ($admin['status'] == 1): ?>
                                    <a href="datauserloket.php" class="dropdown-item">Loket 1</a>
                                <?php else: ?>
                                    <a href="" class="dropdown-item disabled">Loket 1</a>
                                <?php endif; ?>
                            <?php if ($admin['status2'] == 1): ?>
                                    <a href="datauserloket/_datauserloket-b.php" class="dropdown-item">Loket 2</a>
                                <?php else: ?>
                                    <a href="" class="dropdown-item disabled">Loket 2</a>
                                <?php endif; ?>
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
            <div class="container">
                <table class="table caption-top">
                <caption>List user di Loket A</caption>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Jml.Antrian</th>
                    <th scope="col">Kode.Awalan</th>
                    <th scope="col">Tanggal.Bulan.Tahun</th>
                    <th scope="col">Status</th>
                    <th scope="col">Simpan Hasil ke rekap</th>
                    </tr>
                </thead>
                <tbody>    
                    <?php include "../crud.php";?>     
                    <tr>
                        <th scope="row">1</th>
                        <td>Pengaduan</td>
                        <td><?=$count1;?></td>
                        <td>A</td>
                        <td>
                            <?php
                                if ($row = mysqli_fetch_assoc($resault1)) {
                                    echo $row["data"];
                                } else {
                                    echo "tidak ada data";
                                }
                            ?>
                        </td>
                        <td>
                            <?php if ($admin['status'] == 1): ?>
                                <a href='componen/aktif_deaktif/a-.php?id=<?php echo $admin['id']; ?>' class='btn btn-sm btn-success'>Selesai</a>
                            <?php else: ?>
                                <a href='componen/aktif_deaktif/a.php?id=<?php echo $admin['id']; ?>' class='btn btn-sm btn-primary'>Mulai</a>
                            <?php endif;  ?>
                        </td>
                        <td>
                            <form action="rekap.php" method="post">
                                <!-- Tambahkan input tersembunyi untuk nilai yang ingin Anda kirimkan -->
                                <input type="hidden" name="dataMeja" value="Pengaduan"/>
                                <input type="hidden" name="count" value="<?=$count1;?>"/>
                                <input type="hidden" name="dataType" value="A"/>
                                <input type="hidden" name="data" value="<?=($row ? $row["data"] : 'tidak ada data');?>"/>

                                <!-- <input class="btn btn-sm bg-primary text-light" type="submit" value="Simpan"/> -->                                
                                <?php 
                                    if ($admin['status'] == 1): ?>
                                        <?php require_once('componen/datauser/a.php'); ?>
                                        <input class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="Simpan"/>
                                    <?php else: ?>
                                        <input class="btn btn-sm btn-secondary disabled" value="Simpan"/>
                                <?php endif; ?>
                            
                            </form>
                        </td>
                    </tr>                                

                    <tr>
                        <th scope="row">2</th>
                        <td>Perbaikan</td>
                        <td><?=$count2;?></td>
                        <td>B</td>
                        <td>
                            <?php
                                if($row = mysqli_fetch_assoc($resault2)) {
                                    echo $row["datb"];
                                } else {
                                    echo "tidak ada data";
                                }
                            ?>
                        </td>
                        <td>
                            <?php if ($admin['status2'] == 1): ?>
                                <a href='componen/aktif_deaktif/b-.php?id=<?php echo $admin['id']; ?>' class='btn btn-sm btn-success'>Selesai</a>
                            <?php else: ?>
                                <a href='componen/aktif_deaktif/b.php?id=<?php echo $admin['id']; ?>' class='btn btn-sm btn-primary'>Mulai</a>
                            <?php endif;  ?>    
                        </td>
                        <td>
                            <form action="rekap.php" method="post">
                                <!-- Tambahkan input tersembunyi untuk nilai yang ingin Anda kirimkan -->
                                <input type="hidden" name="dataMeja" value="Perbaikan"/>
                                <input type="hidden" name="count" value="<?=$count2;?>"/>
                                <input type="hidden" name="dataType" value="B"/>
                                <input type="hidden" name="data" value="<?=($row ? $row["datb"] : 'tidak ada data');?>"/>

                                <?php 
                                    if ($admin['status2'] == 1): ?>
                                        <input class="btn btn-sm btn-primary" type="submit" value="Simpan"/>
                                    <?php else: ?>
                                        <input class="btn btn-sm btn-secondary disabled" type="submit" value="Simpan"/>
                                <?php endif; ?>
                            </form>
                        </td>
                    </tr>    
                </tbody>

                <table class="">
                </table>
            </div>
            
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