<?php
    include("../../conneksi.php");

    //a
    if (isset($_GET['kodea']) && isset($_GET['mejaa'])) {
        $kode = mysqli_real_escape_string($conn, $_GET['kodea']);
        $meja = mysqli_real_escape_string($conn, $_GET['mejaa']);
    
        // Ambil data status dari database
        $result = mysqli_query($conn, "SELECT status FROM loketa WHERE kodea = '$kode'");
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];

        // Jika status adalah 0, update database dan redirect ke index.php
        if ($status == 0) {
            // Update database
            mysqli_query($conn, "UPDATE loketa SET status = 1 WHERE kodea = '$kode'");

            // Simpan data ke dalam $_SESSION
            session_start();
            $_SESSION['kodea'] = $kode;
            $_SESSION['mejaa'] = $meja;

            // Redirect to index.php with updated parameters
            header("Location: ../../index.php?kodea=$kode&mejaa=$meja");
            exit();
        } else {
            // Jika status adalah 1, tampilkan pesan bahwa data sudah diaktifkan
            echo "Data sudah diaktifkan.";
        }
    } else {
            // Handle when data is not received
            echo "Data tidak diterima.";
    }

    //B
    if (isset($_GET['kodeb']) && isset($_GET['mejab'])) {
        $kodeb = mysqli_real_escape_string($conn, $_GET['kodeb']);
        $mejab = mysqli_real_escape_string($conn, $_GET['mejab']);
    
        // Ambil data status dari database
        $result = mysqli_query($conn, "SELECT status FROM loketb WHERE kodeb = '$kodeb'");
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];

        // Jika status adalah 0, update database dan redirect ke index.php
        if ($status == 0) {
            // Update database
            mysqli_query($conn, "UPDATE loketb SET status = 1 WHERE kodeb = '$kodeb'");

            // Simpan data ke dalam $_SESSION
            session_start();
            $_SESSION['kodeb'] = $kodeb;
            $_SESSION['mejab'] = $mejab;

            // Redirect to index.php with updated parameters
            header("Location: ../../index.php?kodeb=$kodeb&mejab=$mejab");
            exit();
        } else {
            // Jika status adalah 1, tampilkan pesan bahwa data sudah diaktifkan
            echo "Data sudah diaktifkan.";
        }
    } else {
            // Handle when data is not received
            echo "Data tidak diterima.";
    }

    //C
    if (isset($_GET['kodec']) && isset($_GET['mejac'])) {
        $kodec = mysqli_real_escape_string($conn, $_GET['kodec']);
        $mejac = mysqli_real_escape_string($conn, $_GET['mejac']);
    
        // Ambil data status dari database
        $result = mysqli_query($conn, "SELECT status FROM loketc WHERE kodec = '$kodec'");
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];

        // Jika status adalah 0, update database dan redirect ke index.php
        if ($status == 0) {
            // Update database
            mysqli_query($conn, "UPDATE loketc SET status = 1 WHERE kodec = '$kodec'");

            // Redirect to index.php with updated parameters
            header("Location: ../../index.php?kodec=$kodec&mejac=$mejac");
            exit();
        } else {
            // Jika status adalah 1, tampilkan pesan bahwa data sudah diaktifkan
            echo "Data sudah diaktifkan.";
        }
    } else {
            // Handle when data is not received
            echo "Data tidak diterima.";
    }

    //D
    if (isset($_GET['koded']) && isset($_GET['mejad'])) {
        $koded = mysqli_real_escape_string($conn, $_GET['koded']);
        $mejad = mysqli_real_escape_string($conn, $_GET['mejad']);
    
        // Ambil data status dari database
        $result = mysqli_query($conn, "SELECT status FROM loketd WHERE koded = '$koded'");
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];

        // Jika status adalah 0, update database dan redirect ke index.php
        if ($status == 0) {
            // Update database
            mysqli_query($conn, "UPDATE loketd SET status = 1 WHERE koded = '$koded'");

            // Redirect to index.php with updated parameters
            header("Location: ../../index.php?koded=$koded&mejad=$mejad");
            exit();
        } else {
            // Jika status adalah 1, tampilkan pesan bahwa data sudah diaktifkan
            echo "Data sudah diaktifkan.";
        }
    } else {
            // Handle when data is not received
            echo "Data tidak diterima.";
    }

    //D
    if (isset($_GET['kodee']) && isset($_GET['mejae'])) {
        $kodee = mysqli_real_escape_string($conn, $_GET['kodee']);
        $mejae = mysqli_real_escape_string($conn, $_GET['mejae']);
    
        // Ambil data status dari database
        $result = mysqli_query($conn, "SELECT status FROM lokete WHERE kodee = '$kodee'");
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];

        // Jika status adalah 0, update database dan redirect ke index.php
        if ($status == 0) {
            // Update database
            mysqli_query($conn, "UPDATE lokete SET status = 1 WHERE kodee = '$kodee'");

            // Redirect to index.php with updated parameters
            header("Location: ../../index.php?kodee=$kodee&mejae=$mejae");
            exit();
        } else {
            // Jika status adalah 1, tampilkan pesan bahwa data sudah diaktifkan
            echo "Data sudah diaktifkan.";
        }
    } else {
            // Handle when data is not received
            echo "Data tidak diterima.";
    }
    
?>