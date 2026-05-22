<?php
include 'koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_sepatu = $_POST['nama_sepatu'];
    $merk = $_POST['merk'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "UPDATE shoes SET 
              nama_sepatu = '$nama_sepatu',
              merk = '$merk',
              ukuran = '$ukuran',
              warna = '$warna',
              harga = '$harga',
              stok = '$stok'
              WHERE id = $id";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil diupdate!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>