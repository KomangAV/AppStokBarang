<?php
session_start(); // Pastikan Anda memanggil session_start() sebelum mengakses sesi

// Mengakhiri sesi
session_destroy();

// Redirect pengguna ke halaman lain setelah logout (opsional)
header("Location: index.php"); // Ganti "index.php" dengan halaman tujuan setelah logout
?>