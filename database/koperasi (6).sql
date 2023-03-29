-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 01:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tipe_fakultas` varchar(100) NOT NULL,
  `tipe_prodi` varchar(100) NOT NULL,
  `simpan` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nip`, `nama`, `jabatan`, `tipe_fakultas`, `tipe_prodi`, `simpan`) VALUES
(23, 200035, 'Reymanda Amelia', 'Dosen', 'Hukum', 'Ilmu Hukum', 0),
(29, 200038, 'Faizulhaq Febriansah', 'Dosen', 'Teknik', 'Teknik Informatika', 0);

-- --------------------------------------------------------

--
-- Table structure for table `angsur_uang`
--

CREATE TABLE `angsur_uang` (
  `id_angsur` int(11) NOT NULL,
  `pinjam_id` int(11) NOT NULL,
  `tanggal_angsur` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uang_angsur` bigint(20) NOT NULL,
  `bukti_angsur` varchar(200) NOT NULL,
  `sisa_angsur` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angsur_uang`
--

INSERT INTO `angsur_uang` (`id_angsur`, `pinjam_id`, `tanggal_angsur`, `uang_angsur`, `bukti_angsur`, `sisa_angsur`) VALUES
(56, 33, '2022-07-17 23:00:08', 50000, 'kelolabukustate2.jpg', 0),
(57, 34, '2022-07-19 01:47:08', 75000, 'hitungdendastate.jpg', 0),
(58, 35, '2022-07-19 01:51:03', 150000, 'hitungdendastate1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `fakultas`, `prodi`) VALUES
(6, 'Hukum', 'Ilmu Hukum'),
(7, 'Ekonomi', 'Akuntansi'),
(8, 'Ekonomi', 'Manajemen'),
(9, 'Ilmu Sosial dan Politik', 'Ilmu Pemerintahan'),
(10, 'Ilmu Sosial dan Politik', 'Ilmu Kesejahteraan Sosial'),
(11, 'Ilmu Sosial dan Politik', 'Ilmu Komunikasi'),
(12, 'Ilmu Sosial dan Politik', 'Kepolisian'),
(13, 'Keguruan dan Ilmu Keguruan', 'Pendidikan Matematika'),
(14, 'Keguruan dan Ilmu Keguruan', 'Pendidikan Ekonomi / Akuntansi'),
(15, 'Keguruan dan Ilmu Keguruan', 'Pendidikan Guru SD'),
(16, 'Teknik', 'Teknik Industri'),
(17, 'Teknik', 'Teknik Sipil'),
(18, 'Teknik', 'Teknik Elektro'),
(19, 'Teknik', 'Arsitektur'),
(20, 'Teknik', 'Teknik Informatika'),
(21, 'Pasca Sarjana', 'Teknik Informatika'),
(22, 'Pasca Sarjana', 'Manajemen'),
(23, 'Pasca Sarjana', 'Ilmu Pemerintahan'),
(24, 'Pasca Sarjana', 'Ilmu Hukum'),
(30, 'Ekonomi', 'Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `penyimpanan`
--

CREATE TABLE `penyimpanan` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `alamat_anggota` text NOT NULL,
  `asal_anggota` varchar(50) NOT NULL,
  `jk_anggota` varchar(10) NOT NULL,
  `umur_anggota` int(11) NOT NULL,
  `jumlah_simpan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyimpanan`
--

INSERT INTO `penyimpanan` (`id_anggota`, `nama_anggota`, `alamat_anggota`, `asal_anggota`, `jk_anggota`, `umur_anggota`, `jumlah_simpan`) VALUES
(1, 'Santi Nuraeni', ' Bandung ', 'B', 'Wanita', 18, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `uang_pinjam` int(11) NOT NULL,
  `lama_pinjam` int(50) NOT NULL,
  `bukti_pinjam` varchar(100) NOT NULL,
  `angsur` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `nip`, `tanggal_pinjam`, `uang_pinjam`, `lama_pinjam`, `bukti_pinjam`, `angsur`) VALUES
(33, 200035, '2022-07-18', 0, 1, 'kelolabukustate1.jpg', 0),
(34, 200037, '2022-07-19', 80000, 1, 'hitungdendastate1.jpg', 0),
(35, 200037, '2022-07-19', 200000, 1, 'hitungdendastate2.jpg', 0),
(36, 200035, '2022-07-19', 175000, 1, 'hitungdendastate3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `simpan`
--

CREATE TABLE `simpan` (
  `id_simpan` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `tanggal_simpan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uang_simpan` int(11) NOT NULL,
  `bukti_simpan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simpan`
--

INSERT INTO `simpan` (`id_simpan`, `nip`, `tanggal_simpan`, `uang_simpan`, `bukti_simpan`) VALUES
(50, 200035, '2022-07-17 17:00:00', 100000, 'kelolabukustate1.jpg'),
(51, 200037, '2022-07-18 17:00:00', 100000, 'hitungdendastate1.jpg'),
(52, 200035, '2022-07-18 17:00:00', 500000, 'hitungdendastate2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `simpan_uang`
--

CREATE TABLE `simpan_uang` (
  `id_simpan` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `tanggal_simpan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uang_simpan` int(11) NOT NULL,
  `bukti_simpan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simpan_uang`
--

INSERT INTO `simpan_uang` (`id_simpan`, `anggota_id`, `tanggal_simpan`, `uang_simpan`, `bukti_simpan`) VALUES
(1, 18, '2022-04-23 14:47:12', 70000, 'Rancangan DB.PNG'),
(2, 18, '2022-04-23 15:15:45', 70000, 'Rancangan DB.PNG'),
(3, 19, '2022-04-23 15:17:13', 90000000, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nip`, `tipe`, `photo`) VALUES
(12, 'santinraeni', '$2y$10$eKQmWWAVH0x4E.nB9jJaD.2wz.y2ORAnEI4Oha1lsfq1RVSAe3WAe', 200037, 'Admin', 'Santi_Nuraeni1.png'),
(15, 'reymanda', '$2y$10$jWil3U3E//NF043Qtuf3dOkxwasZzjFAN1cBgAYeGwj8Spc1RFC2m', 200035, 'Anggota', 'default.png'),
(18, 'faizulhaqq', '$2y$10$jWil3U3E//NF043Qtuf3dOkxwasZzjFAN1cBgAYeGwj8Spc1RFC2m', 200038, 'Anggota', 'doctor4.jpg'),
(28, 'santinraeni', '$2y$10$SFueI8xROu18rcX8tqFwSuoKnr2/zL.qvx02nkjItVndqAk3CPyC2', 200034, 'Admin', 'default.png'),
(29, 'reymanda', '$2y$10$4gN8izfrxwvFMnzXY1NZBOeLrJ9bhVihy04e.GdIgtZjj9/NmqyKq', 200035, 'Anggota', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `angsur_uang`
--
ALTER TABLE `angsur_uang`
  ADD PRIMARY KEY (`id_angsur`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `simpan`
--
ALTER TABLE `simpan`
  ADD PRIMARY KEY (`id_simpan`);

--
-- Indexes for table `simpan_uang`
--
ALTER TABLE `simpan_uang`
  ADD PRIMARY KEY (`id_simpan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `angsur_uang`
--
ALTER TABLE `angsur_uang`
  MODIFY `id_angsur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `simpan`
--
ALTER TABLE `simpan`
  MODIFY `id_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `simpan_uang`
--
ALTER TABLE `simpan_uang`
  MODIFY `id_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
