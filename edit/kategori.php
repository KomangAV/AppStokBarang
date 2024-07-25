<?php 
session_start();
$nama = $_SESSION['nama']; 
include '../config/koneksi.php';
 
$id = $_GET['id'];
$kategori = $_POST['kategori'];

$input=mysql_query("UPDATE kategori SET kategori = '$kategori' WHERE id = '$id'");
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Kategori','$kategori','Edit')");
 
if ($input == true) {
    header("location: ../kategori.php");
} else {
    header("location: ../kategori.php");
}
 
?>