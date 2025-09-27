<?php  

$host ="db";
$db = "belajardb";
$user = "userku";
$pass = "passku";  

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Koneksi Berhasil";

}catch(PDOException $e){
    echo "Koneksi Gagal: " . $e->getMessage();
}

?>