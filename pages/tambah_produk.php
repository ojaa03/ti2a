<?php
include('../database/connection.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO produk (nama, harga, stok) VALUES ('$nama', '$harga', '$stok')";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Ketersediaan Obat </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Tambah Ketersediaan Obat</h1>

    <form method="POST">
        <label for="nama">Nama Obat:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="harga">Harga Obat:</label>
        <input type="number" name="harga" id="harga" required>

        <label for="stok">Stok Obat:</label>
        <input type="number" name="stok" id="stok" required>

        <input type="submit" name="submit" value="Tambahkan">
    </form>

    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
