<?php
// koneksi.php

$host = "localhost";    // Nama host database
$user = "root";         // Username database (default XAMPP)
$pass = "";             // Password database (default XAMPP kosong)
$db   = "db_edukasi";   // Nama database

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>