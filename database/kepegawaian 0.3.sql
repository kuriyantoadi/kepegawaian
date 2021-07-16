-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2021 at 11:28 
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
(8, '8', 'test1', '4e07f13791c5cd194f1ce63cf2da6c14.pdf', '07-07-2021  18:17'),
(11, '1', 'a', 'f903b6bbd91b09ad428d06877a808835.pdf', '15-07-2021  18:47'),
(13, '1', 'a', 'a5558cd5edf5612b3d6dec6823028c10.pdf', '15-07-2021  18:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tgl_upload` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `isi_pengumuman`, `tgl_upload`, `kondisi`, `penulis`) VALUES
(3, 'Upload Berkas SK Dinas Provinsi', '10-07-2021  20:17', 'tutup', 'Kepala Bidang');

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
(1, 'pns', '331a737881b15d5764dba9effc6f5e66', 'pns', 'Aji Sukmana', '3', 'q', '1', '1', '3', '', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
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
(1, 'kasubag', '143ad2695caf8f2368b5d9ef03d37ee8', 'kasubag'),
(3, 'op', '11d8c28a64490a987612f2332502467f', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

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
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pns`
--
ALTER TABLE `tb_pns`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
