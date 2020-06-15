-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 02:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `xx_kategori`
--

CREATE TABLE `xx_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kode_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_kategori`
--

INSERT INTO `xx_kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`, `created_at`) VALUES
(1, 'antb', 'Antibiotik', '2020-06-14 00:00:00'),
(2, 'antv', 'Antivirus', '2020-06-14 00:00:00'),
(4, 'obtank', 'Obat Anak', '2020-06-14 12:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `xx_laporan`
--

CREATE TABLE `xx_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `no_invoice` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1. keluar 2. masuk\r\n',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_laporan`
--

INSERT INTO `xx_laporan` (`id_laporan`, `id_obat`, `no_invoice`, `jumlah`, `pendapatan`, `status`, `created_at`) VALUES
(1, 1, 'dasjkasdjasdj', 10, 100000, 2, '2020-06-15 01:06:53'),
(2, 1, 'asdasd', 5, 50000, 2, '2020-06-15 01:06:46'),
(3, 1, 'asddasad', 5, 60000, 1, '2020-06-15 02:06:44'),
(4, 1, 'iniinvoice', 2, 24000, 1, '2020-06-15 02:06:07'),
(5, 1, 'asdasdasd', 8, 96000, 1, '2020-06-15 02:06:42'),
(6, 1, 'Tes123', 10, 100000, 2, '2020-06-15 02:06:14'),
(7, 2, 'Tes456', 20, 200000, 2, '2020-06-15 02:06:24'),
(8, 2, 'Tes678', 20, 200000, 2, '2020-06-15 02:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `xx_obat`
--

CREATE TABLE `xx_obat` (
  `id_obat` int(11) NOT NULL,
  `kode_obat` varchar(50) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `harga_beli` bigint(20) NOT NULL,
  `harga_jual` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_obat`
--

INSERT INTO `xx_obat` (`id_obat`, `kode_obat`, `id_satuan`, `id_kategori`, `nama_obat`, `stok`, `harga_beli`, `harga_jual`, `created_at`) VALUES
(1, 'asdasdads', 2, 1, 'asdasdasdasd', 10, 10000, 12000, '2020-06-14 12:06:28'),
(2, 'tes', 2, 4, 'tes', 40, 10000, 10000, '2020-06-15 02:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `xx_satuan`
--

CREATE TABLE `xx_satuan` (
  `id_satuan` int(11) NOT NULL,
  `kode_satuan` varchar(50) NOT NULL,
  `nama_satuan` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_satuan`
--

INSERT INTO `xx_satuan` (`id_satuan`, `kode_satuan`, `nama_satuan`, `created_at`) VALUES
(2, 'KG', 'Kilogram', '2020-06-14 12:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `xx_users`
--

CREATE TABLE `xx_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1 COMMENT '1. active, 2. tidak aktif',
  `status` int(11) NOT NULL COMMENT '1. pegawai, 2. apoteker, 3.gudang',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_users`
--

INSERT INTO `xx_users` (`id_user`, `username`, `password`, `nama`, `is_active`, `status`, `created_at`) VALUES
(1, 'apoteker', '$2y$10$9qpJg9s4l/U3hvOAmhAmEuds7JADHYjocpxo0lR8Tyo1P4vp1vx6e', 'Apoteker', 1, 2, '2020-06-15 17:47:46'),
(2, 'gudang', '$2y$10$9qpJg9s4l/U3hvOAmhAmEuds7JADHYjocpxo0lR8Tyo1P4vp1vx6e', 'admin gudang', 1, 3, '2020-06-15 19:50:51'),
(3, 'pegawai', '$2y$10$9qpJg9s4l/U3hvOAmhAmEuds7JADHYjocpxo0lR8Tyo1P4vp1vx6e', 'Pegawai 1', 1, 1, '2020-06-15 19:51:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xx_kategori`
--
ALTER TABLE `xx_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `xx_laporan`
--
ALTER TABLE `xx_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `xx_obat`
--
ALTER TABLE `xx_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `xx_satuan`
--
ALTER TABLE `xx_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `xx_users`
--
ALTER TABLE `xx_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xx_kategori`
--
ALTER TABLE `xx_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `xx_laporan`
--
ALTER TABLE `xx_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `xx_obat`
--
ALTER TABLE `xx_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xx_satuan`
--
ALTER TABLE `xx_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xx_users`
--
ALTER TABLE `xx_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
