<?php
// proses_pendaftaran.php

// Sertakan file koneksi
include 'koneksi.php';

// Ambil data dari form menggunakan metode POST
$nama = $_POST['nama'];
$email = $_POST['email'];

// Validasi sederhana di sisi server
if (empty($nama) || empty($email)) {
    echo "Nama dan Email tidak boleh kosong!";
    exit;
}

// Query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO tbl_pendaftar (nama, email) VALUES (?, ?)";

// Gunakan prepared statement untuk keamanan (mencegah SQL Injection)
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "ss", $nama, $email);

// Eksekusi statement
if (mysqli_stmt_execute($stmt)) {
    echo "<!DOCTYPE html><html><head><title>Sukses</title><link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'></head><body class='text-center mt-5'>";
    echo "<div class='alert alert-success'>Pendaftaran berhasil! Terima kasih, $nama.</div>";
    echo "<a href='index.php' class='btn btn-primary'>Kembali ke Halaman Utama</a>";
    echo "</body></html>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>