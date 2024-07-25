<?php 
session_start();
include '../config/koneksi.php';
$nama = $_SESSION['nama'];
$supplier = $_POST['supplier'];
$alamat = $_POST['alamat'];

$input=mysql_query("INSERT INTO supplier VALUES ('', '$supplier','$alamat')");

date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Supplier','$supplier','Input')");
 
if ($input == true) {
    header("location: ../supplier.php");
} else {
    header("location: ../supplier.php");
}
 
?>