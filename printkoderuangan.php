<?php
$kode_ruangan = $_GET['id'];
$jum = $_POST['jumlah'];
?>

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
        for ($i = 1; $i <= $jum; $i++) {
            echo '<h1>' . $kode_ruangan . '</h1>';?> <br>
        <?php
        }
        ?>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
