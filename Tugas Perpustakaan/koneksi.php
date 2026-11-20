<?php
//Nama: Afrizal Nur Ditya
//NIM: 250202097
//Kelas: TI 2D

mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
} else {
    echo 'Koneksi Berhasil';
}

mysqli_set_charset($koneksi, "utf8mb4");