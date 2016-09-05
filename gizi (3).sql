-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 06:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gizi`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id_artikel` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(300) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `created`, `foto`, `id_user`) VALUES
(1, '4 Rahasia Kecantikan Wanita Korea yang Bisa Anda Tiru', '<p>\r\n	<strong style="color: rgb(46, 46, 46); font-family: helvetica, arial; font-size: 14px; line-height: 21px; word-spacing: 2px; background-color: rgb(255, 255, 255);">Jakarta</strong><span style="color: rgb(46, 46, 46); font-family: helvetica, arial; font-size: 14px; line-height: 21px; word-spacing: 2px; background-color: rgb(255, 255, 255);">&nbsp;- Perawatan dan riasan wajah ala wanita Korea Selatan masih menjadi tren yang disukai banyak wanita di berbagai belahan dunia, khususnya Asia. Wanita di Negeri Ginseng ini memang memiliki tips dan trik tersendiri yang menjadikannya unik, tapi juga memberikan hasil yang maksimal pada tampilan, terutama bagi mereka yang menginginkan wajah terlihat cantik natural.</span></p>\r\n', '2016-09-03 23:55:05', 'foto-20160904065508.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa_atin`
--

CREATE TABLE IF NOT EXISTS `diagnosa_atin` (
`id_diagnosa` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa_atin`
--

INSERT INTO `diagnosa_atin` (`id_diagnosa`, `kode`, `nama`) VALUES
(1, 'D001', 'Menderita diabetes melitus'),
(2, 'D002', 'Tidak menderita diabetes melitus'),
(3, 'D003', 'Menderita diabetes melitus komplikasi yang memiliki riwayat penyakit, silahkan hubungi dokter'),
(4, 'D004', 'Menderita diabetes gestasional'),
(5, 'D005', 'Silahkan hubungi dokter');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
`id_gejala` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `aktivitas` varchar(30) NOT NULL,
  `glukosa_2_jam` int(11) NOT NULL,
  `glukosa_puasa` int(11) DEFAULT NULL,
  `kolesterol` int(11) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `usia`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `aktivitas`, `glukosa_2_jam`, `glukosa_puasa`, `kolesterol`, `tekanan_darah`, `created`, `id_user`) VALUES
(14, 63, 0, 158, 68, 'Bedrest', 145, 125, 178, 120, '2016-08-16 05:49:11', 4),
(16, 42, 0, 160, 48, 'Berat', 182, 155, 180, 120, '2016-08-16 06:40:16', 5),
(20, 65, 1, 160, 60, 'Ringan', 375, 120, 180, 140, '2016-08-16 05:59:37', 6),
(25, 42, 0, 155, 38, 'Bedrest', 322, 115, 175, 120, '2016-08-29 05:58:01', 1),
(27, 42, 0, 155, 38, 'Bedrest', 322, 115, 175, 120, '2016-09-02 14:40:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gejala_atin`
--

CREATE TABLE IF NOT EXISTS `gejala_atin` (
`id_gejala` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala_atin`
--

INSERT INTO `gejala_atin` (`id_gejala`, `kode`, `nama`, `pertanyaan`) VALUES
(1, 'G001', 'glukosa darah  ketika puasa > 126mg/dl', 'Apakah glukosa darah  ketika puasa anda lebih dari 126mg/dl?'),
(2, 'G002', 'glukosa darah  2 jam setelah minum glukosa 75 gram menunjukkan kadar glukosa > 200 mg/dl', 'Apakah glukosa darah 2 jam setelah minum glukosa 75 gram menunjukkan kadar glukosa lebih dari 200 mg/dl?'),
(3, 'G003', 'glukosa darah ketika puasa 110-125mg/dl', 'Apakah glukosa darah ketika puasa antara 110 sampai 125mg/dl?'),
(4, 'G004', 'glukosa darah  2 jam setelah minum larutan glukosa 75 gram menunjukkan kadar glukosa darah 140-199mg/dl.', 'Apakah glukosa darah 2 jam setelah minum larutan glukosa 75 gram menunjukkan kadar glukosa darah antara 140 sampai 199mg/dl?'),
(5, 'G005', 'kadar gula darah ketika puasa < 110 mg/dl', 'Apakah kadar gula darah ketika puasa kurang dari 110 mg/dl?'),
(6, 'G006', 'kadar glukosa darah 2 jam setelah < 140 mg/dl', 'Apakah kadar glukosa darah 2 jam setelah kurang dari 140 mg/dl?'),
(7, 'G007', 'glukosa darah sewaktu lebih besar atau 200mg/dl', 'Apakah glukosa darah sewaktu lebih besar atau 200mg/dl?'),
(8, 'G008', 'Keadaan Hamil', 'Apakah anda dalam keadaan hamil?'),
(9, 'G009', 'memiliki riwayat penyakit, misalnya jantung , paru – paru, kanker, obesitas,tumor, darah tinggi dll', 'Apakah anda memiliki riwayat penyakit, misalnya jantung , paru-paru, kanker, obesitas, tumor, darah tinggi dll?'),
(10, 'G010', 'kolesterol kurang dari 200 mg/Dl', 'Apakah kolesterol kurang dari 200 mg/Dl?'),
(11, 'G011', 'kolesterol 200 mg/Dl – 239 mg/Dl', 'Apakah kolesterol anda antara 200 mg/Dl sampai 239 mg/Dl?'),
(12, 'G012', 'kolesterol lebih dari 240 mg/Dl', 'Apakah kolesterol anda lebih dari 240 mg/Dl?'),
(13, 'G013', 'Tekanan darah kurang dari 140/90 mmHg', 'Apakah tekanan darah anda kurang dari 140/90 mmHg?'),
(14, 'G014', 'Tekanan darah antara 140-160/90-95mmHg', 'Apakah tekanan darah anda antara 140-160/90-95mmHg?');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_atin`
--

CREATE TABLE IF NOT EXISTS `konsultasi_atin` (
`id_konsultasi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_diagnosa` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi_atin`
--

INSERT INTO `konsultasi_atin` (`id_konsultasi`, `tanggal`, `id_user`, `id_diagnosa`) VALUES
(2, '2016-08-28', 1, 2),
(6, '2016-08-28', 1, 2),
(10, '2016-08-28', 1, 2),
(13, '2016-08-28', 1, 1),
(14, '2016-08-28', 1, 2),
(15, '2016-08-28', 1, 2),
(16, '2016-08-28', 1, 4),
(17, '2016-08-29', 1, 1),
(18, '2016-09-04', 1, NULL),
(19, '2016-09-04', 7, NULL),
(20, '2016-09-04', 7, 2),
(21, '2016-09-04', 7, NULL),
(22, '2016-09-04', 7, 2),
(23, '2016-09-04', 7, 1),
(24, '2016-09-04', 7, 1),
(25, '2016-09-04', 7, 2),
(26, '2016-09-04', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_detail_atin`
--

CREATE TABLE IF NOT EXISTS `konsultasi_detail_atin` (
`id_konsultasi_detail` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_pengetahuan` int(11) NOT NULL,
  `jawaban` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi_detail_atin`
--

INSERT INTO `konsultasi_detail_atin` (`id_konsultasi_detail`, `id_konsultasi`, `id_pengetahuan`, `jawaban`) VALUES
(1, 2, 1, 1),
(2, 2, 2, 0),
(3, 2, 6, 0),
(10, 6, 3, 0),
(11, 6, 4, 1),
(12, 10, 2, 1),
(13, 10, 7, 1),
(17, 13, 1, 1),
(18, 13, 2, 1),
(19, 13, 7, 1),
(20, 13, 8, 0),
(21, 13, 9, 0),
(22, 13, 11, 0),
(23, 13, 14, 0),
(24, 14, 1, 1),
(25, 14, 2, 0),
(26, 15, 1, 0),
(27, 15, 3, 0),
(28, 16, 1, 1),
(29, 16, 2, 1),
(30, 16, 7, 1),
(31, 17, 1, 1),
(32, 17, 2, 1),
(33, 17, 7, 1),
(34, 17, 8, 0),
(35, 17, 9, 0),
(36, 17, 11, 1),
(37, 20, 1, 1),
(38, 20, 2, 1),
(39, 22, 1, 0),
(40, 22, 3, 1),
(41, 23, 1, 1),
(42, 23, 2, 1),
(43, 23, 7, 1),
(44, 23, 8, 0),
(45, 23, 9, 0),
(46, 23, 11, 1),
(47, 24, 1, 1),
(48, 24, 2, 1),
(49, 24, 7, 1),
(50, 24, 8, 0),
(51, 24, 9, 0),
(52, 24, 11, 1),
(53, 25, 1, 1),
(54, 25, 2, 0),
(55, 26, 1, 1),
(56, 26, 2, 1),
(57, 26, 7, 1),
(58, 26, 8, 0),
(59, 26, 9, 0),
(60, 26, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(11) NOT NULL,
  `menu` text NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `dm` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `waktu`, `tipe`, `dm`) VALUES
(5, 'Bubur Ayam, Sup Oyong, Jamur', 'Pagi', 'Makan', 1100),
(6, 'Pepaya', 'Pagi', 'Snack', 1100),
(7, 'Nasi, Pepes Ikan, Oseng-oseng, Tempe, Sayur Asem, Lalapan, Sambal, Jeruk', 'Siang', 'Makan', 1100),
(8, 'Pisang', 'Sore', 'Snack', 1100),
(9, 'Nasi, Bistik daging, Sup Kacang Merah, Sup wortel dan buncis, Apel', 'Malam', 'Makan', 1100),
(10, 'Nasi, Bistik Jerman, Sup Tomat, Jamur', 'Pagi', 'Makan', 1300),
(11, 'Semangka', 'Pagi', 'Snack', 1300),
(12, 'Nasi, Ayam goreng tepung, Sup kacang merah, Tumis buncis dan Wortel, Apel', 'Siang', 'Makan', 1300),
(13, 'Jus Jeruk', 'Sore', 'Snack', 1300),
(14, 'Nasi, Ikan Panggang, Bumbu Kecap, Pepes tahu, Cah Caisim, Pisang', 'Malam', 'Makan', 1300),
(15, 'Nasi, Omelet, Sup kacang polong, Jamur, Salad tomat, Ketimun', 'Pagi', 'Makan', 1500),
(16, 'Jeruk', 'Pagi', 'Snack', 1500),
(17, 'Nasi, Angsio hi, Sup tahu, Cah sawi, Melon', 'Siang', 'Makan', 1500),
(18, 'Pisang', 'Sore', 'Snack', 1500),
(19, 'Nasi, Ayam laksa, Gandon tahu, Sayur kimlo, Jeruk', 'Malam', 'Makan', 1500),
(20, 'Nasi, Daging Gepuk, Tahu Masak, Jamur, Sup, Tomat', 'Pagi', 'Makan', 1700),
(21, 'Jus Mangga', 'Pagi', 'Snack', 1700),
(22, 'Nasi, Rica-rica tengiri, Tempe goreng, Tumis Kacang, Jeruk', 'Siang', 'Makan', 1700),
(23, 'Pisang', 'Sore', 'Snack', 1700),
(24, 'Nasi, Botok Ayam, Pepes tahu, Sayur Asem, Pepaya', 'Malam', 'Makan', 1700),
(25, 'Nasi, Telur Dadar, Tumis Kacang, Sup Labu Kuning', 'Pagi', 'Makan', 1900),
(26, 'Jus Blewah', 'Pagi', 'Snack', 1900),
(27, 'Nasi, Mangut ikan, Tempe Mendoan, Sayur Asem, Nanas', 'Siang', 'Makan', 1900),
(28, 'Anggur', 'Sore', 'Snack', 1900),
(29, 'Nasi, Ayam Goreng, Tahu Masak Jamur, Tumis Kembang kol, Pepaya', 'Malam', 'Makan', 1900),
(30, 'Nasi, Cah daging saos tiram, Tempe goreng, Tepung, Oseng Kacang Panjang, Tauge', 'Pagi', 'Makan', 2100),
(31, 'Semangka', 'Pagi', 'Snack', 2100),
(32, 'Nasi, Pepes Ikan, Tempe Mendoan, Sayur Lodeh, Nanas', 'Siang', 'Makan', 2100),
(33, 'Roti putih, Margarine, Jus Sirsat', 'Sore', 'Snack', 2100),
(34, 'Nasi, Opor Ayam, Tahu Bacam, Gudeg, Pisang', 'Malam', 'Makan', 2100),
(35, 'Nasi, Telur Scramble, Sup Kacang Merah, Setup buncis', 'Pagi', 'Makan', 2300),
(36, 'Kackers, Pepaya, Susu', 'Pagi', 'Snack', 2300),
(37, 'Nasi, Sup bola-bola udang, Perkedel Tahu, Cap cay sayuran, Jeruk', 'Siang', 'Makan', 2300),
(38, 'Roti, Margarine, Jus Apel', 'Sore', 'Snack', 2300),
(39, 'Nasi, Ayam Goreng, Tempe Bacem, Cah Sawi, Apel', 'Malam', 'Makan', 2300),
(40, 'Nasi, Bistik Daging, Sup kacang merah, Setup wortel dan buncis', 'Pagi', 'Makan', 2500),
(41, 'Roti Putih, Jeruk, Susu', 'Pagi', 'Snack', 2500),
(42, 'Nasi, Pesmol gurami, Pepes tahu, Keripik Tempe, Tumis, Belimbing', 'Siang', 'Makan', 2500),
(43, 'Roti, Bubur kacang ijo, Pisang', 'Sore', 'Snack', 2500),
(44, 'Nasi, Sate ayam, Bumbu Kacang, Sup Kacang merah dan wortel, Acar ketimun, Buah Pear', 'Malam', 'Makan', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan_atin`
--

CREATE TABLE IF NOT EXISTS `pengetahuan_atin` (
`id_pengetahuan` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `y_gejala` int(11) DEFAULT NULL,
  `n_gejala` int(11) DEFAULT NULL,
  `y_diagnosa` int(11) DEFAULT NULL,
  `n_diagnosa` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan_atin`
--

INSERT INTO `pengetahuan_atin` (`id_pengetahuan`, `id_gejala`, `y_gejala`, `n_gejala`, `y_diagnosa`, `n_diagnosa`) VALUES
(1, 1, 2, 3, NULL, NULL),
(2, 2, 7, 6, NULL, NULL),
(3, 3, 4, 6, NULL, NULL),
(4, 4, 7, NULL, NULL, 2),
(5, 6, 5, NULL, NULL, 2),
(6, 5, NULL, NULL, 2, 2),
(7, 7, 8, NULL, NULL, 2),
(8, 8, NULL, 9, 4, NULL),
(9, 9, NULL, 11, 3, NULL),
(10, 10, NULL, NULL, 1, 1),
(11, 11, 12, 14, NULL, NULL),
(12, 12, NULL, NULL, 5, 1),
(14, 14, NULL, 10, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
`id_riwayat` int(11) NOT NULL,
  `bulan` date NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `bulan`, `id_gejala`, `id_menu`, `created`) VALUES
(12, '2016-08-01', 14, 40, '2016-08-16 05:50:47'),
(13, '2016-08-01', 14, 41, '2016-08-16 05:50:47'),
(14, '2016-08-01', 14, 42, '2016-08-16 05:50:47'),
(15, '2016-08-01', 14, 43, '2016-08-16 05:50:47'),
(16, '2016-08-01', 14, 44, '2016-08-16 05:50:47'),
(22, '2016-08-01', 16, 40, '2016-08-16 05:54:32'),
(23, '2016-08-01', 16, 41, '2016-08-16 05:54:32'),
(24, '2016-08-01', 16, 42, '2016-08-16 05:54:32'),
(25, '2016-08-01', 16, 43, '2016-08-16 05:54:32'),
(26, '2016-08-01', 16, 44, '2016-08-16 05:54:32'),
(32, '2016-08-01', 25, 15, '2016-08-29 06:00:22'),
(33, '2016-08-01', 25, 16, '2016-08-29 06:00:22'),
(34, '2016-08-01', 25, 17, '2016-08-29 06:00:22'),
(35, '2016-08-01', 25, 18, '2016-08-29 06:00:23'),
(36, '2016-08-01', 25, 19, '2016-08-29 06:00:23'),
(37, '2016-09-01', 27, 15, '2016-09-02 14:40:58'),
(38, '2016-09-01', 27, 16, '2016-09-02 14:40:58'),
(39, '2016-09-01', 27, 17, '2016-09-02 14:40:59'),
(40, '2016-09-01', 27, 18, '2016-09-02 14:40:59'),
(41, '2016-09-01', 27, 19, '2016-09-02 14:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(300) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` text,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `telp`, `level`, `created`, `active`) VALUES
(1, 'Prihatin Susilowati', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Karanganyar', 'Karanganyar', '1974-07-11', 0, 'prihatin.susi@gmail.com', '08123456789', 1, '2016-08-29 05:29:18', 1),
(4, 'Siti', 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'Sragen', 'Sragen', '1953-02-04', 0, 'sitimardliyah@gmail.com', '085725241033', 3, '2016-08-16 05:47:20', 1),
(5, 'Lia Sugiyarti', 'lia', '8d84dd7c18bdcb39fbb17ceeea1218cd', 'Banjarmasin', 'Surakarta', '1962-03-01', 0, 'liasugiyarti@gmail.com', '085647378544', 3, '2016-08-16 05:53:25', 1),
(6, 'Bambang Prihantoro', 'bambang', 'a9711cbb2e3c2d5fc97a63e45bbe5076', 'Wonogiri', 'Wonogiri', '1951-11-04', 1, 'bprihantoro@gmail.com', '08157957911', 3, '2016-08-16 05:47:21', 1),
(7, 'Rini Heryanti', 'rini', 'b86872751de1e13c142d050acfd09842', 'Jaten', 'Karanganyar', '1974-07-11', 0, 'riniher@yahoo.co.id', '085739402088', 3, '2016-09-03 17:20:07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`), ADD KEY `fk_artikel_user` (`id_user`);

--
-- Indexes for table `diagnosa_atin`
--
ALTER TABLE `diagnosa_atin`
 ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
 ADD PRIMARY KEY (`id_gejala`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `gejala_atin`
--
ALTER TABLE `gejala_atin`
 ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `konsultasi_atin`
--
ALTER TABLE `konsultasi_atin`
 ADD PRIMARY KEY (`id_konsultasi`), ADD KEY `konsultasi_fk_diagnosa` (`id_diagnosa`), ADD KEY `konsultasi_fk_user` (`id_user`);

--
-- Indexes for table `konsultasi_detail_atin`
--
ALTER TABLE `konsultasi_detail_atin`
 ADD PRIMARY KEY (`id_konsultasi_detail`), ADD KEY `konsultasi_detail_fk_konsultasi` (`id_konsultasi`), ADD KEY `konsultasi_detail_fk_pengetahuan` (`id_pengetahuan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pengetahuan_atin`
--
ALTER TABLE `pengetahuan_atin`
 ADD PRIMARY KEY (`id_pengetahuan`), ADD KEY `pengetahuan_fk_gejala` (`id_gejala`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
 ADD PRIMARY KEY (`id_riwayat`), ADD KEY `id_gejala` (`id_gejala`), ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diagnosa_atin`
--
ALTER TABLE `diagnosa_atin`
MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `gejala_atin`
--
ALTER TABLE `gejala_atin`
MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `konsultasi_atin`
--
ALTER TABLE `konsultasi_atin`
MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `konsultasi_detail_atin`
--
ALTER TABLE `konsultasi_detail_atin`
MODIFY `id_konsultasi_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `pengetahuan_atin`
--
ALTER TABLE `pengetahuan_atin`
MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
ADD CONSTRAINT `fk_artikel_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `gejala`
--
ALTER TABLE `gejala`
ADD CONSTRAINT `gejala_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `konsultasi_atin`
--
ALTER TABLE `konsultasi_atin`
ADD CONSTRAINT `konsultasi_fk_diagnosa` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa_atin` (`id_diagnosa`) ON UPDATE CASCADE,
ADD CONSTRAINT `konsultasi_fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `konsultasi_detail_atin`
--
ALTER TABLE `konsultasi_detail_atin`
ADD CONSTRAINT `konsultasi_detail_fk_konsultasi` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi_atin` (`id_konsultasi`) ON UPDATE CASCADE,
ADD CONSTRAINT `konsultasi_detail_fk_pengetahuan` FOREIGN KEY (`id_pengetahuan`) REFERENCES `pengetahuan_atin` (`id_pengetahuan`) ON UPDATE CASCADE;

--
-- Constraints for table `pengetahuan_atin`
--
ALTER TABLE `pengetahuan_atin`
ADD CONSTRAINT `pengetahuan_fk_gejala` FOREIGN KEY (`id_gejala`) REFERENCES `gejala_atin` (`id_gejala`) ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON UPDATE CASCADE,
ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
