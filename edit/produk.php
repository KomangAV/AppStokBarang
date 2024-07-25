<?php 
session_start();
$nama = $_SESSION['nama'];
include '../config/koneksi.php';
 
$id = $_GET['id'];
$kode_produk = $_POST['kode_produk'];
$produk = $_POST['produk'];
$kategori = $_POST['kategori'];
$ruangan = $_POST['ruangan'];
$supplier = $_POST['supplier'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];

$input=mysql_query("UPDATE produk SET kode_produk = '$kode_produk',nama_produk = '$produk',kategori = '$kategori',ruangan = '$ruangan',supplier = '$supplier',status='$status',deskripsi = '$deskripsi' WHERE id = '$id'");
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Produk','$produk','Edit')");
 
if ($input == true) {
    header("location: ../produk.php");
} else {
    header("location: ../produk.php");
}
 
?>