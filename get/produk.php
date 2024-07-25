<?php 
include '../config/koneksi.php';
// Ambil query pencarian dari parameter GET
$input = $_GET['q'];

// Buat query SQL untuk mencari produk berdasarkan input
$query = "SELECT nama_produk FROM produk WHERE nama_produk LIKE '%$input%';";
$result = mysql_query($query);
$products = array();

if ($result) {
    while ($row = mysql_fetch_assoc($result)) {
        $products[] = $row;
    }
}

// Mengirim hasil sebagai respons JSON
header('Content-Type: application/json');
echo json_encode($products);

mysql_close($conn);

?>
 