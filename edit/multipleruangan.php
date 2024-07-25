<?php 
session_start();
$nama = $_SESSION['nama'];
include '../config/koneksi.php';
if (isset($_POST['kode_produk']) && is_array($_POST['kode_produk']) && isset($_POST['ruangan'])) {
    $selectedRuangan = $_POST['ruangan']; // Ruangan yang dipilih
    $kodeProduk = $_POST['kode_produk']; // Kode produk
    foreach ($kodeProduk as $kodeProduk) {
        $updateQuery = mysql_query ("UPDATE produk SET ruangan = '$selectedRuangan' WHERE kode_produk = '$kodeProduk'");
        
        date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke WIB
        $tanggal_waktu = date('Y-m-d H:i:s'); // Mendapatkan tanggal dan waktu saat ini
        $input2=mysql_query("INSERT INTO log VALUES ('', '$nama','$tanggal_waktu','Banyak Ruangan','$selectedRuangan','Edit')");
    }
    header("location: ../produk.php");
}
?>