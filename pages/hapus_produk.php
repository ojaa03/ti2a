<?php
include('../database/connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus produk berdasarkan ID
    $query = "DELETE FROM produk WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>
