-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2021 at 08:25 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `sk_walikota_pdf1` varchar(100) NOT NULL,
  `sk_walikota_pdf2` varchar(100) NOT NULL,
  `sk_walikota_pdf3` varchar(100) NOT NULL,
  `sk_walikota_pdf4` varchar(100) NOT NULL,
  `sk_walikota_pdf5` varchar(100) NOT NULL,
  `sk_walikota_pdf6` varchar(100) NOT NULL,
  `sk_walikota_pdf7` varchar(100) NOT NULL,
  `sk_walikota_pdf8` varchar(100) NOT NULL,
  `sk_gub_pdf1` varchar(100) NOT NULL,
  `sk_gub_pdf2` varchar(100) NOT NULL,
  `sk_gub_pdf3` varchar(100) NOT NULL,
  `sk_gub_pdf4` varchar(100) NOT NULL,
  `sk_gub_pdf5` varchar(100) NOT NULL,
  `sk_gub_pdf6` varchar(100) NOT NULL,
  `sk_gub_pdf7` varchar(100) NOT NULL,
  `sk_gub_pdf8` varchar(100) NOT NULL,
  `nilai_prestasi_1` varchar(100) NOT NULL,
  `nilai_prestasi_2` varchar(100) NOT NULL,
  `nilai_prestasi_3` varchar(100) NOT NULL,
  `nilai_prestasi_4` varchar(100) NOT NULL,
  `nilai_prestasi_5` varchar(100) NOT NULL,
  `nilai_prestasi_6` varchar(100) NOT NULL,
  `nilai_prestasi_7` varchar(100) NOT NULL,
  `nilai_prestasi_8` varchar(100) NOT NULL,
  `riwayat_pangkat_1` varchar(100) NOT NULL,
  `riwayat_pangkat_2` varchar(100) NOT NULL,
  `riwayat_pangkat_3` varchar(100) NOT NULL,
  `riwayat_pangkat_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tgl_upload` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `id_pegawai`, `keterangan`, `nama_file`, `tgl_upload`) VALUES
(7, '1', 'update', '2de38fb6c3396f522a14330e94514be7.pdf', '06-07-2021  19:36'),
(8, '8', 'jos pol', '4e07f13791c5cd194f1ce63cf2da6c14.pdf', '07-07-2021  18:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `tgl_post` varchar(30) NOT NULL,
  `judul_info` varchar(100) NOT NULL,
  `isi_info` text NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pns`
--

CREATE TABLE `tb_pns` (
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
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
-- Dumping data for table `tb_pns`
--

INSERT INTO `tb_pns` (`id_pegawai`, `username`, `password`, `status`, `nama_pegawai`, `tgl_lahir`, `tempat_lahir`, `jk`, `agama`, `pangkat`, `jabatan`, `masa_kerja`, `gaji_pokok`, `nama_istri`, `anak_1`, `anak_2`, `anak_3`, `anak_4`, `anak_5`, `nip`, `unit_kerja`, `gaji_pokok_lama`, `gaji_pokok_baru`, `mulai_tgl`) VALUES
(1, 'pns', '331a737881b15d5764dba9effc6f5e66', 'pns', 'Aji Santoso', '3', 'q', '1', '1', '3', '', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
(5, '101', 'c4ca4238a0b923820dcc509a6f75849b', 'pns', 'jos gando', '0001-11-01', '1', 'Laki-laki', 'Islam', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-07-14'),
(6, '102', 'c4ca4238a0b923820dcc509a6f75849b', 'pns', 'sate ayam', '0001-01-01', '1', 'Laki-laki', 'Islam', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0001-01-01'),
(7, '013', 'c4ca4238a0b923820dcc509a6f75849b', 'pns', 'shaun the sip', '2021-07-07', '1', 'Laki-laki', 'Islam', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-01-19');

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
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_pns`
--
ALTER TABLE `tb_pns`
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
-- AUTO_INCREMENT for table `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pns`
--
ALTER TABLE `tb_pns`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
