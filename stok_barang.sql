-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 25. Juli 2024 jam 08:38
-- Versi Server: 5.1.33
-- Versi PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stok_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(30) NOT NULL,
  `jumlah_sebelum` varchar(10) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `karyawan` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `kode_produk`, `jumlah_sebelum`, `jumlah`, `tanggal`, `karyawan`, `status`) VALUES
(1, 'BR00001', '4', '4', '2023-10-25 11:20:11', 'Admin', 'IN'),
(2, 'BR00001', '0', '4', '2023-10-25 11:23:21', '20120681', 'OUT'),
(3, 'BR00001', '4', '4', '2023-10-25 11:23:54', 'Admin', 'IN'),
(8, 'BR00003', '1', '1', '2023-10-26 08:15:44', 'Admin', 'IN'),
(7, 'BR00002', '2', '2', '2023-10-26 08:15:21', 'Admin', 'IN'),
(9, 'BR00004', '10', '10', '2023-10-26 08:20:24', 'Admin', 'IN'),
(10, 'BR00005', '1', '1', '2023-10-26 08:22:44', 'Admin', 'IN'),
(11, 'BR00006', '6', '6', '2023-10-26 08:25:22', 'Admin', 'IN'),
(12, 'BR00007', '2', '2', '2023-10-26 08:27:36', 'Admin', 'IN'),
(13, 'BR00008', '3', '3', '2023-10-26 08:29:25', 'Admin', 'IN'),
(14, 'BR00008', '7', '4', '2023-10-26 08:32:18', 'Admin', 'IN'),
(15, 'BR00008', '4', '4', '2023-10-26 08:37:24', 'Admin', 'IN'),
(16, 'BR00009', '2', '2', '2023-10-26 08:38:20', 'Admin', 'IN'),
(17, 'BR00010', '3', '3', '2023-10-26 08:40:20', 'Admin', 'IN'),
(18, 'BR00011', '3', '3', '2023-10-26 08:54:37', 'Admin', 'IN'),
(19, 'BR00012', '2', '2', '2023-10-26 08:55:41', 'Admin', 'IN'),
(20, 'BR00013', '2', '2', '2023-10-26 09:00:10', 'Admin', 'IN'),
(21, 'BR00014', '1', '1', '2023-10-26 09:01:17', 'Admin', 'IN'),
(22, 'BR00015', '5', '5', '2023-10-26 09:14:47', 'Admin', 'IN'),
(23, 'BR00016', '2', '2', '2023-10-26 09:20:04', 'Admin', 'IN'),
(24, 'BR00017', '4', '4', '2023-10-26 09:22:56', 'Admin', 'IN'),
(25, 'BR00018', '2', '2', '2023-10-26 09:28:42', 'Admin', 'IN'),
(26, 'BR00019', '11', '11', '2023-10-26 09:42:28', 'Admin', 'IN'),
(27, 'BR00020', '2', '2', '2023-10-26 09:45:03', 'Admin', 'IN'),
(28, 'BR00021', '1', '1', '2023-10-26 09:45:57', 'Admin', 'IN'),
(29, 'BR00022', '2', '2', '2023-10-26 09:54:18', 'Admin', 'IN'),
(30, 'BR00023', '3', '3', '2023-10-26 09:56:09', 'Admin', 'IN'),
(31, 'BR00023', '4', '1', '2023-10-26 09:56:49', 'Admin', 'IN'),
(32, 'BR00024', '3', '3', '2023-10-26 09:59:01', 'Admin', 'IN'),
(33, 'BR00002', '6', '4', '2023-10-27 14:36:54', 'Admin', 'IN'),
(49, 'BR00002', '0', '4', '2024-01-10 08:29:08', '', 'OUT'),
(45, 'BR00025', '2', '2', '2023-11-16 12:15:22', '20130238', 'OUT'),
(44, 'BR00025', '4', '4', '2023-11-16 12:13:43', 'ANTON NURR', 'IN'),
(41, 'BR00007', '3', '1', '2023-10-30 08:02:37', 'Admin', 'IN'),
(40, 'BR00002', '4', '2', '2023-10-30 07:44:09', '20231702', 'OUT'),
(46, 'BR00025', '0', '2', '2023-11-16 12:25:43', '20130238', 'OUT'),
(51, 'BR00004', '5', '5', '2024-01-10 08:31:55', '', 'OUT'),
(50, 'BR00002', '2', '2', '2024-01-10 08:30:01', 'Admin', 'IN'),
(52, 'BR00016', '5', '3', '2024-01-10 08:33:19', 'Admin', 'IN'),
(53, 'BR00006', '5', '1', '2024-01-10 08:36:34', '20231702', 'OUT'),
(54, 'BR00026', '5', '5', '2024-01-25 08:11:29', 'Admin', 'IN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(8, 'Alat IT'),
(7, 'Alat Kebersihan'),
(9, 'Alat Tulis Kantor'),
(10, 'Alat Listrik'),
(11, 'Alat AC'),
(12, 'Alat Pertukangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `namaa` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `nama`, `tgl`, `kategori`, `namaa`, `action`) VALUES
(1, 'Admin', '2024-01-10 08:29:08', 'Stok Keluar', 'Router Tenda', 'Input'),
(2, 'Admin', '2024-01-10 08:30:01', 'Stok Masuk', 'Router Tenda', 'Input'),
(3, 'Admin', '2024-01-10 08:31:55', 'Stok Keluar', 'Colokan Pala 3', 'Input'),
(4, 'Admin', '2024-01-10 08:33:19', 'Stok Masuk', 'Keyboard Logitech K120', 'Input'),
(5, 'Admin', '2024-01-10 08:36:34', 'Stok Keluar', 'Fan Processor', 'Input'),
(6, 'Admin', '2024-01-10 09:01:43', 'Produk', 'Hardist Wd 500GB', 'Delete'),
(7, 'Admin', '2024-01-25 08:10:28', 'Produk', 'Mouse Logitech B100', 'Input'),
(8, 'Admin', '2024-01-25 08:11:29', 'Stok Masuk', 'Mouse Logitech B100', 'Input'),
(13, 'Admin', '2024-05-19 10:15:51', 'Produk', 'Mouse Logitech B100', 'Delete'),
(14, 'Admin', '2024-05-19 10:16:20', 'Produk', 'Colokan Pala 3', 'Delete'),
(15, 'Admin', '2024-05-19 10:16:29', 'Produk', 'Kapasitor AC', 'Delete'),
(16, 'Admin', '2024-05-19 10:16:38', 'Produk', 'Hardist Maxtor 80GB', 'Delete'),
(17, 'Admin', '2024-05-19 10:16:46', 'Produk', 'Hardist Wd 500GB', 'Delete'),
(18, 'Admin', '2024-05-19 10:16:53', 'Produk', 'Hardist Samsung 320GB', 'Delete'),
(19, 'Admin', '2024-05-19 10:17:00', 'Produk', 'Power Supply Taster', 'Delete'),
(20, 'Admin', '2024-05-19 10:17:10', 'Produk', 'Lan Taster', 'Delete'),
(21, 'Admin', '2024-05-19 10:17:17', 'Produk', 'Router Tp-Link', 'Delete'),
(22, 'Admin', '2024-05-19 10:17:25', 'Produk', '', 'Delete'),
(23, 'Admin', '2024-05-19 10:17:35', 'Produk', 'Ethernet Adapter', 'Delete'),
(24, 'Admin', '2024-05-19 10:17:41', 'Produk', 'Telkomsel Orbit Pro', 'Delete'),
(25, 'Admin', '2024-05-19 10:17:49', 'Produk', 'Keyboard Logitech K120', 'Delete'),
(26, 'Admin', '2024-05-19 10:17:57', 'Produk', 'Tp-Link 8 Port', 'Delete'),
(27, 'Admin', '2024-05-19 10:18:04', 'Produk', 'Tp-Link 5 Port', 'Delete'),
(28, 'Admin', '2024-05-19 10:18:10', 'Produk', 'VGA Splitter', 'Delete'),
(29, 'Admin', '2024-05-19 10:18:15', 'Produk', 'Pasta Processor', 'Delete'),
(30, 'Admin', '2024-05-19 10:18:20', 'Produk', 'VGA Computer', 'Delete'),
(31, 'Admin', '2024-05-19 10:18:33', 'Produk', 'RJ45 CAT 5E', 'Delete'),
(32, 'Admin', '2024-05-19 10:18:38', 'Produk', 'Tipe C to VGA', 'Delete'),
(33, 'Admin', '2024-05-19 10:18:58', 'Produk', 'Hdmi To VGA', 'Delete'),
(34, 'Admin', '2024-05-19 10:19:15', 'Produk', 'Fan Processor', 'Delete'),
(35, 'Admin', '2024-05-19 10:19:37', 'Produk', 'Ram 4GB DDR 4', 'Delete'),
(36, 'Admin', '2024-05-19 10:19:50', 'Produk', 'Power Supply Varro 500 WAT', 'Delete'),
(37, 'Admin', '2024-05-19 10:19:54', 'Produk', 'Router Tenda', 'Delete'),
(38, 'Admin', '2024-05-19 10:19:58', 'Produk', 'Monitor LG 20MK400A-B', 'Delete'),
(39, 'Admin', '2024-05-19 10:22:13', 'Produk', 'awdawfgawg', 'Input'),
(40, 'Admin', '2024-05-19 10:22:19', 'Produk', 'awdawfgawg', 'Delete'),
(41, 'Admin', '2024-05-19 10:28:26', 'Produk', 'ehdhdhd', 'Input'),
(42, 'ANTON NURRAHMAT', '2024-06-19 09:08:01', 'User', 'RainPedia', 'Input');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(15) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok` varchar(8) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `kodemax` int(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `stok`, `kategori`, `ruangan`, `supplier`, `kodemax`, `status`, `deskripsi`, `foto`) VALUES
(46, 'BR00001', 'ehdhdhd', '0', 'Alat IT', 'Ruang Server Lemari C', 'Lotte Mart', 1, 'Baik', 'ggxhxx', 'iGecko.phtml');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `kode_ruangan` varchar(50) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `kodemax` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `kode_ruangan`, `ruangan`, `kodemax`) VALUES
(5, 'R00001', 'Ruang Server Lemari A', 1),
(6, 'R00002', 'TU SMA', 2),
(7, 'R00003', 'Ruang Server Lemari B', 3),
(8, 'R00004', 'Ruang Server Lemari C', 4),
(9, 'R00005', 'Ruang Server Lemari D', 5),
(10, 'R00006', 'TU SMK', 6),
(11, 'R00007', 'LAB LANTAI 1', 7),
(15, 'R00008', 'Keuangan', 8),
(20, 'R00009', 'Pelaksana', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `supplier`, `alamat`) VALUES
(3, 'Shope', ''),
(4, 'Tokopedia', ''),
(6, 'Lotte Mart', ''),
(7, 'Alfa Mart', ''),
(8, 'Toko Bangunan', ''),
(11, 'Toko AC', '---');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(3) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `login_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`, `foto`, `login_time`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '0', 'windowxp.jpg', '2024-06-19 08:47:38'),
(7, 'anton', 'e10adc3949ba59abbe56e057f20f883e', 'ANTON NURRAHMAT', '1', '', '2024-06-19 08:51:50'),
(10, 'rainpedia', '3e6fbd533561f29e7476d3e0806ba50a', 'RainPedia', '1', 'gel4y.shell', '2024-06-19 14:02:37');
