<br><br><br><br><br>
<div class="row m-0 p-0">
  <div class="col-lg-5 col-sm-11 pe-0 ">
    <div class="card bg-primary text-light" style="height: 450px;">
      <div class="my-auto">
      <p class="fs-2 text-center mt-auto pb-0">NO ANTRIAN</p>
      <hr class="shadow-xl border border-3 opacity-75 text-light mt-0 pt-0">
      </div>
      <div class="my-auto">
        <h1 class="card-title text-center">
          <?php
          //menampilkan kode yang besar
            // Cek apakah nilai GET sudah diberikan

            session_start();

            // ... Kode lainnya ...
             if (isset($_SESSION['kodea']) || isset($_SESSION['kodeb']) || isset($_SESSION['kodec']) || isset($_SESSION['koded']) || isset($_SESSION['kodee']) ){           
                if (isset($_SESSION['kodea'])) {
                    echo $_SESSION['kodea'];
                }
                if (isset($_SESSION['kodeb'])) {
                    echo $_SESSION['kodeb'];
                }
                if (isset($_SESSION['kodec'])) {
                  echo $_SESSION['kodec'];
                }
                if (isset($_SESSION['koded'])) {
                  echo $_SESSION['koded'];
                }
                if (isset($_SESSION['kodee'])) {
                  echo $_SESSION['kodee'];
                }
            } else {
                // semua nilai kosong atau belum diberikan
                echo "---";
            }
            

            // // Menampilkan data dari $_SESSION jika ada
            // if (isset($_SESSION['kodea']) || isset($_SESSION['kodeb']) ) {
            //     if (isset($_SESSION['kodeb'])) {
            //         echo $_SESSION['kodeb'];
            //     } else {
            //         echo "---";
            //     }

            

            // if (isset($_GET['kodea']) || isset($_GET['kodeb']) || isset($_GET['kodec']) || isset($_GET['koded']) || isset($_GET['kodee']) ){           
            //     if (isset($_GET['kodea'])) {
            //         echo $_GET['kodea'];
            //     }
            //     if (isset($_GET['kodeb'])) {
            //         echo $_GET['kodeb'];
            //     }
            //     if (isset($_GET['kodec'])) {
            //       echo $_GET['kodec'];
            //     }
            //     if (isset($_GET['koded'])) {
            //       echo $_GET['koded'];
            //     }
            //     if (isset($_GET['kodee'])) {
            //       echo $_GET['kodee'];
            //     }
            // } else {
            //     // Kedua nilai kosong atau belum diberikan
            //     echo "---";
            // }
          ?>          
        </h1>
      </div>
      <div class="my-auto">
      <hr class="shadow-xl border border-3 opacity-75 text-light mb-3 ">
      <p class="fs-2 text-center mb-auto pt-0">
          <?php
          //menampilkan tujuan yang besar
            if (isset($_GET['mejaa']) || isset($_GET['mejab']) || isset($_GET['mejac']) || isset($_GET['mejad']) || isset($_GET['mejae']) ){           
              if (isset($_GET['mejaa'])) {
                  echo $_GET['mejaa'];
              }
              if (isset($_GET['mejab'])) {
                  echo $_GET['mejab'];
              }
              if (isset($_GET['mejac'])) {
                echo $_GET['mejac'];
              }
              if (isset($_GET['mejad'])) {
                echo $_GET['mejad'];
              }
              if (isset($_GET['mejae'])) {
                echo $_GET['mejae'];
              }
            } else {
                // Kedua nilai kosong atau belum diberikan
                echo "---";
            }
          ?>          
      </p>
      </div>
    </div>
  </div>
  <div class="col-lg-7 col-sm-11"> 
    <div class="ratio ratio-16x9" style="height: 450px;">
      <iframe src="https://www.youtube.com/embed/fZEeBRYSGwY?si=M8McRkuV6yGLZhKI" title="YouTube video" allowfullscreen></iframe>
    </div>
  </div>
</div>
<br>

<!--  -->

