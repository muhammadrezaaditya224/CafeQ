<?php
// koneksi.php
// Sesuaikan credential berikut sesuai pengaturan XAMPP / database Anda
$host = 'localhost';
$user = 'root';
$pass = '12345';
$db   = 'cafeq'; // ganti dengan nama database Anda

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die('Koneksi gagal: (' . $koneksi->connect_errno . ') ' . $koneksi->connect_error);
}

$koneksi->set_charset('utf8mb4');

// Jika ingin menggunakan PDO, uncomment blok berikut dan komentar bagian mysqli di atas.
/*
try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Koneksi PDO gagal: ' . $e->getMessage());
}
*/
?>