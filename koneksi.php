<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pesan";

// Sementara nonaktifkan mysqli_report jika error
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi, 'utf8mb4');
?>
