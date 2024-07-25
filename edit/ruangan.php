<?php
session_start();
$nama = $_SESSION['nama']; 
include '../config/koneksi.php';
 
$id = $_GET['id'];
$ruangan = $_POST['ruangan'];

$input=mysql_query("UPDATE ruangan SET ruangan = '$ruangan' WHERE id = '$id'");
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Ruangan','$ruangan','Edit')");
 
if ($input == true) {
    header("location: ../ruangan.php");
} else {
    header("location: ../ruangan.php");
}
 
?>