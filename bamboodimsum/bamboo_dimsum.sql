-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:09 AM
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
-- Table structure for table `det_pesanan`
--

CREATE TABLE `det_pesanan` (
  `det_psn_id` int(11) NOT NULL,
  `det_psn_menuid` int(11) NOT NULL,
  `det_psn_jumlah` int(11) NOT NULL,
  `det_psn_nomor` int(11) NOT NULL,
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
(3, 'Kurir', '2024-05-23 06:43:18', '2024-05-23 06:43:18'),
(4, 'Pelanggan', '2024-05-23 06:43:28', '2024-05-23 06:43:28');

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

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanid` int(11) NOT NULL,
  `pesannomor` int(11) NOT NULL,
  `pesanuser` varchar(100) NOT NULL,
  `pesanstatus` varchar(100) NOT NULL,
  `pesankurir` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_pesanan`
--

CREATE TABLE `temp_pesanan` (
  `temp_psn_id` int(11) NOT NULL,
  `temp_psn_menuid` int(11) NOT NULL,
  `temp_psn_jumlah` int(11) NOT NULL,
  `temp_psn_nomor` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('Admin', 'Administrator', 'admin@gmail.com', '08xxxxxxxxxx', '123456', 'Jakarta', 1, '2024-05-23 03:23:22', '2024-05-23 08:01:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `det_pesanan`
--
ALTER TABLE `det_pesanan`
  ADD PRIMARY KEY (`det_psn_id`);

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
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanid`);

--
-- Indexes for table `temp_pesanan`
--
ALTER TABLE `temp_pesanan`
  ADD PRIMARY KEY (`temp_psn_id`);

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
-- AUTO_INCREMENT for table `det_pesanan`
--
ALTER TABLE `det_pesanan`
  MODIFY `det_psn_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `levelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_pesanan`
--
ALTER TABLE `temp_pesanan`
  MODIFY `temp_psn_id` int(11) NOT NULL AUTO_INCREMENT;

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
