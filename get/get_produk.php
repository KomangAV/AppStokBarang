<?php 
include '../config/koneksi.php';
// Ambil query pencarian dari parameter GET
$filter = $_GET['filter'];

// Buat query SQL untuk mencari produk berdasarkan input
$query = "SELECT kode_produk, nama_produk FROM produk WHERE kode_produk LIKE '%$filter%' OR nama_produk LIKE '%$filter%'  OR kategori LIKE '%$filter%';";
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
 