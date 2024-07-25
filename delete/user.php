<?php 
session_start();
$nama = $_SESSION['nama']; 
include '../config/koneksi.php';
 
$id = $_GET['id'];

$query=mysql_query("select nama from user where id = '$id'");
$r=mysql_fetch_array($query);
$namaorg = $r['nama'];
$input=mysql_query("DELETE FROM user WHERE id = '$id'");
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','User','$namaorg','Delete')");
 
if ($input == true) {
    header("location: ../user.php");
} else {
    header("location: ../user.php");
}
 
?>