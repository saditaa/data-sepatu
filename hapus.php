<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM shoes WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location.href = 'index.php';
          </script>";
} else {
    echo "Gagal: " . mysqli_error($koneksi);
}
?>