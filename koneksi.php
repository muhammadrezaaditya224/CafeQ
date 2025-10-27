<?php
$server = "localhost";
$user = "root";
$password = "12345";
$nama_database = "cafeq"; // ganti dengan nama database kamu

// Buat koneksi
$db = mysqli_connect($server, $user, $password, $nama_database);

// Cek koneksi
if (!$db) {
    die("<b style='color:red;'>Gagal terhubung dengan database:</b> " . mysqli_connect_error());
} else {
    echo "<b style='color:green;'>Koneksi ke database berhasil!</b>";
}
?>
