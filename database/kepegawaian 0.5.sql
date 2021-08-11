-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2021 at 01:26 
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
  `id_keterangan` varchar(20) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tgl_upload` varchar(20) NOT NULL,
  `status_validasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `id_pegawai`, `id_keterangan`, `nama_file`, `tgl_upload`, `status_validasi`) VALUES
(8, '8', '2', '4e07f13791c5cd194f1ce63cf2da6c14.pdf', '07-07-2021  18:17', ''),
(16, '1', '3', '28d0f40016ea5dcd31ea63af7ec994c3.pdf', '18-07-2021  06:34', ''),
(17, '1', '3', '9b86f635ab2b1d4b09fdda4207344a9b.pdf', '10-08-2021  01:46', ''),
(19, '1', '2', '295184fd92f1cc18f204d3ea819a77b4.pdf', '10-08-2021  04:27', ''),
(24, '1', '6', 'e4b105bed75f4b33bb7c12a4656b4e11.pdf', '10-08-2021  07:05', 'terima'),
(25, '1', '5', 'f0ae6d320fb434aace5f8d9b62774a78.pdf', '10-08-2021  17:14', 'terima'),
(26, '1', '4', '6c2f4a4eb76cfa8ec15b859247403549.pdf', '11-08-2021  01:23', 'terima'),
(27, '1', '5', 'd18dd4c71e2b1569a133069edebe5caa.pdf', '11-08-2021  04:54', 'tolak');

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
-- Table structure for table `tb_permintaan_file`
--

CREATE TABLE `tb_permintaan_file` (
  `id_keterangan` int(11) NOT NULL,
  `nama_keterangan` varchar(100) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_permintaan_file`
--

INSERT INTO `tb_permintaan_file` (`id_keterangan`, `nama_keterangan`, `kondisi`) VALUES
(2, 'Data Pegawai', 'umum'),
(4, 'SK Pegawai Negeri 2020', 'naik_pangkat'),
(5, 'naik gaji', 'naik_gaji'),
(6, 'tunjangan', 'tunjangan_keluarga');

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
(1, 'pns', '331a737881b15d5764dba9effc6f5e66', 'pns', 'Aji Sukmana', '09-08-2021', 'q', '1', '1', '3', '', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '11-06-2013'),
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
-- Indexes for table `tb_permintaan_file`
--
ALTER TABLE `tb_permintaan_file`
  ADD PRIMARY KEY (`id_keterangan`);

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
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_permintaan_file`
--
ALTER TABLE `tb_permintaan_file`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
