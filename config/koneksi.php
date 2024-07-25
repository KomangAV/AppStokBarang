<?php
	ob_start();
	// lakukan koneksi ke database
	$conn = mysql_connect("localhost","webantne_all","Ber517ANy45wan");
	$sukses = mysql_select_db("stok_barang",$conn);
			if (!$sukses) {
				die('Could not connect: '.mysql_error());
			}

?>