<?php 
include '../config/koneksi.php';
$limit = 10 * 1024 * 1024;
$ekstensi =  array('png','jpg','PNG','JPG','jpeg','gif');
$jumlahFile = count($_FILES['foto']['name']);
 
$id = $_GET['id'];

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
			move_uploaded_file($tmp, '../fotoproduk/'.$namafile);
            if($namafile != ''){
                session_start();
                $_SESSION['update_status'] = true; // Status update berhasil
                $input=mysql_query("UPDATE produk SET foto ='$namafile' WHERE id= '$id'");
                header("location: ../produk.php");
            }else{
                session_start();
                $_SESSION['update_status'] = false; // Status update gagal
                header("location: ../produk.php"); 
            }	
        
	}
}
    

 
?>