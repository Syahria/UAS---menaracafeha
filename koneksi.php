<?php
// Koneksi ke database (sesuaikan dengan konfigurasi database Anda)
$host = 'localhost'; // Host database
$username = 'root'; // Username database
$password = ''; // Password database
$database = 'menara_cafeha'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah key 'username' ada dalam $_POST
    if(isset($_POST['username'])){
        // Mengambil data dari form
        $username = $_POST['username'];
    } else {
        // Jika key 'username' tidak ditemukan, atur $username menjadi nilai default atau lakukan tindakan lainnya
        $username = "Nama Pengguna Tidak Tersedia";
    }

    // Mengambil data dari form
    $ulasan = $_POST['ulasan'];

    // Menyiapkan statement SQL untuk menyimpan ulasan ke dalam tabel
    $sql = "INSERT INTO reviews (username, ulasan) VALUES ('$username', '$ulasan')";

    // Menjalankan query
    if ($conn->query($sql) === TRUE) {
        echo "Ulasan berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
