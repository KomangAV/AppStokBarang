<?php 
$kode_produk = $_GET['id'];
$jum = $_GET['jum'];

for ($i = 1; $i <=$jum; $i++) {
    echo '<img src="qrcode-img/' . $kode_produk . '.png" alt="' . $kode_produk . '">'; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
<script>
window.print();
</script>