-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 12:03 PM
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
-- Database: `dmoze`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `katid` int(11) NOT NULL,
  `katnama` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`katid`, `katnama`, `created_at`, `updated_at`) VALUES
(1, 'Hair Cut & Style', '2024-03-06 04:32:31', '2024-05-07 03:28:42'),
(2, 'Creambath Hair Spa / Mask', '2024-03-06 04:32:31', '2024-05-07 03:28:10'),
(3, 'Body Scrub / Message <i>Ladies Only</i>', '2024-03-06 04:32:31', '2024-03-06 04:32:31'),
(4, 'Pedicure & Manicure', '2024-03-06 04:32:31', '2024-03-06 04:32:31'),
(6, 'Make Up', '2024-05-07 03:32:14', '2024-05-07 03:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `levelid` int(11) NOT NULL,
  `levelnama` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`levelid`, `levelnama`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-05-06 03:37:23', '2024-05-30 06:52:06'),
(2, 'Pelanggan', '2024-05-06 03:37:23', '2024-05-30 08:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `menunama` text NOT NULL,
  `menukategori` int(11) NOT NULL,
  `menudeskripsi` text NOT NULL,
  `jenis_a` varchar(100) NOT NULL,
  `harga_a` double NOT NULL,
  `jenis_b` varchar(100) NOT NULL,
  `harga_b` double NOT NULL,
  `jenis_c` varchar(100) NOT NULL,
  `harga_c` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `menunama`, `menukategori`, `menudeskripsi`, `jenis_a`, `harga_a`, `jenis_b`, `harga_b`, `jenis_c`, `harga_c`, `created_at`, `updated_at`) VALUES
(1, 'Man Hair Cut + Wash + Dry', 1, '', 'Stylist 2', 60000, 'Stylist 1', 0, '', 0, '2024-05-07 14:10:00', '2024-05-31 06:20:06'),
(2, 'Woman Hair Cut + Wash + Dry', 1, '', 'Stylist 2', 85000, 'Stylist 1', 105000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(3, 'Woman Hair Cut + Blow In/Catok', 1, '', 'Stylist 2', 125000, 'Stylist 1', 140000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(4, 'Bangs Cut (gunting poni)', 1, '', 'Stylist 2', 45000, 'Stylist 1', 45000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(5, 'Dry Only', 1, '', 'Sort', 40000, 'Middle', 40000, 'Long', 40000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(6, 'Blow In', 1, '', 'Sort', 50000, 'Middle', 60000, 'Long', 70000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(7, 'Natural Blow', 1, '', 'Sort', 65000, 'Middle', 75000, 'Long', 90000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(8, 'Catok', 1, '', 'Sort', 50000, 'Middle', 60000, 'Long', 75000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(9, 'Curly', 1, '', 'Sort', 65000, 'Middle', 65000, 'Long', 85000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(10, 'Hair Keratin Treatment', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 725000, 'Middle', 0, 'Long', 1200000, '2024-05-07 14:10:00', '2024-05-31 03:42:05'),
(11, 'Hair Colouring', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 450000, 'Middle', 600000, 'Long', 750000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(12, 'Hair Highlight Full', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 650000, 'Middle', 775000, 'Long', 900000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(13, 'Hair Cleansing', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 250000, 'Middle', 250000, 'Long', 250000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(14, 'Hair Lightening', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 375000, 'Middle', 450000, 'Long', 550000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(15, 'Hair Toning', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 300000, 'Middle', 400000, 'Long', 450000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(16, 'Hair Magical Smooth', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 600000, 'Middle', 750000, 'Long', 875000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(17, 'Hair Smoothing Keratin', 1, 'Hair Colouring Balayage, Hair Colouring Fashion, Hair Extention', 'Sort', 650000, 'Middle', 875000, 'Long', 1050000, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(18, 'Creambath Traditional (total 60 minutes)', 2, 'Stawberry / Avocado / Grape / Ginseng / Collagen / Milky / Aloe Vera <br> Including : Hair Creambath, Back Message, Wash & Dry', '', 90000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(19, 'Creambath Traditional 60\'', 2, 'Stawberry / Avocado / Grape / Ginseng / Collagen / Milky / Aloe Vera <br> Including : Hair Creambath, Back Message, Wash & Dry <br>Add. Back Message Scrub', '', 140000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(20, 'Creambath Traditional 60\'', 2, 'Stawberry / Avocado / Grape / Ginseng / Collagen / Milky / Aloe Vera <br> Including : Hair Creambath, Back Message, Wash & Dry <br>Add. Food Message Scrub', '', 140000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(21, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> MPC Strawberry', 'For Single', 105000, 'For Couple', 200000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(22, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> MPC Green Tea', 'For Single', 105000, 'For Couple', 200000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(23, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> Biolage', 'For Single', 115000, 'For Couple', 220000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(24, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> Biolage Scalp mint', 'For Single', 145000, 'For Couple', 280000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(25, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> L\'oreal Wateer Lily', 'For Single', 135000, 'For Couple', 260000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(26, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> L\'oreal Tea Tree Oil', 'For Single', 135000, 'For Couple', 260000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(27, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> L\'oreal Scalp DX', 'For Single', 180000, 'For Couple', 350000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(28, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> Makarizo Chocolate', 'For Single', 130000, 'For Couple', 250000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(29, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> Makarizo Vanilla Milk', 'For Single', 130000, 'For Couple', 250000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(30, 'Hair Spa', 2, 'Including : Hair Spa, Back Message, Wash & Dry <br> Makarizo Strawberry', 'For Single', 130000, 'For Couple', 250000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(31, 'Hair Mask', 2, 'Including : Hair Mask, Back Message, Wash & Dry <br> L\'oreal Hair Mask', 'For Single', 270000, 'For Couple', 530000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(32, 'Hair Mask', 2, 'Including : Hair Mask, Back Message, Wash & Dry <br> Karatin Hair Mask', 'For Single', 275000, 'For Couple', 540000, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(33, 'Grandma Hair Cut + Wash + Dry', 1, 'Special Price For Our Grandparents <br> *Please show year ID Card, the minimum age is 60 years', '', 65000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(34, 'Grandpa Hair Cut + Wash + Dry', 1, 'Special Price For Our Grandparents <br> *Please show year ID Card, the minimum age is 60 years', '', 50000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(35, 'Body Scrub 90\'', 3, 'Collagen<br>Including : Body Message Warm Oil, Body Scrub, Body Steam, Body Wash', '', 145000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(36, 'Body Scrub 90\'', 3, 'Whitening<br>Including : Body Message Warm Oil, Body Scrub, Body Steam, Body Wash', '', 145000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(37, 'Body Scrub 90\'', 3, 'Milky<br>Including : Body Message Warm Oil, Body Scrub, Body Steam, Body Wash', '', 145000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(38, 'Body Scrub 90\'', 3, 'Green Tea<br>Including : Body Message Warm Oil, Body Scrub, Body Steam, Body Wash', '', 145000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(39, 'Body Scrub 60\'', 3, 'Collagen<br>Including : Body Message Scrub,  Body Steam, Body Wash', '', 125000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(40, 'Body Scrub 60\'', 3, 'Whitening<br>Including : Body Message Scrub,  Body Steam, Body Wash', '', 125000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(41, 'Body Scrub 60\'', 3, 'Milky<br>Including : Body Message Scrub,  Body Steam, Body Wash', '', 125000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00'),
(42, 'Body Scrub 60\'', 3, 'Green Tea<br>Including : Body Message Scrub,  Body Steam, Body Wash', '', 125000, '', 0, '', 0, '2024-05-07 14:10:00', '2024-05-07 14:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pms_id` int(11) NOT NULL,
  `pms_user` varchar(100) NOT NULL,
  `pms_menu` int(11) NOT NULL,
  `pms_tanggal` date NOT NULL,
  `pms_status` varchar(100) NOT NULL,
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
  `useremail` text NOT NULL,
  `userhp` text NOT NULL,
  `userpassword` text NOT NULL,
  `userlevel` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usernama`, `useremail`, `userhp`, `userpassword`, `userlevel`, `created_at`, `updated_at`) VALUES
('admin', 'Administrator', 'dmoze@gmail.com', '08xxxxxxxxxx', 'admin', 1, '2024-05-06 06:08:20', '2024-05-31 01:55:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`katid`);

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
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`pms_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `katid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `levelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `pms_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
