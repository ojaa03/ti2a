<?php
include('../database/connection.php');

// Mendapatkan data penjualan
$query = "SELECT penjualan.*, produk.nama FROM penjualan JOIN produk ON penjualan.produk_id = produk.id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Laporan Penjualan</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
