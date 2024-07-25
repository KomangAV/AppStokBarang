<?php 
session_start();
$nama = $_SESSION['nama']; 
include '../config/koneksi.php';
 
$id = $_GET['id'];

$query=mysql_query("select nama_produk from produk where id = '$id'");
$r=mysql_fetch_array($query);
$nama_produk = $r['nama_produk'];

$input=mysql_query("DELETE FROM produk WHERE id = '$id'");
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Produk','$nama_produk','Delete')");
 
if ($input == true) {
    header("location: ../produk.php");
} else {
    header("location: ../produk.php");
}
 
?>