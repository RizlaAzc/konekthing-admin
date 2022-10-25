-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 09:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konekthing`
--

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(250) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `judul`, `deskripsi`, `url`, `gambar`) VALUES
(1, 'Konekthing IOT Platform', 'adalah IOT pioner Di INDONESIA Fokus Pada Sistem Otomatisasi, Komunikasi M2M, Interoperabilitas, Analisi Data Industri, Model Bisnis Baru, Pemeliharaan Prediktif & Manufaktur Kognitif.  IOT Konekthing solusi untuk berbagai masalah IT dalam menjawab sistem dan perangkat yang memberikan rasa Aman, Nyaman, Fleksibilitas, Efektifitas dan Efisiensi untuk kehidupan manusia yang lebih baik.', 'http://localhost/konekthing-web/kontak', 'beranda-logo(1).svg'),
(2, 'IRIS IOT Platform', 'Iris Konekthing \"Internet Of Things\" dirancang untuk mendukung Aplikasi Vertikal seperti Smart Sensor untuk Smart Home, Smart Building, Smart Office, Smart Cattle dan Fitur Horizontal dari berbagai macam jenis proses bisnis.', 'https://www.konekthing.com/product/iOT#lpage', 'beranda-logo(2).svg'),
(3, 'Software dan Aplikasi', 'Berpengalaman dalam memberikan pelayanan terbaik, teknologi yang sesuai, timeline pekerjaan terukur dan pembuatan custom sistem aplikasi berdasarkan kebutuhan client menjadikan Konekthing terbaik dibidangnya.', 'http://localhost/konekthing-web/portofolio', 'beranda-logo(3).svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
