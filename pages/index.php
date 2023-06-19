<?php
include('../database/connection.php');

// Mendapatkan daftar produk
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Penjualan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Hermun Pharmacy</h1>

    <nav>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="tambah_produk.php">Tambah Produk</a></li>
            <li><a href="laporan_penjualan.php">Laporan Penjualan</a></li>
            <li><a href="penjualan.php">Penjualan</a></li>
        </ul>
    </nav>

    <h2>Daftar Obat</h2>
    <table>
    <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th> <!-- Kolom baru -->
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td>
                <a href="hapus_produk.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus produk ini?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>



    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
