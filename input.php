<?php require_once('conneksi.php')?>

<!-- A -->
<?php
$query = "SELECT kodea FROM loketa ORDER BY kodea DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['kodea'];
if(empty($lastid))
{
    $number = "A-01";
}
else
{
    $idd = str_replace("A-", "", $lastid);
    $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
    $number = 'A-'.$id;
}
?>
<?php

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if ((!empty($_POST['a']))) {
        $kodea = $_POST['kodea'];
        $mejaa = $_POST['mejaa'];   
        $data = $_POST['data'];

    if(!$conn)
    {
        die("connection failed " . mysqli_connect_error());
    }
    else
    {
        $sql = "insert into loketa(kodea,mejaa,data)VALUES('".$kodea."','".$mejaa."','".$data."') ";
        if(mysqli_query($conn,$sql))
        {
            $query = "SELECT kodea FROM loketa ORDER BY kodea DESC";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            $lastid = $row['kodea'];

            if(empty($lastid))
            {
                $number = "A-01";
            }
            else
            {
                $idd = str_replace("A-", "", $lastid);
                $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
                $number = 'A-'.$id;
            }

        }
    }
}

}
?>
<div align="left" class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Info Antrian Mu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post" id="live_data">
      <input type="hidden" name="a" value="a">

        <div class="modal-body">
            <div align="left">
                <label>Kode No</label>
                <input type="text" class="form-control" name="kodea" id="kodea" style=" font-size: 16px; color: blue; font-weight: bold; "  value="<?php echo $number; ?>" readonly >
            </div>
            <input type="hidden"  name="mejaa" value="Pengaduan">
            <div align="left" class="mb-3">
                <label>Loket</label>
                <input type="text" class="form-control" value="Pengaduan" disabled> 
            </div>
            <input type="hidden" name="data" value="<?php echo  date ("d/F/o"); ?>">
            <div align="left">
                <label>Hari/Tanggal/Tahun</label>
                <input type="text" class="form-control" value="<?php echo  date ("d/F/o"); ?>" disabled>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" value="ADD">Ambil Antrian</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- B -->
<?php
$query = "SELECT kodeb FROM loketb ORDER BY kodeb DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['kodeb'];
if(empty($lastid))
{
    $number = "B-01";
}
else
{
    $idd = str_replace("B-", "", $lastid);
    $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
    $number = 'B-'.$id;
}
?>
<?php

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if (!empty($_POST['b'])) {
        $kodeb = $_POST['kodeb'];
        $mejab = $_POST['mejab'];   
        $datb  = $_POST['datb'];

    if(!$conn)
    {
        die("connection failed " . mysqli_connect_error());
    }
    else
    {
        $sql = "insert into loketb(kodeb,mejab,datb)VALUES('".$kodeb."','".$mejab."','".$datb."') ";
        if(mysqli_query($conn,$sql))
        {
            $query = "SELECT kodeb FROM loketb ORDER BY kodeb DESC";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            $lastid = $row['kodeb'];

            if(empty($lastid))
            {
                $number = "B-01";
            }
            else
            {
                $idd = str_replace("B-", "", $lastid);
                $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
                $number = 'B-'.$id;
            }

        }
    }
}
}

?>
<div align="left" class="modal fade" id="staticBackdrop-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Info Antrian Mu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="hidden" name="b" value="b">
        <div class="modal-body">
            <div align="left">
                <label>Kode No</label>
                <input type="text" class="form-control" name="kodeb" id="kodeb" style=" font-size: 16px; color: blue; font-weight: bold; "  value="<?php echo $number; ?>" readonly >
            </div>
            <input type="hidden"  name="mejab" value="Perbaikan">
            <div align="left" class="mb-3">
                <label>Loket</label>
                <input type="text" class="form-control" value="Perbaikan" disabled> 
            </div>
            <input type="hidden" name="datb" value="<?php echo  date ("d/F/o"); ?>">
            <div align="left">
                <label>Hari/Tanggal/Tahun</label>
                <input type="text" class="form-control" value="<?php echo  date ("d/F/o"); ?>" disabled>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" value="ADD">Ambil Antrian</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- C -->
<?php
$query = "SELECT kodec FROM loketc ORDER BY kodec DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['kodec'];
if(empty($lastid))
{
    $number = "C-01";
}
else
{
    $idd = str_replace("C-", "", $lastid);
    $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
    $number = 'C-'.$id;
}
?>
<?php

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if (!empty($_POST['c'])) {
        $kodec = $_POST['kodec'];
        $mejac = $_POST['mejac'];   
        $datc  = $_POST['datc'];

    if(!$conn)
    {
        die("connection failed " . mysqli_connect_error());
    }
    else
    {
        $sql = "insert into loketc(kodec,mejac,datc)VALUES('".$kodec."','".$mejac."','".$datc."') ";
        if(mysqli_query($conn,$sql))
        {
            $query = "SELECT kodec FROM loketc ORDER BY kodec DESC";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            $lastid = $row['kodec'];

            if(empty($lastid))
            {
                $number = "C-01";
            }
            else
            {
                $idd = str_replace("C-", "", $lastid);
                $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
                $number = 'C-'.$id;
            }

        }
    }
}
}

