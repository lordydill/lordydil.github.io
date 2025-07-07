<?php
include 'koneksi.php';

$nama    = $_POST['nama'];
$telepon = $_POST['telepon'];
$produk  = $_POST['produk'];
$jumlah  = $_POST['jumlah'];

// Penentuan keterangan
if ($jumlah >= 5) {
    $keterangan = "Butuh konfirmasi";
} else {
    $keterangan = "Langsung diproses";
}

// Query simpan
$sql = "INSERT INTO pesanan (nama, telepon, produk, jumlah, keterangan) 
        VALUES ('$nama', '$telepon', '$produk', '$jumlah', '$keterangan')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan. <a href='tabel.php'>Lihat Pesanan</a>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
