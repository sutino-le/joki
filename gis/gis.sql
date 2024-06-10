-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 10:19 AM
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
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_intilejen`
--

CREATE TABLE `data_intilejen` (
  `intel_id` int(11) NOT NULL,
  `intel_judul` varchar(225) NOT NULL,
  `intel_deskripsi` text NOT NULL,
  `intel_katid` int(11) NOT NULL,
  `intel_lokid` int(11) NOT NULL,
  `intel_tanggal` date NOT NULL,
  `intel_level` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_intilejen`
--

INSERT INTO `data_intilejen` (`intel_id`, `intel_judul`, `intel_deskripsi`, `intel_katid`, `intel_lokid`, `intel_tanggal`, `intel_level`, `created_at`, `updated_at`) VALUES
(3, 'Pencurian', 'terjadi pencurian di Jl. Pasar No.5, Kota Tasikmalaya. terjadi Pencurian motor di area parkir  Pasar Tasikmalaya  pada jam 14:30 WIB, 1 motor milik pengunjung pasar.', 2, 7, '2024-06-10', 'Sedang', '2024-06-10 08:06:18', '2024-06-10 08:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `katid` int(11) NOT NULL,
  `katnama` varchar(100) NOT NULL,
  `katdeskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`katid`, `katnama`, `katdeskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Ancaman', 'Kriminalitas, Terorisme, Keamanan Siber', '2024-06-10 02:05:02', '2024-06-10 06:47:31'),
(3, 'Gangguan', 'Demonstrasi, Konflik Sosial, Ketenangan Masyarakat', '2024-06-10 06:48:04', '2024-06-10 06:48:04'),
(4, 'Hambatan', 'Infrastruktur, Sumber Daya, Teknologi', '2024-06-10 06:48:33', '2024-06-10 06:48:33');

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
(1, 'Admin', '2024-06-07 05:18:27', '2024-06-10 02:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `lokid` int(11) NOT NULL,
  `loknama` varchar(225) NOT NULL,
  `loklink` text NOT NULL,
  `lokdeskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`lokid`, `loknama`, `loklink`, `lokdeskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Perhimpunan Indonesia Tionghoa (INTI)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37646.99072288219!2d108.21263070905057!3d-7.336817372028767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f574f21e6bead%3A0x8f4e8fbcefb37080!2sPerhimpunan%20Indonesia%20Tionghoa%20(INTI)%20PC%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1718004238514!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Daftar Organisasi Kemasyarakatan Dan Lembaga Swadaya Masyarakat', '2024-06-10 07:28:11', '2024-06-10 07:28:11'),
(2, 'Tiger Fans Club', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.24194686155!2d108.2213492757775!3d-7.326699472055995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f57073d7b4f6d%3A0x6c6746a42bd0d274!2sBasecamp%20Tasik%20Tiger%20Fans%20Club!5e0!3m2!1sid!2sid!4v1718004684166!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Daftar Organisasi Kemasyarakatan Dan Lembaga Swadaya Masyarakat', '2024-06-10 07:32:13', '2024-06-10 07:32:57'),
(3, 'Scooter Owner Group', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31658.09562204427!2d108.20081440593846!3d-7.324446310181267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f57369c9314cd%3A0x8789dfb2f99872c7!2sScooter%20Owners%20Group%20Indonesia!5e0!3m2!1sid!2sid!4v1718004871360!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Daftar Organisasi Kemasyarakatan Dan Lembaga Swadaya Masyarakat', '2024-06-10 07:34:56', '2024-06-10 07:34:56'),
(4, 'Lembaga Bantuan Hukum Tri Partied', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.080386755662!2d108.17249417577769!3d-7.344869972255484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f56eed0af72a9%3A0xf8fe3934f80ea416!2sKantor%20LBH%20Tripartied!5e0!3m2!1sid!2sid!4v1718004926558!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Daftar Organisasi Kemasyarakatan Dan Lembaga Swadaya Masyarakat', '2024-06-10 07:35:44', '2024-06-10 07:35:44'),
(5, 'Leuwiliang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15825.57961304449!2d108.18084421026884!3d-7.421473503387848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65f85fe49f7671%3A0x90a756a3120b31af!2sLeuwiliang%2C%20Kec.%20Kawalu%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1718005052217!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kelurahan Leuwiliang', '2024-06-10 07:38:34', '2024-06-10 07:38:34'),
(6, 'Bantarsari', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.519360609733!2d108.18493514441481!3d-7.324702279420402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f56d626fa3463%3A0x9ed224d422ee30af!2sBantarsari%2C%20Kec.%20Bungursari%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1718005942675!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kelurahan Bantarsari', '2024-06-10 07:52:42', '2024-06-10 07:52:42'),
(7, 'Bungursari', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.237171173438!2d108.1564418560068!3d-7.3083554155888955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f51300cbf0515%3A0x25fb9733220a4020!2sKec.%20Bungursari%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1718006000932!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Keluarahan Bungursari', '2024-06-10 07:53:40', '2024-06-10 07:53:40'),
(8, 'Cibunigeulis', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.663760181738!2d108.1644460944144!3d-7.316565329258077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5134fd7a80f5%3A0x3aaa3c4f8d8486f0!2sCibunigeulis%2C%20Kec.%20Bungursari%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1718006039668!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kelurahan Cibunigeulis', '2024-06-10 07:54:14', '2024-06-10 07:54:14'),
(9, 'Sukajaya', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.49124989916!2d108.2629270944149!3d-7.326285279452038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59918d72167d%3A0x985d8b9845625244!2sSukajaya%2C%20Kec.%20Purbaratu%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1718006074880!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kelurahan Sukajaya', '2024-06-10 07:54:48', '2024-06-10 07:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(100) NOT NULL,
  `usernama` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userhp` varchar(30) NOT NULL,
  `userpassword` varchar(225) NOT NULL,
  `userlevel` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usernama`, `useremail`, `userhp`, `userpassword`, `userlevel`, `created_at`, `updated_at`) VALUES
('admin', 'Administrator', 'admin@gmail.com', '08xxxxxxxxxx', 'admin', 1, '2024-06-07 05:18:43', '2024-06-10 02:05:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_intilejen`
--
ALTER TABLE `data_intilejen`
  ADD PRIMARY KEY (`intel_id`);

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
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`lokid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_intilejen`
--
ALTER TABLE `data_intilejen`
  MODIFY `intel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `katid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `levelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `lokid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
