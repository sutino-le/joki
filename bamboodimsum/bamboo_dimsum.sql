-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 10:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bamboo_dimsum`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `krn_id` int(11) NOT NULL,
  `krn_userid` varchar(100) NOT NULL,
  `krn_menuid` int(11) NOT NULL,
  `krn_tanggal` date NOT NULL,
  `krn_jumlah` int(11) NOT NULL,
  `krn_status` varchar(100) NOT NULL,
  `krn_kurir` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `levelid` int(11) NOT NULL,
  `levelnama` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`levelid`, `levelnama`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-05-23 03:20:59', '2024-05-23 06:37:59'),
(2, 'Kurir', '2024-05-23 06:43:18', '2024-05-23 06:43:18'),
(3, 'Pelanggan', '2024-05-23 06:43:28', '2024-05-23 06:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `menunama` varchar(225) NOT NULL,
  `menudeskripsi` text NOT NULL,
  `menuharga` double NOT NULL,
  `menufoto` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `menunama`, `menudeskripsi`, `menuharga`, `menufoto`, `created_at`, `updated_at`) VALUES
(3, 'Bamboo Spesial', 'Roti tawar, udang, cumi, dibungkus kulit siawmay', 18000, '1717484687_447c17975115170aace7.jpg', '2024-06-04 07:04:47', '2024-06-04 07:04:47'),
(4, 'Bola Kumis Naga', 'Daging ayam, udang, wortel, bengkoang, dibalut kulit pangsit', 18000, '1717484760_18df0ae7335f570b9acf.jpg', '2024-06-04 07:06:00', '2024-06-04 07:06:00'),
(5, 'Pangsit Udang Mayonaise', 'Pangsit goreng udang dan saos mayonaise', 17000, '1717484855_313f8b87b741cf5f3489.jpg', '2024-06-04 07:07:35', '2024-06-04 07:07:35'),
(6, 'Lumpia Kulit Tahu', 'Ham ayam, udang, sayur, dibungkus kulit tahu', 18500, '1717484927_aba94a3c25f175b1d881.jpg', '2024-06-04 07:08:47', '2024-06-04 07:08:47'),
(7, 'Bola Cumi', 'Cumi dibalut dengan roti tawar', 18000, '1717485110_0236b6eb8ba95735b712.jpg', '2024-06-04 07:11:50', '2024-06-04 07:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `pjl_id` int(11) NOT NULL,
  `pjl_nomor` int(11) NOT NULL,
  `pjl_userid` varchar(100) NOT NULL,
  `pjl_tanggal` date NOT NULL,
  `pjl_totalharga` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`pjl_id`, `pjl_nomor`, `pjl_userid`, `pjl_tanggal`, `pjl_totalharga`, `created_at`, `updated_at`) VALUES
(1, 1, 'tian', '2024-06-12', 70000, '2024-06-12 01:59:15', '2024-06-12 01:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `psn_id` int(11) NOT NULL,
  `psn_nomor` int(11) NOT NULL,
  `psn_userid` varchar(100) NOT NULL,
  `psn_menuid` int(11) NOT NULL,
  `psn_tanggal` date NOT NULL,
  `psn_jumlah` int(11) NOT NULL,
  `psn_status` varchar(100) NOT NULL,
  `psn_kurir` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`psn_id`, `psn_nomor`, `psn_userid`, `psn_menuid`, `psn_tanggal`, `psn_jumlah`, `psn_status`, `psn_kurir`, `created_at`, `updated_at`) VALUES
(1, 1, 'tian', 4, '2024-06-12', 2, 'Pesanan Selesai', 'andi', '2024-06-12 01:59:15', '2024-06-12 06:36:45'),
(2, 1, 'tian', 5, '2024-06-12', 2, 'Pesanan Selesai', 'andi', '2024-06-12 01:59:15', '2024-06-12 06:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(100) NOT NULL,
  `usernama` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userhp` varchar(15) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `useralamat` text NOT NULL,
  `userlevel` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usernama`, `useremail`, `userhp`, `userpassword`, `useralamat`, `userlevel`, `created_at`, `updated_at`) VALUES
('Admin', 'Administrator', 'admin@gmail.com', '08xxxxxxxxxx', '123456', 'Jakarta', 1, '2024-05-23 03:23:22', '2024-05-23 08:01:05'),
('andi', 'Andi', 'andi@gmail.com', '088808881234', '123456', 'Jakarta', 2, '2024-06-04 07:26:45', '2024-06-04 07:26:45'),
('tian', 'Septian', 'septian@gmail.com', '085810100913', '123456', 'Kamal, Tegal Alur, Jakarta Barat.', 3, '2024-06-12 01:57:45', '2024-06-12 01:57:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`krn_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`levelid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`pjl_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`psn_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userlevel` (`userlevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `krn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `levelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `pjl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `psn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userlevel`) REFERENCES `level` (`levelid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
