<?php
//Nama: Afrizal Nur Ditya
//NIM: 250202097
//Kelas: TI 2D

require_once "koneksi.php";

$versi_server = mysqli_get_server_info($koneksi);
mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tes Koneksi Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .sukses { background: #e6f4ea; border-left: 5px solid #2e7d32; padding: 10px; }
    </style>
</head>
<body>
    <h1>Tes Koneksi Database Perpustakaan</h1>
    <p class="sukses">Koneksi ke MySQL berhasil.</p>
    <p>Database: <?php echo htmlspecialchars($database); ?></p>
</body>
</html>