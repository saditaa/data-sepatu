<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM shoes WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Sepatu</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f5f5f5; }
        .container { max-width: 500px; margin: auto; background: white; padding: 25px; border-radius: 8px; }
        h1 { color: #333; }
        input { width: 100%; padding: 10px; margin: 5px 0; box-sizing: border-box; }
        .btn { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-update { background: #ffc107; color: #333; }
        .btn-batal { background: #6c757d; color: white; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Sepatu</h1>
        <form method="POST" action="proses_edit.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <label>Nama Sepatu</label>
            <input type="text" name="nama_sepatu" value="<?php echo $row['nama_sepatu']; ?>" required>
            
            <label>Merk</label>
            <input type="text" name="merk" value="<?php echo $row['merk']; ?>" required>
            
            <label>Ukuran</label>
            <input type="number" name="ukuran" value="<?php echo $row['ukuran']; ?>" required>
            
            <label>Warna</label>
            <input type="text" name="warna" value="<?php echo $row['warna']; ?>" required>
            
            <label>Harga (Rp)</label>
            <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required>
            
            <label>Stok</label>
            <input type="number" name="stok" value="<?php echo $row['stok']; ?>" required>
            
            <br><br>
            <button type="submit" class="btn btn-update" name="update">Update</button>
            <a href="index.php" class="btn btn-batal">Batal</a>
        </form>
    </div>
</body>
</html>