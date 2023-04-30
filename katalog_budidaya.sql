-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 06:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanitalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog_budidaya`
--

CREATE TABLE `katalog_budidaya` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `editedAt` date DEFAULT NULL,
  `pengelola` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katalog_budidaya`
--

INSERT INTO `katalog_budidaya` (`id`, `judul`, `deskripsi`, `createAt`, `editedAt`, `pengelola`, `gambar`) VALUES
(4, 'Budidaya Tin', 'Menanam Buah Tin Dari Biji di Dalam Pot - Tin atau Ara (Ficus carica L.) adalah sejenis tumbuhan penghasil buah-buahan yang dapat dimakan yang berasal dari Asia Barat. Buahnya bernama sama. Nama \"Tin\" diambil dari bahasa Arab, juga dikenal dengan nama \"Ar', '2023-04-29 15:39:06', NULL, 1, 'buah_tin_oke.jpg'),
(9, 'Budidaya Kopi', 'Kopi termasuk salah satu komoditas perkebunan yang menggiurkan. Bukan sekadar pada level nasional, melainkan juga di level internasional.\r\nPada level nasional, kedai kopi mudah dijumpai di setiap daerah di Indonesia. Sebagian besar menggunakan produk peta', '2023-04-29 15:57:55', NULL, 2, 'kopi_oke.jpg'),
(20, 'Budidaya Padi', 'Padi merupakan jenis tanaman pangan yang mempunyai peran penting sebagai tanaman pangan dunia. Padi sebagai penghasil beras ini tergolong dalam jenis tanaman rumput-rumputan (Poaceae). Semakin meningkatnya permintaan beras membuat begitu penting peran bud', '2023-04-30 15:26:32', NULL, 1, 'padi_oke.jpg'),
(23, 'Budidaya Bayam', 'Bayam merupakan salah satu sayuran yang biasa dikonsumsi masyarakat Indonesia. Tanaman dengan nama ilmiah (Amaranthus spp. L) ini tumbuh di daerah tropis seperti Indonesia, kabarnya tanaman ini berasal dari Amerika. Bayam merupakan tanaman yang mudah dibu', '2023-04-30 15:38:23', NULL, 1, 'bayam_oke.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog_budidaya`
--
ALTER TABLE `katalog_budidaya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog_budidaya`
--
ALTER TABLE `katalog_budidaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
