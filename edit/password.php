<?php 
include '../config/koneksi.php';
$limit = 10 * 1024 * 1024;
$ekstensi =  array('png','jpg','PNG','JPG','jpeg','gif');
$jumlahFile = count($_FILES['foto']['name']);
 
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$oldpass = $_POST['oldpass'];
$oldpass = md5($oldpass);
$newpass = $_POST['newpass'];
$newpass = md5($newpass);

for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['foto']['name'][$x];
	$tmp = $_FILES['foto']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'][$x];	
    if($ukuran > $limit){
        session_start();
        $_SESSION['update_status'] = false; // Status update gagal
        // header("location: ../index.php");	
	}else{	
			move_uploaded_file($tmp, '../foto/'.$namafile);
            if($oldpass == $password && $namafile != ''){
                $input=mysql_query("UPDATE user SET username = '$username',nama = '$nama', password = '$newpass', foto ='$namafile' WHERE id= '$id'");
                session_start();
                $_SESSION['update_status'] = true; // Status update berhasil
                header("location: ../index.php");
            }else if($oldpass == $password && $namafile == ''){
                $input=mysql_query("UPDATE user SET username = '$username',nama = '$nama', password = '$newpass' WHERE id= '$id'");
                session_start();
                $_SESSION['update_status'] = true; // Status update berhasil
                header("location: ../index.php");
            }else{
                session_start();
                $_SESSION['update_status'] = false; // Status update gagal
                header("location: ../index.php"); 
            }	
        
	}
}
    

 
?>