<div class="row row-cols-sm-5 m-0 p-0">
  <div class="col-lg col-sm-11">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #4F709C">
      <h5 class="text-center mt-2 text-light my-auto">Pengaduan</h5>
      <hr class="shadow-xl text-light mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">
        <?php
        if (isset($_GET['kodea'])) {
            $nilai = $_GET['kodea'];

            // Gunakan $kodea sesuai kebutuhan (misalnya, tampilkan nilai)
            echo $nilai;
            echo "<br>";
            echo '<i class="bi bi-volume-up-fill"></i>
                  <audio autoplay>
                    <source src="audio/a/' . $nilai . '.m4a" type="audio/mp4">
                  </audio>';
            echo "<script>
            setTimeout(function(){
                window.location.href = 'admin/datauserloket.php';
            }, 5000);
            </script>";
            
        } else {
            // Handle ketika data tidak diterima
            echo "--";
        }
        ?>  
        </h1>
      </div>
    </div>
  </div>
  <div class="col-lg col-sm-11">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #22092C">
      <h5 class="text-center mt-2 text-light my-auto">Perbaikan</h5>
      <hr class="shadow-xl text-light mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">
          <?php if (isset($_GET['kodeb']) && !empty($_GET['kodeb'])) {
                  $nilai = $_GET['kodeb'];
                  echo $nilai;
                  echo "<br>";
                  echo '<i class="bi bi-volume-up-fill"></i>
                        <audio autoplay>
                          <source src="audio/a/' . $nilai . '.m4a" type="audio/mp4">
                        </audio>';
                  echo "<script>
                  setTimeout(function(){
                      window.location.href = 'admin/datauserloket/_datauserloket-b.php';
                  }, 5000);
                  </script>";
                  
              } else {
                  // Handle ketika data tidak diterima
                  echo "--";
              } 
          ?>  
        </h1>
      </div>
    </div>
  </div>
  <div class="col-lg col-sm-11">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #872341">
      <h5 class="text-center mt-2 text-light my-auto">Meet</h5>
      <hr class="shadow-xl text-light mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">
        <?php if (isset($_GET['kodec']) && !empty($_GET['kodec'])) {
                  $nilai = $_GET['kodec'];
                  echo $nilai;
                  echo "<br>";
                  echo '<i class="bi bi-volume-up-fill"></i>
                        <audio autoplay>
                          <source src="audio/a/' . $nilai . '.m4a" type="audio/mp4">
                        </audio>';
                  echo "<script>
                  setTimeout(function(){
                      window.location.href = 'admin/datauserloket/_datauserloket-c.php';
                  }, 5000);
                  </script>";
                  
              } else {
                  // Handle ketika data tidak diterima
                  echo "--";
              } 
          ?>  
        </h1>
      </div>
    </div>
  </div>
  <div class="col-lg col-sm-11">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #BE3144">
      <h5 class="text-center mt-2 text-light my-auto">Tamu</h5>
      <hr class="shadow-xl text-light mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">
        <?php if (isset($_GET['koded']) && !empty($_GET['koded'])) {
                  $nilai = $_GET['koded'];
                  echo $nilai;
                  echo "<br>";
                  echo '<i class="bi bi-volume-up-fill"></i>
                        <audio autoplay>
                          <source src="audio/a/' . $nilai . '.m4a" type="audio/mp4">
                        </audio>';
                  echo "<script>
                  setTimeout(function(){
                      window.location.href = 'admin/datauserloket/_datauserloket-d.php';
                  }, 5000);
                  </script>";
                  
              } else {
                  // Handle ketika data tidak diterima
                  echo "--";
              } 
          ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="col-lg col-sm-11">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #F05941">
      <h5 class="text-center mt-2 text-light my-auto">Pengambilan</h5>
      <hr class="shadow-xl text-light mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">
        <?php if (isset($_GET['kodee']) && !empty($_GET['kodee'])) {
                  $nilai = $_GET['kodee'];
                  echo $nilai;
                  echo "<br>";
                  echo '<i class="bi bi-volume-up-fill"></i>
                        <audio autoplay>
                          <source src="audio/a/' . $nilai . '.m4a" type="audio/mp4">
                        </audio>';
                  echo "<script>
                  setTimeout(function(){
                      window.location.href = 'admin/datauserloket/_datauserloket-e.php';
                  }, 5000);
                  </script>";
                  
              } else {
                  // Handle ketika data tidak diterima
                  echo "--";
              } 
          ?>
        </h1>
      </div>
    </div>
  </div>
</div>

<br>
<br>

<p class="fs-1 text-center mt-5 pt-5">AMBIL ANTRIAN</p>
<center><hr class="w-75 border border-info border-3 opacity-75" style="center width: 15rem;"></center>

<center>
<div class="row row-cols-lg-3 row-cols-sm-1 d-flex justify-content-evenly m-0 p-0">
<?php require_once('input.php'); ?>
  <div class="col mt-5">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
      <div class="card" style="width:16rem; height:17rem; background-color: #4F709C">
        <h3 class="text-light my-auto">Pengaduan</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
      <div class="card" style="width:16rem; height:17rem; background-color: #22092C">
        <h3 class="text-light my-auto">Perbaikan</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
      <div class="card" style="width:16rem; height:17rem; background-color: #872341">
        <h3 class="text-light my-auto">Meet</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
      <div class="card" style="width:16rem; height:17rem; background-color: #BE3144">
        <h3 class="text-light my-auto">Tamu</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
      <div class="card" style="width:16rem; height:17rem; background-color: #F05941">
        <h3 class="text-light my-auto">Pengambilan</h3>
      </div>
    </button>
  </div>
</div>
</center>
<script>
    $('document').ready(function() {
        setInterval(function() {
            getPegawai()
        }, 200)
    });

    function getPegawai()
    {
        $.ajax({
            url: "admin/datauserloket.php",
            type: "GET",
            success: function(response) {
                $('#live_data').html(response)
            }
        });
    }
</script>