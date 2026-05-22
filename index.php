<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Sepatu - Data Sepatu</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        h1 { color: #333; }
        .container { max-width: 1000px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 2px; }
        .btn-tambah { background-color: #28a745; color: white; }
        .btn-edit { background-color: #ffc107; color: #333; }
        .btn-hapus { background-color: #dc3545; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Penjualan Sepatu</h1>
        <a href="tambah.php" class="btn btn-tambah">+ Tambah Sepatu Baru</a>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sepatu</th>
                    <th>Merk</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = "SELECT * FROM shoes ORDER BY id DESC";
                $result = mysqli_query($koneksi, $query);
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $row['nama_sepatu'] . "</td>";
                    echo "<td>" . $row['merk'] . "</td>";
                    echo "<td>" . $row['ukuran'] . "</td>";
                    echo "<td>" . $row['warna'] . "</td>";
                    echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
                    echo "<td>" . $row['stok'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-edit'>Edit</a> ";
                    echo "<a href='hapus.php?id=" . $row['id'] . "' class='btn btn-hapus' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>