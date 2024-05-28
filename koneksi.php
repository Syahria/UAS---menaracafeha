<?php

// Informasi koneksi database
$host = "localhost"; // Host database (biasanya "localhost")
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "menara_cafeha"; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Fungsi untuk membersihkan input data dari potensi serangan SQL Injection
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
