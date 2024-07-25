<?php 
include 'config/koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$Password = md5($password);

$login = mysql_query("select * from user where username='$username' and password='$Password'");
$cek = mysql_num_rows($login);
$row = mysql_fetch_array($login);
$nama = $row['nama'];	
$role = $row['role'];	
$id = $row['id'];
$pass = $row['password'];
$foto = $row['foto'];

date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
$tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
$input=mysql_query("UPDATE user SET login_time = '$tanggal_waktu' where id = '$id'");
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama;
	$_SESSION['role'] = $role;
	$_SESSION['id'] = $id;
	$_SESSION['password'] = $pass;
	$_SESSION['foto'] = $foto;
	$_SESSION['status'] = "login";
	header("location:home.php");
	
}else{
	header("location:index.php");	
}
 
?>