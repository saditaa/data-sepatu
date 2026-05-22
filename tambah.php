<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Sepatu</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f5f5f5; }
        .container { max-width: 500px; margin: auto; background: white; padding: 25px; border-radius: 8px; }
        h1 { color: #333; }
        input { width: 100%; padding: 10px; margin: 5px 0; box-sizing: border-box; }
        .btn { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-simpan { background: #28a745; color: white; }
        .btn-batal { background: #6c757d; color: white; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Sepatu</h1>
        <form method="POST" action="proses_tambah.php">
            <label>Nama Sepatu</label>
            <input type="text" name="nama_sepatu" required>
            
            <label>Merk</label>
            <input type="text" name="merk" required>
            
            <label>Ukuran</label>
            <input type="number" name="ukuran" required>
            
            <label>Warna</label>
            <input type="text" name="warna" required>
            
            <label>Harga (Rp)</label>
            <input type="number" name="harga" required>
            
            <label>Stok</label>
            <input type="number" name="stok" required>
            
            <br><br>
            <button type="submit" class="btn btn-simpan" name="simpan">Simpan</button>
            <a href="index.php" class="btn btn-batal">Batal</a>
        </form>
    </div>
</body>
</html>