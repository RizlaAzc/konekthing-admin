-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 04:18 AM
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
-- Table structure for table `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosial_media`
--

INSERT INTO `sosial_media` (`id`, `nama`, `url`, `gambar`) VALUES
(1, 'Facebook', 'https://www.facebook.com/id.konekthing/?_rdc=2&_rdr', 'facebook-icon.svg'),
(2, 'Twitter', 'https://twitter.com/konekthingid/', 'twitter-icon.svg'),
(3, 'Instagram', 'https://www.instagram.com/konekthing_id/', 'instagram-icon.svg'),
(4, 'Linked In', 'https://www.linkedin.com/company/konekthing', 'linkedin-icon.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sosial_media`
--
ALTER TABLE `sosial_media`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
