<?php
include('../database/connection.php');

// Mendapatkan daftar produk
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

if (isset($_POST['submit'])) {
    $produk_id = $_POST['produk_id'];
    $jumlah = $_POST['jumlah'];

    // Mengurangi stok produk
    $query = "UPDATE produk SET stok = stok - $jumlah WHERE id = $produk_id";
    mysqli_query($conn, $query);

    // Menyimpan data penjualan
    $tanggal = date('Y-m-d');
    $query = "INSERT INTO penjualan (tanggal, produk_id, jumlah) VALUES ('$tanggal', '$produk_id', '$jumlah')";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Penjualan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Penjualan</h1>

    <form method="POST">
        <label for="produk_id">Nama Obat:</label>
        <select name="produk_id" id="produk_id" required>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
            <?php endwhile; ?>
        </select>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required>

        <input type="submit" name="submit" value="Jual">
    </form>

    <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