?>
<div align="left" class="modal fade" id="staticBackdrop-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Info Antrian Mu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="hidden" name="c" value="c">
        <div class="modal-body">
            <div align="left">
                <label>Kode No</label>
                <input type="text" class="form-control" name="kodec" id="kodec" style=" font-size: 16px; color: blue; font-weight: bold;" value="<?php echo $number; ?>" readonly >
            </div>
            <input type="hidden"  name="mejac" value="meet">
            <div align="left" class="mb-3">
                <label>Loket</label>
                <input type="text" class="form-control" value="meet" disabled> 
            </div>
            <input type="hidden" name="datc" value="<?php echo  date ("d/F/o"); ?>">
            <div align="left">
                <label>Hari/Tanggal/Tahun</label>
                <input type="text" class="form-control" value="<?php echo  date ("d/F/o"); ?>" disabled>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" value="ADD">Ambil Antrian</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- D -->
<?php
$query = "SELECT koded FROM loketd ORDER BY koded DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['koded'];
if(empty($lastid))
{
    $number = "D-01";
}
else
{
    $idd = str_replace("D-", "", $lastid);
    $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
    $number = 'D-'.$id;
}
?>
<?php

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if (!empty($_POST['d'])) {
        $koded = $_POST['koded'];
        $mejad = $_POST['mejad'];   
        $datd  = $_POST['datd'];

    if(!$conn)
    {
        die("connection failed " . mysqli_connect_error());
    }
    else
    {
        $sql = "insert into loketd(koded,mejad,datd)VALUES('".$koded."','".$mejad."','".$datd."') ";
        if(mysqli_query($conn,$sql))
        {
            $query = "SELECT koded FROM loketd ORDER BY koded DESC";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            $lastid = $row['koded'];

            if(empty($lastid))
            {
                $number = "D-01";
            }
            else
            {
                $idd = str_replace("D-", "", $lastid);
                $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
                $number = 'D-'.$id;
            }

        }
    }
}
}

?>
<div align="left" class="modal fade" id="staticBackdrop-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Info Antrian Mu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="hidden" name="d" value="d">
        <div class="modal-body">
            <div align="left">
                <label>Kode No</label>
                <input type="text" class="form-control" name="koded" id="koded" style=" font-size: 16px; color: blue; font-weight: bold;" value="<?php echo $number; ?>" readonly >
            </div>
            <input type="hidden"  name="mejad" value="Tamu">
            <div align="left" class="mb-3">
                <label>Loket</label>
                <input type="text" class="form-control" value="Tamu" disabled> 
            </div>
            <input type="hidden" name="datd" value="<?php echo  date ("d/F/o"); ?>">
            <div align="left">
                <label>Hari/Tanggal/Tahun</label>
                <input type="text" class="form-control" value="<?php echo  date ("d/F/o"); ?>" disabled>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" value="ADD">Ambil Antrian</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- E -->
<?php
$query = "SELECT kodee FROM lokete ORDER BY kodee DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['kodee'];
if(empty($lastid))
{
    $number = "E-01";
}
else
{
    $idd = str_replace("E-", "", $lastid);
    $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
    $number = 'E-'.$id;
}
?>
<?php

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    if (!empty($_POST['e'])) {
        $kodee = $_POST['kodee'];
        $mejae = $_POST['mejae'];   
        $date  = $_POST['date'];

    if(!$conn)
    {
        die("connection failed " . mysqli_connect_error());
    }
    else
    {
        $sql = "insert into lokete(kodee,mejae,date)VALUES('".$kodee."','".$mejae."','".$date."') ";
        if(mysqli_query($conn,$sql))
        {
            $query = "SELECT kodee FROM lokete ORDER BY kodee DESC";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            $lastid = $row['kodee'];

            if(empty($lastid))
            {
                $number = "E-01";
            }
            else
            {
                $idd = str_replace("E-", "", $lastid);
                $id = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
                $number = 'E-'.$id;
            }

        }
    }
}
}

?>
<div align="left" class="modal fade" id="staticBackdrop-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Info Antrian Mu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="hidden" name="e" value="e">
        <div class="modal-body">
            <div align="left">
                <label>Kode No</label>
                <input type="text" class="form-control" name="kodee" id="kodee" style=" font-size: 16px; color: blue; font-weight: bold;" value="<?php echo $number; ?>" readonly >
            </div>
            <input type="hidden"  name="mejae" value="Pengambilan">
            <div align="left" class="mb-3">
                <label>Loket</label>
                <input type="text" class="form-control" value="Pengambilan" disabled> 
            </div>
            <input type="hidden" name="date" value="<?php echo  date ("d/F/o"); ?>">
            <div align="left">
                <label>Hari/Tanggal/Tahun</label>
                <input type="text" class="form-control" value="<?php echo  date ("d/F/o"); ?>" disabled>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" value="ADD">Ambil Antrian</button>
        </div>
      </form>
    </div>
  </div>
</div>
