<?php 
session_start();
include '../config/koneksi.php';
$nama1 = $_SESSION['nama'];
 
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$password = md5($password);
$role = $_POST['role'];

$input=mysql_query("INSERT INTO user VALUES ('', '$username','$password','$nama','$role','','')");

date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input2=mysql_query("INSERT INTO log VALUES ('', '$nama1','$tanggal_waktu','User','$nama','Input')");
 
if ($input == true) {
    header("location: ../user.php");
} else {
    header("location: ../user.php");
}
 
?>