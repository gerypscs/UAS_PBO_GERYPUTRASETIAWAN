<?php
// koneksi.php

$host     = "localhost";
$username = "root";
$password = "";
$database = "db_uas_pbo_ti1c_geryputrasetiawan"; // Silakan ubah sesuai nama database Anda

try {
    // Membuat koneksi dengan PDO
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $db  = new PDO($dsn, $username, $password);
    
    // Mengatur error mode ke Exception untuk mempermudah debugging
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    // Jika koneksi gagal, hentikan skrip dan tampilkan pesan error
    die("Koneksi database gagal: " . $e->getMessage());
}
?>