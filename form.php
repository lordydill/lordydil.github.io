<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan</title>
</head>
<body>
    <form action="hasil.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="telepon"><br><br>

        <label>Produk:</label><br>
        <select name="produk">
            <option value="Laptop">Laptop</option>
            <option value="Handphone">Handphone</option>
            <option value="Tablet">Tablet</option>
        </select><br><br>

        <label>Jumlah:</label><br>
        <input type="number" name="jumlah"><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
