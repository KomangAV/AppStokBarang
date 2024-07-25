<?php 
session_start();
include '../config/koneksi.php';

$nama = $_SESSION['nama'];
$kode_produk = $_POST['produk'];
$stok = $_POST['stok'];
$karyawan = $_POST['karyawan'];
$data = mysql_query("select stok from produk where kode_produk = '$kode_produk'");
$d = mysql_fetch_array($data);
$stokasli = $d['stok'];
// Tentukan zona waktu yang diinginkan
date_default_timezone_set('Asia/Jakarta');

// Dapatkan tanggal hari ini
$tanggal_hari_ini = date('Y-m-d');

// Dapatkan jam saat ini
$jam_sekarang = date('H:i:s');

// Gabungkan tanggal dan jam
$waktu_indonesia = $tanggal_hari_ini . ' ' . $jam_sekarang;
$stok_sekarang = $stokasli + $stok;
if($stok != ''){
$input=mysql_query("UPDATE produk SET stok = '$stok_sekarang' WHERE kode_produk = '$kode_produk'");
}
$input=mysql_query("INSERT INTO history VALUES ('', '$kode_produk','$stok_sekarang','$stok', '$waktu_indonesia','$nama','IN')");

$query=mysql_query("select nama_produk from produk where kode_produk = '$kode_produk'");
$r=mysql_fetch_array($query);
$nama_produk = $r['nama_produk'];
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Stok Masuk','$nama_produk','Input')");
 
if ($input == true) {
    header("location: ../home.php");
} else {
    header("location: ../home.php");
}
 
?>