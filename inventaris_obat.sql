-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 07:46 AM
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
(1, 'demam123', 'Demam', '2020-06-16 06:06:27'),
(2, 'Flunbatuk', 'Flu dan Batuk', '2020-06-16 06:06:09'),
(3, 'Antibiotik1', 'Antibiotik', '2020-06-16 06:06:29'),
(4, 'hrbl', 'Herbal', '2020-06-16 06:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `xx_laporan`
--

CREATE TABLE `xx_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `no_invoice` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1. keluar 2. masuk\r\n',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'obat1', 3, 1, 'PANADOL 500 ML 10 KAPLET', 0, 20000, 22800, '2020-06-16 06:06:00'),
(2, 'paract', 3, 1, 'PARACETAMOL 500 MG 10 KAPLET', 0, 22000, 24000, '2020-06-16 06:06:54'),
(3, 'bsvx', 2, 2, 'BISOLVON EXTRA SIRUP 60 ML', 0, 73000, 76100, '2020-06-16 06:06:54'),
(4, 'PCNF', 3, 2, 'PANADOL COLD DAN FLU 10 KAPLET', 0, 22000, 24600, '2020-06-16 06:06:45');

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
(1, 'pcs', 'pcs', '2020-06-16 06:06:04'),
(2, 'botol', 'botol', '2020-06-16 06:06:12'),
(3, 'Strip', 'Strip', '2020-06-16 06:06:49'),
(4, 'Sachet', 'Sachet', '2020-06-16 06:06:04'),
(5, 'Box', 'Box', '2020-06-16 06:06:28'),
(6, 'Tube', 'Tube', '2020-06-16 06:06:52');

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
(2, 'gudang', '$2y$10$9qpJg9s4l/U3hvOAmhAmEuds7JADHYjocpxo0lR8Tyo1P4vp1vx6e', 'admin gudang', 1, 2, '2020-06-15 19:50:51'),
(3, 'pegawai', '$2y$10$9qpJg9s4l/U3hvOAmhAmEuds7JADHYjocpxo0lR8Tyo1P4vp1vx6e', 'Pegawai 1', 1, 1, '2020-06-15 19:51:12'),
(4, 'yogaapsy', '$2y$10$Z3xzkeWb3fD7H4occMuF/uxyGx1VrEwr2bbwoajkk4Kke2Z/fksjO', 'Yoga Anugrah Pratama.SY', 1, 2, '2020-06-16 00:00:00');

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
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xx_obat`
--
ALTER TABLE `xx_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `xx_satuan`
--
ALTER TABLE `xx_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `xx_users`
--
ALTER TABLE `xx_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
