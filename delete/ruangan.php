<?php 
session_start();
$nama = $_SESSION['nama']; 
include '../config/koneksi.php';
 
$id = $_GET['id'];

$query=mysql_query("select ruangan from ruangan where id = '$id'");
$r=mysql_fetch_array($query);
$ruangan = $r['ruangan'];

$input=mysql_query("DELETE FROM ruangan WHERE id = '$id'");
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Ruangan','$ruangan','Delete')");
 
if ($input == true) {
    header("location: ../ruangan.php");
} else {
    header("location: ../ruangan.php");
}
 
?>