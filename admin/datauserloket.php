<?php
include "../conneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($conn,"INSERT INTO dysable set 
    statusa = '$_POST[proses]' ");
}
            
session_start();

// Set session variable yang menandakan bahwa pengguna diizinkan untuk mengakses halaman tujuan
$_SESSION['allow_navigation'] = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>datauser loket A</title>
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
                    <a href="dataantrian.php" class="nav-item nav-link"><i class="bi bi-credit-card-2-front-fill me-2"></i>Antrian</a>
                    <a href="datauser.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="bi bi-volume-up-fill me-2"></i>Pangil Antrian</a>                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="datauserloket.php" class="dropdown-item active">Loket 1</a>
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
            
            <div class="container">
                <br>
                <table class="table caption-top">
                <caption>Panggil Antrian Pengaduan di Loket A</caption>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Kode.Antrian</th>
                    <th scope="col">Panggil</th>
                    <th scope="col">Panggil.Ulang</th>
                    <th scope="col">Aksi</th>
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
                                <?php if($data['statusa'] == 0) { ?>
                                    <button class="btn btn-sm btn-primary" id="pangil">pangil</button>
                                <?php } ?>
                                <!-- <a id="playButton" href="../indexs.php?kodea=<?= $data["kodea"]?>"> -->
                                <!-- <button class="btn btn-primary">Panggil</button> -->
                                <!-- <audio id="audioPlayer" src="../audio/a/<?= $data['kodea'];?>.m4a" type="audio/mp4"></audio> -->
                            </td>
                            <td>
                                <button id="playButton2" class="btn btn-warning">Panggil.Ulang</button>
                                <audio id="audioPlayer2" src="../audio/a/<?= $data['kodea'];?>.m4a" type="audio/mp4"></audio>
                            </td>
                            <td><div class="form-check"><input class="form-check-input" type="checkbox"></div></td>
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

    <script>
        // document.getElementById('playButton').addEventListener('click', function() {
        //     var audioPlayer = document.getElementById('audioPlayer');

        //     // Memeriksa apakah audio sedang diputar atau tidak
        //     if (audioPlayer.paused) {
        //         audioPlayer.play(); // Memulai pemutaran audio
        //     } else {
        //         audioPlayer.pause(); // Menghentikan pemutaran audio
        //         audioPlayer.currentTime = 0; // Mengatur posisi audio kembali ke awal
        //     }
        // });

        document.getElementById('playButton2').addEventListener('click', function() {
            var audioPlayer = document.getElementById('audioPlayer2');

            // Memeriksa apakah audio sedang diputar atau tidak
            if (audioPlayer.paused) {
                audioPlayer.play(); // Memulai pemutaran audio
            } else {
                audioPlayer.pause(); // Menghentikan pemutaran audio
                audioPlayer.currentTime = 0; // Mengatur posisi audio kembali ke awal
            }
        });
        document.getElementById('pangil').addEventListener('click', ()=>{
            // document.getElementById('pangil').classList.toggle('btn-dark');
            // document.getElementById('pangil').innerHTML = "disabled";
            // document.getElementById('pangil').append(document.createElement('button').innerHTML = "disabled")

            document.getElementById('pangil').style.display = "none";
            // document.getElementById('pangil').append(document.createElement('button').innerHTML = "disabled")

        })
    </script>
    
     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="atribut/main.js"></script>
</body>

</html>


