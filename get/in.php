<?php 
include '../config/koneksi.php';
 
if (isset($_POST['kode_produk'])) {
$kode_produk = $_POST['kode_produk'];
$query = "SELECT deskripsi FROM produk WHERE kode_produk = '$kode_produk'";
$result = mysql_query($query);
if ($result) {
    $row = mysql_fetch_assoc($result);
    echo $row['deskripsi'];
} else {
    echo "Deskripsi tidak ditemukan";
}
}
mysql_close($conn);

?>
 