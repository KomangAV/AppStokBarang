<?php 
include 'config/koneksi.php';
$jum = $_POST['jumlah'];
// Gantilah mysql_query dengan fungsi MySQLi atau PDO yang sesuai
$sql = mysql_query("SELECT kode_ruangan FROM ruangan"); ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        @media print {
            html, body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }

            .content {
                column-count: 3; /* Number of columns */
                column-gap: 20px; /* Gap between columns */
                height: 100%; /* Set a fixed height for the content */
                overflow: hidden; /* Hide overflow content */
            }

            p {
                margin: 0;
            }
        }
    </style>
</head>
<body>
<div class="content">
<?php
while ($rw = mysql_fetch_array($sql)) {
        for ($i = 1; $i <= $jum; $i++) {
        echo $rw['kode_ruangan'] . "<br><br>";
        }
    }
?>
</div>

<script>
window.print();
</script>
</body>
</html>
