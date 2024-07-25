<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template" />
	<meta property="og:title" content="Dompet : Payment Admin Template" />
	<meta property="og:description" content="Dompet : Payment Admin Template" />
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Aplikasi Stok Barang</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="./css/style.css" rel="stylesheet">

</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body class="vh-100">
<?php
if (isset($_SESSION['update_status']) && $_SESSION['update_status'] === true) {
    // Menampilkan SweetAlert jika UPDATE berhasil
    ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Perubahan Berhasil',
            text: 'Profil Anda telah berhasil diperbarui.',
            timer: 3000,// Waktu dalam milidetik (misalnya, 3000 ms = 3 detik)
            showConfirmButton: false // Menyembunyikan tombol "OK
        }).then(function() {
            window.location.href = 'index.php'; // Redirect ke halaman index setelah menutup SweetAlert
        });
    </script>
    <?php

    // Hapus session update_status agar pesan SweetAlert hanya muncul sekali
    unset($_SESSION['update_status']);
}else if (isset($_SESSION['update_status']) && $_SESSION['update_status'] === false) {?>
 <script>
       Swal.fire({
            icon: 'error',
            title: 'Perubahan Gagal',
            text: 'Profil Anda telah Gagal diperbarui.',
            timer: 3000, // Waktu dalam milidetik (misalnya, 3000 ms = 3 detik)
            showConfirmButton: false // Menyembunyikan tombol "OK"
        }).then(function() {
            window.location.href = 'index.php'; // Redirect ke halaman index setelah menutup SweetAlert
        });
    </script>
    <?php

    // Hapus session update_status agar pesan SweetAlert hanya muncul sekali
    unset($_SESSION['update_status']);
}
?>
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Silahkan Login</h4>
                                    <form action="login.php" method="post">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="username" name="username" class="form-control" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/dlabnav-init.js"></script>
	
</body>
</html>