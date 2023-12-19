<?php
$connect = mysqli_connect("localhost", "root", "", "itk");

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the data (you may want to implement more robust validation)
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $nama_proses = mysqli_real_escape_string($connect, $_POST['nama_proses']);
    $klasifikasi_perubahan = mysqli_real_escape_string($connect, $_POST['klasifikasi_perubahan']);
    $pelaksanaan2ndQA = mysqli_real_escape_string($connect, $_POST['pelaksanaan2ndQA']);
    $item_perubahan = mysqli_real_escape_string($connect, $_POST['item_perubahan']);
    $no_lembar_instruksi = mysqli_real_escape_string($connect, $_POST['no_lembar_instruksi']);
    $tanggal_produksi_saat_perubahan = mysqli_real_escape_string($connect, $_POST['tanggal_produksi_saat_perubahan']);
    $shiftt = mysqli_real_escape_string($connect, $_POST['shiftt']);
    $part_number_finish_good = mysqli_real_escape_string($connect, $_POST['part_number_finish_good']);
    $kualitas = mysqli_real_escape_string($connect, $_POST['kualitas']);
    $fakta_ng = mysqli_real_escape_string($connect, $_POST['fakta_ng']);
    $pcdt = mysqli_real_escape_string($connect, $_POST['pcdt']);
    $tanggal_perubahan_pcdt = mysqli_real_escape_string($connect, $_POST['tanggal_perubahan_pcdt']);
    $instruksi_kerja = mysqli_real_escape_string($connect, $_POST['instruksi_kerja']);
    $tanggal_perubahan_instruksi_kerja = mysqli_real_escape_string($connect, $_POST['tanggal_perubahan_instruksi_kerja']);
    $isir = mysqli_real_escape_string($connect, $_POST['isir']);
    $tanggal_perubahan_isir = mysqli_real_escape_string($connect, $_POST['tanggal_perubahan_isir']);
    $pemahaman = mysqli_real_escape_string($connect, $_POST['pemahaman']);
    $ulasan = mysqli_real_escape_string($connect, $_POST['ulasan']);

    // Perform the database query
    $query = "INSERT INTO line1 (name, price, nama_proses, klasifikasi_perubahan, pelaksanaan2ndQA, 
                item_perubahan, no_lembar_instruksi, tanggal_produksi_saat_perubahan, shiftt, 
                part_number_finish_good, kualitas, fakta_ng, pcdt, tanggal_perubahan_pcdt, 
                instruksi_kerja, tanggal_perubahan_instruksi_kerja, isir, tanggal_perubahan_isir, 
                pemahaman, ulasan) 
              VALUES ('$name', '$price', '$nama_proses', '$klasifikasi_perubahan', '$pelaksanaan2ndQA', 
                '$item_perubahan', '$no_lembar_instruksi', '$tanggal_produksi_saat_perubahan', '$shiftt', 
                '$part_number_finish_good', '$kualitas', '$fakta_ng', '$pcdt', '$tanggal_perubahan_pcdt', 
                '$instruksi_kerja', '$tanggal_perubahan_instruksi_kerja', '$isir', '$tanggal_perubahan_isir', 
                '$pemahaman', '$ulasan')";

    if (mysqli_query($connect, $query)) {
        // Successful insertion
        echo "Data inserted successfully!";
    } else {
        // Error in insertion
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}
