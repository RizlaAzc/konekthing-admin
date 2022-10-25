-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 10:06 AM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(250) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `deskripsi`, `url`, `gambar`) VALUES
(1, 'Efisiensi Sumber Energi Kehidupan Berbasis IoT', 'Isu kelangkaan energi hingga saat ini masih menjadi kendala besar sehingga efisiensi energi mutlak dilakukan.', 'https://www.konekthing.com/blog/2021/02/11/efisiensi-sumber-energi-kehidupan-berbasis-internet-of-things', 'blog(1).jpg'),
(2, 'Cara Praktis dan Mudah Mengelola Inventaris Kantor Menggunakan Sistem Informasi Inventory', 'Kondisi seperti ini membuat pebisnis mengatur cashflow bisnis dengan lebih ketat lagi. Lesunya perekonomian dirasakan oleh seluruh.', 'https://www.konekthing.com/blog/2021/02/18/cara-praktis-dan-mudah-mengelola-inventaris-kantor-menggunakan-sistem-informasi-inventory', 'blog(2).png'),
(3, 'Solusi IoT Untuk Dorong UMKM Bangkit di Tengah Pandemi', 'Pembatasan kontak antar manusia atau social distancing merupakan salah satu langkah yang dapat dilakukan untuk menahan laju.', 'https://www.konekthing.com/blog/2021/02/10/solusi-internet-of-things-untuk-dorong-umkm-bangkit-di-tengah-pandemi', 'blog(3).jpg'),
(4, 'Aplikasi Learning Management System (LMS) Untuk Proses Belajar Online Selama Pandemi Covid-19', 'Kegiatan Belajar Mengajar atau KBM menjadi salah satu aktivitas yang paling terdampak oleh pandemi Covid-19.', 'https://www.konekthing.com/blog/2021/02/26/aplikasi-learning-management-system-untuk-proses-belajar-online-selama-pandemi-covid19', 'blog(4).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
