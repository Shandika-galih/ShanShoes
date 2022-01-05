-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 11:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`) VALUES
(1, 'shandika', 'shandika', 'shandika galih');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `br_id` int(6) NOT NULL,
  `br_nm` varchar(50) NOT NULL,
  `br_item` int(4) NOT NULL,
  `br_hrg` int(10) NOT NULL,
  `br_stok` int(9) NOT NULL,
  `br_satuan` varchar(20) NOT NULL,
  `br_gbr` varchar(100) NOT NULL,
  `ket` varchar(250) NOT NULL,
  `br_sts` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`br_id`, `br_nm`, `br_item`, `br_hrg`, `br_stok`, `br_satuan`, `br_gbr`, `ket`, `br_sts`) VALUES
(12, 'Nike A486', 1, 26000, 3, 'pcs', 'gambar/61cc6e69a9ff3.png', 'Bekas tapi masih bagus dan import dari bandung', 'S'),
(27, 'Adidas N323', 1, 770000, 20, 'pcs', 'gambar/61cc88e24ac38.png', 'Barang langsung import dari luar negri kualitas nyaman dipakai', 'N'),
(26, 'Adidas S552', 1, 55000, 55, 'pcs', 'gambar/61cc887d0b097.png', 'barang second masih bagus dan sangat nyaman dipakai', 'S'),
(23, 'Puma Y772', 1, 200000, 11, 'pcs', 'gambar/61cc842055d79.png', 'Barang baru import langsung dari jerman', 'N'),
(24, 'WWW 2514', 1, 350000, 3, 'pcs', 'gambar/61cc85ea90038.png', 'Barang baru import langsung dari japan', 'N'),
(22, 'Nike C525', 1, 180000, 7, 'pcs', 'gambar/61cc83ceb21cb.png', 'Barang baru import langsung dari japan', 'N'),
(15, 'Nike S114', 1, 580000, 50, 'pcs', 'gambar/61cc7d6d2bdfa.png', 'Barang baru import langsung dari japan', 'N'),
(25, 'Adidas N22', 1, 999000, 22, 'pcs', 'gambar/61cc863eb5b43.png', 'Barang baru import langsung dari japan', 'N'),
(28, 'Adidas N898', 1, 560000, 44, 'pcs', 'gambar/61cc8918960f7.png', 'Barang baru import langsung dari luar negri aman dan nyaman', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trs` int(11) NOT NULL,
  `nm_pm` varchar(50) NOT NULL,
  `kota_pm` varchar(50) NOT NULL,
  `no_rek` char(9) NOT NULL,
  `bnk` varchar(50) NOT NULL,
  `tgl_trs` date NOT NULL,
  `total` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trs`, `nm_pm`, `kota_pm`, `no_rek`, `bnk`, `tgl_trs`, `total`) VALUES
(23, 'Susanto', 'NewYork city', '77556467', 'Danamon', '2021-12-31', '700000'),
(24, 'Karina', 'Klaten', '556777864', 'Permata', '2021-12-31', '700000'),
(25, 'Taufik nurdin', 'Klaten', '77556467', 'Mandiri', '2021-12-31', '1540000'),
(26, 'DINA', 'Jogjakarta', '555676544', 'Permata', '2022-01-03', '530000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_usr` int(11) NOT NULL,
  `nm_usr` varchar(50) NOT NULL,
  `log_usr` varchar(20) NOT NULL,
  `pas_usr` varchar(100) NOT NULL,
  `email_usr` varchar(50) NOT NULL,
  `almt_usr` text NOT NULL,
  `kp_usr` varchar(6) NOT NULL,
  `kota_usr` varchar(25) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `rek` varchar(30) NOT NULL,
  `nmrek` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `sts_usr` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_usr`, `nm_usr`, `log_usr`, `pas_usr`, `email_usr`, `almt_usr`, `kp_usr`, `kota_usr`, `tlp`, `rek`, `nmrek`, `bank`, `sts_usr`) VALUES
(30, 'slamet', 'slamet', 'slamet', 'galihamin9@gmail.com', 'boyolali jawa tengah', '57375', 'solo', '088167423', '7753238', 'shandika', 'bank syariah mandiri', 'p'),
(31, 'saya', 'saya', 'saya', 'saya9@gmail.com', 'solo jawa tengah', '57379', 'solo', '00088888', '77538238', 'shandika', 'bank syariah mandiri', 'l');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `br_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
