<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id = $id";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>