<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data yang dikirimkan
    $data = $_POST['data'];

    // Kirim data ke file B (simpan_data.php)
    $url = 'http://localhost/antrian/percob/p.php'; // Ganti sesuai dengan URL file B
    $postdata = http_build_query(array('data' => $data));
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Tanggapi respon dari file B
    echo $result;
} else {
    // Jika bukan metode POST, keluarkan pesan kesalahan
    echo "Metode tidak valid.";
}
?>
