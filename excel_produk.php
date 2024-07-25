<?php
error_reporting(0);
// Fungsi untuk mengonversi HTML ke Excel
function htmlToExcel($htmlTableData) {
    // Mendefinisikan jenis konten dan nama file
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment;filename=Data_Produk.xls");


}

ob_start(); // Memulai output buffering

?>

<!-- Data tabel HTML yang Anda sediakan -->
<table id="example3" class="display" style="min-width: 845px">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Ruangan/Gudang</th>
            <th>Supplier</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config/koneksi.php';
            $n=1;
            $sql = mysql_query("select * from produk order by id DESC");
            while ($rw = mysql_fetch_array($sql)) {
                echo "<tr>";
                echo "<td>$n</td>";
                echo "<td>" . $rw["kode_produk"] . "</td>";
                echo "<td>" . $rw["nama_produk"] . "</td>";
                echo "<td>" . $rw["stok"] . "</td>";
                echo "<td>" . $rw["kategori"] . "</td>";
                echo "<td>" . $rw["ruangan"] . "</td>";
                echo "<td>" . $rw["supplier"] . "</td>";
                echo "<td>" . $rw["status"] . "</td>";
                echo "</tr>";
                $n++;
            }
            ?>
        </tbody>
    </table>
    <?php
    // Setelah tabel HTML, panggil fungsi untuk mengonversi ke Excel
    htmlToExcel("<table>" . ob_get_contents() . "</table");
    ?>
