<?php 
session_start();
$nama = $_SESSION['nama'];
include '../config/koneksi.php';
 
$kode_produk = $_POST['kode_produk'];
$produk = $_POST['produk'];
$kategori = $_POST['kategori'];
$ruangan = $_POST['ruangan'];
$supplier = $_POST['supplier'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];
$data = mysql_query("select max(kodemax) as max from produk");
$d = mysql_fetch_array($data);
$tmbh = $d['max'] + 1;

$input=mysql_query("INSERT INTO produk VALUES ('', '$kode_produk', '$produk', '0', '$kategori', '$ruangan', '$supplier', '$tmbh','$status', '$deskripsi', '')");
 
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Produk','$produk','Input')");

if ($input == true) {
    header("location: ../produk.php");
} else {
    header("location: ../produk.php");
}
 
?>