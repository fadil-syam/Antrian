<?php
include "../conneksi.php";
include "crud.php";

session_start();
// Periksa jika pengguna belum login, redirect ke halaman login jika belum
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $datameja = $_POST["dataMeja"];
    $count = $_POST["count"];
    $dataType = $_POST["dataType"];
    $data = $_POST["data"];

    // Simpan data ke dalam file
    $content = "DataMeja: $datameja, Count: $count, DataType: $dataType, Data: $data\n";
    file_put_contents("rekap_data.txt", $content, FILE_APPEND);

    // Hapus semua data dari tabel loketa
    $hapus_query = "DELETE FROM loketa WHERE mejaa = '$datameja'";
    $hapus_query = "DELETE FROM loketb WHERE mejab = '$datameja'";
    $hapus_query = "DELETE FROM loketc WHERE mejac = '$datameja'";
    $hapus_query = "DELETE FROM loketd WHERE mejad = '$datameja'";
    $hapus_query = "DELETE FROM lokete WHERE mejae = '$datameja'";
    $hapus_result = mysqli_query($conn, $hapus_query);

    // Memeriksa hasil query penghapusan data
    if ($hapus_result) {
        echo "Data berhasil dipindahkan ke rekap_data.txt dan dihapus dari tabel loketa.";
    } else {
        echo "Terjadi kesalahan saat menghapus data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rekap Antrian</title>
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
                        <span><?= $_SESSION['username']; ?>!</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="../index.php" class="nav-item nav-link"><i class="bi bi-credit-card-2-front-fill me-2"></i>Antrian</a>
                    <a href="datauser.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Pengaturan</a>
                    <div class="nav-item dropdown">
                        <a href="datauserloket.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-volume-up-fill me-2"></i>Pangil Antrian</a>
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
                    <a href="rekap.php" class="nav-item nav-link active"><i class="bi bi-folder-fill me-2"></i>Rekap Antrian</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <?php require_once('atribut/_navbar.php'); ?>
            <!-- Blank Start -->
            <div class="container">
                <h2>Rekap Data</h2>
                
                <table class="table caption-top">
                <caption>Rekap Pengunjung Yang Datang</caption>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Jml.Antrian</th>
                    <th scope="col">Meja</th>
                    <th scope="col">Tanggal.Bulan.Tahun</th>
                    <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        // Baca data dari file "rekap_data.txt" dan tampilkan dalam tabel
                        $rekapData = file_get_contents("rekap_data.txt");
                        $lines = explode("\n", $rekapData);

                        foreach ($lines as $index => $line) {
                            if (!empty($line)) {
                                $columns = explode(",", $line);
                    ?>    
                    <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                        <td><?= trim(explode(":", $columns[0])[1]); ?></td>
                        <td><?= trim(explode(":", $columns[1])[1]); ?></td>
                        <td><?= trim(explode(":", $columns[2])[1]); ?></td>
                        <td><?= trim(explode(":", $columns[3])[1]); ?></td>
                        <td>
                            <form method="post" action="hapus_baris.php">
                                <input type="hidden" name="index" value="<?= $index ?>">
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus baris ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php } } ?>
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

     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="atribut/main.js"></script>
</body>

</html>