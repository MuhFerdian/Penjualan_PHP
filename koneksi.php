<?php
$servername = "localhost";   // host atau IP server
$username   = "root";        // nama pengguna MySQL
$password   = "";            // password MySQL (kosong secara default di XAMPP)
$database   = "penjualan";   // nama database
$port       = 3306;          // port MySQL (default: 3306)

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Mengecek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // opsional: tampilkan pesan jika koneksi berhasil
    // echo "Koneksi berhasil!";
}
?>
