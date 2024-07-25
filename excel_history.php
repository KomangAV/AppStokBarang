<?php
error_reporting(0);
// Fungsi untuk mengonversi HTML ke Excel
function htmlToExcel($htmlTableData) {
    // Mendefinisikan jenis konten dan nama file
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment;filename=Data_History.xls");


}

ob_start(); // Memulai output buffering

?>

<!-- Data tabel HTML yang Anda sediakan -->
<table id="example3" class="display" style="min-width: 845px">
    <thead>
        <tr>
            <th>No</th>
            <th>Status</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Inputan Stok</th>
            <th>Tanggal</th>
            <th>Karyawan</th>
            <th>Jumlah Stok Sebelumnya</th>
            <th>Jumlah Stok Sekarang</th>
        </thead>
        <tbody>
            <?php
            $produk = $_GET['produk']; 
            $tanggal_awal = $_GET['tgl_mulai']; // Tanggal Awal yang dipilih oleh pengguna
            $tanggal_akhir = $_GET['tgl_terakhir']; // Tanggal Akhir yang dipilih oleh pengguna
            include "config/koneksi.php";
            $koneksi2 = mysqli_connect("localhost", "webantne_all", "Ber517ANy45wan", "penggajian_new");
			$koneksi = mysqli_connect("localhost", "webantne_all", "Ber517ANy45wan", "stok_barang");
            $n = 1;
            $sql = mysqli_query($koneksi, "SELECT 
            history.status, history.karyawan, history.jumlah_sebelum, history.tanggal, 
            produk.kode_produk, produk.nama_produk, history.jumlah, history.tanggal, produk.stok
        FROM 
            produk
        JOIN 
            history ON history.kode_produk = produk.kode_produk 
        WHERE 
            (DATE(history.tanggal) >= '$tanggal_awal' AND DATE(history.tanggal) <= '$tanggal_akhir') 
            AND (produk.nama_produk LIKE '%$produk%' OR produk.kode_produk = '$kode_produk') 
        ORDER BY 
            history.tanggal DESC");
            while ($rw = mysqli_fetch_array($sql)) {
			$data = mysqli_query($koneksi2,"select MASNAM from master where MASNIP = '$rw[karyawan]'");
			
			$s = mysqli_fetch_array($data);
			$karyawan = $s['MASNAM'];

                echo "<tr>";
                echo "<td>$n</td>";
                echo "<td>";
                if ($rw["status"] == "IN") {
                    echo '<span style="color: blue;">' . $rw["status"] . "</span>";
                } elseif ($rw["status"] == "OUT") {
                    echo '<span style="color: red;">' . $rw["status"] . "</span>";
                } else {
                    echo $rw["status"];
                }
                echo "</td>";
                echo "<td>" . $rw["kode_produk"] . "</td>";
                echo "<td>" . $rw["nama_produk"] . "</td>";
                echo "<td>" . $rw["jumlah"] . "</td>";
                echo "<td>" . $rw["tanggal"] . "</td>";
                echo "<td>";
                if ($karyawan == "") {
                    echo $rw['karyawan'];
                } else {
                    echo $karyawan;
                }
                echo "</td>";
                echo "<td>" . $rw["jumlah_sebelum"] . "</td>";
                echo "<td>" . $rw["stok"] . "</td>";
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
