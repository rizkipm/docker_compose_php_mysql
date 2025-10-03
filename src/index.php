<?php
$host ="db";
$db   = "db_belajar"; // <- ganti ini
$user = "userku";
$pass = "passku";

try{
    $pdo = new PDO("mysql:host=$host;port=3306;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Koneksi Berhasil";
}catch(PDOException $e){
    echo "Koneksi Gagal: " . $e->getMessage();
}
?>