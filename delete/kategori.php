<?php 
session_start();
$nama = $_SESSION['nama']; 
include '../config/koneksi.php';
 
$id = $_GET['id'];
$query=mysql_query("select kategori from kategori where id = '$id'");
$r=mysql_fetch_array($query);
$kategori = $r['kategori'];

$input=mysql_query("DELETE FROM kategori WHERE id = '$id'");
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Kategori','$kategori','Delete')");
 
if ($input == true) {
    header("location: ../kategori.php");
} else {
    header("location: ../kategori.php");
}
 
?>