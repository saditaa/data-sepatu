<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_sepatu = $_POST['nama_sepatu'];
    $merk = $_POST['merk'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO shoes (nama_sepatu, merk, ukuran, warna, harga, stok) 
              VALUES ('$nama_sepatu', '$merk', '$ukuran', '$warna', '$harga', '$stok')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil disimpan!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>