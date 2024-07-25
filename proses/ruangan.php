<?php 
session_start();
$nama = $_SESSION['nama'];
include '../config/koneksi.php';
 
$kode_ruangan = $_POST['kode_ruangan'];
$ruangan = $_POST['ruangan'];
$data = mysql_query("select max(kodemax) as max from produk");
$d = mysql_fetch_array($data);
$tmbh = $d['max'] + 1;

$input=mysql_query("INSERT INTO ruangan VALUES ('','$kode_ruangan','$ruangan','$tmbh')");

date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Ruangan','$ruangan','Input')");
 
if ($input == true) {
    header("location: ../ruangan.php");
} else {
    header("location: ../ruangan.php");
}
 
?>