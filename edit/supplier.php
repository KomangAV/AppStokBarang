<?php 
session_start();
$nama = $_SESSION['nama'];
include '../config/koneksi.php';
 
$id = $_GET['id'];
$supplier = $_POST['supplier'];
$alamat = $_POST['alamat'];

$input=mysql_query("UPDATE supplier SET supplier = '$supplier',alamat = '$alamat' WHERE id = '$id'");


date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Supplier','$supplier','Edit')");


 
if ($input == true) {
    header("location: ../supplier.php");
} else {
    header("location: ../supplier.php");
}
 
?>