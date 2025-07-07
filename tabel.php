<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM pesanan ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR PESANAN</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 6px;
        }
    </style>
</head>
<body>
    <h2>DAFTAR PESANAN</h2>
    <table>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>telepon</th>
            <th>produk</th>
            <th>jumlah</th>
            <th>keterangan</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['telepon']}</td>
                    <td>{$row['produk']}</td>
                    <td>{$row['jumlah']}</td>
                    <td>{$row['keterangan']}</td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
