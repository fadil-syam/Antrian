<div class="container-fluid mt-5 pt-5">
  <div class="row  mt-4 ms-1">
    <div class="col-5 text-bg-primary">
      
      <div class="mt-3">
        <p class="fs-2 text-center mt-auto">NO ANTRIAN</p>
        <hr class="border border-3 opacity-75">
      </div>

      <div class="my-auto">
        <h1 class="title text-center my-auto" style="font-size:100px;">
          <?php
            // Cek apakah nilai GET sudah diberikan
            if (isset($_GET['kodea']) || isset($_GET['kodeb'])) {           
                if (isset($_GET['kodea'])) {
                    echo $_GET['kodea'];
                }
                if (isset($_GET['kodeb'])) {
                    echo $_GET['kodeb'];
                }
            } else {
                // Kedua nilai kosong atau belum diberikan
                echo "--";
            }
          ?>
    
        </h1>
      </div>           
      </div>
        <div class="col-7">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/fZEeBRYSGwY?si=M8McRkuV6yGLZhKI" title="YouTube video" allowfullscreen></iframe>
            </div>

    </div>
  </div>
</div>

<br>

<div class="row row-cols-1 row-cols-sm-5 m-0 p-0">
  <div class="col">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #4F709C">
      <h5 class="text-center mt-2 text-light my-auto">Pengaduan</h5>
      <hr class="shadow-xl mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">
          <?php 
              if (isset($_GET['kodea']) && !empty($_GET['kodea'])) {
                  $nilai = $_GET['kodea'];
                  echo $nilai;
              } else {
                  echo "--";
              } 

         
          ?>  
        </h1>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #FF3FA4">
      <h5 class="text-center mt-2 text-light my-auto">Perbaikan</h5>
      <hr class="shadow-xl mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">
          <?php if (isset($_GET['kodeb']) && !empty($_GET['kodeb'])) {
                  $nilai = $_GET['kodeb'];
                  echo $nilai;
              } else {
                  echo "--";
              } 
          ?>  
        </h1>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #FF9B82">
      <h5 class="text-center mt-2 text-light my-auto">Meet</h5>
      <hr class="shadow-xl mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">C0</h1>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #FFC8C8">
      <h5 class="text-center mt-2 text-light my-auto">Tamu</h5>
      <hr class="shadow-xl mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">D0</h1>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 15rem; height: 13rem; background-color: #E5D283">
      <h5 class="text-center mt-2 text-light my-auto">Pengambilan</h5>
      <hr class="shadow-xl mt-1">
      <div class="card-body">
        <h1 class="card-title text-center text-light my-auto">E0</h1>
      </div>
    </div>
  </div>
</div>

<br>
<br>

<p class="fs-1 text-center mt-5 pt-5">AMBIL ANTRIAN</p>
<center><hr class="w-75 border border-info border-3 opacity-75" style="center width: 15rem;"></center>

<center>
<div class="row row-cols-1 d-flex justify-content-evenly row-cols-sm-3 m-0 p-0">
  <div class="col mt-5"><?php require_once('input.php'); ?>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
      <div class="card" style="width:16rem; height:17rem; background-color: #4F709C">
        <h3 class="text-light my-auto">Pengaduan</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5"><?php require_once('input.php'); ?>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
      <div class="card" style="width:16rem; height:17rem; background-color: #FF3FA4">
        <h3 class="text-light my-auto">Perbaikan</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5"><?php require_once('input.php'); ?>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
      <div class="card" style="width:16rem; height:17rem; background-color: #E5D283">
        <h3 class="text-light my-auto">Meet</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
      <div class="card" style="width:16rem; height:17rem; background-color: #FFC8C8">
        <h3 class="text-light my-auto">Tamu</h3>
      </div>
    </button>
  </div>
  <div class="col mt-5">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
      <div class="card" style="width:16rem; height:17rem; background-color: #FF9B82">
        <h3 class="text-light my-auto">Pengambilan</h3>
      </div>
    </button>
  </div>
</div>
</center>