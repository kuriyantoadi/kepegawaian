-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2021 at 02:27 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `masa_kerja` varchar(20) NOT NULL,
  `gaji_pokok` varchar(20) NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `anak_1` varchar(100) NOT NULL,
  `anak_2` varchar(100) NOT NULL,
  `anak_3` varchar(100) NOT NULL,
  `anak_4` varchar(100) NOT NULL,
  `anak_5` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `gaji_pokok_lama` varchar(20) NOT NULL,
  `gaji_pokok_baru` varchar(20) NOT NULL,
  `mulai_tgl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `username`, `password`, `nama_pegawai`, `tgl_lahir`, `tempat_lahir`, `jk`, `agama`, `pangkat`, `jabatan`, `masa_kerja`, `gaji_pokok`, `nama_istri`, `anak_1`, `anak_2`, `anak_3`, `anak_4`, `anak_5`, `nip`, `unit_kerja`, `gaji_pokok_lama`, `gaji_pokok_baru`, `mulai_tgl`) VALUES
(1, '1', '1', '11', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, '2', 'c81e728d9d4c2f636f067f89cc14862c', '2', '20-06-2021', '2', 'Laki-laki', 'Islam', '2', '', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '13-06-2021'),
(3, '5', 'e4da3b7fbbce2345d7772b0674a318d5', '5', '', '5', 'Laki-laki', 'Islam', '5', '5', '5', '5', '5', '5', '5', '55', '5', '5', '5', '5', '5', '5', '16-06-2021'),
(4, '0', 'cfcd208495d565ef66e7dff9f98764da', '0', '', '0', 'Laki-laki', 'Islam', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '30-06-2021'),
(5, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '16-06-2021', '1', 'Laki-laki', 'Islam', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '16-06-2021'),
(6, '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', '9', '21-06-2021', '9', 'Laki-laki', 'Islam', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '21-06-2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
