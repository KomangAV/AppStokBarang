<?php 
include '../config/koneksi.php';
// Ambil query pencarian dari parameter GET
$productCode = $_GET['product_code']; // Get the product code from the request

// Buat query SQL untuk mencari produk berdasarkan input
$result = mysql_query("SELECT foto FROM produk WHERE kode_produk = '$productCode'");

if (mysql_num_rows($result) > 0) {
    $row = mysql_fetch_assoc($result);
    echo json_encode($row);
} else {

}
mysql_close($conn);

?>
 