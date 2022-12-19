-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 04:48 AM
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
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(25) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `date_created`, `date`) VALUES
(52, '::1', '2022-11-29 07:53:47', '2022-11-29'),
(53, '::1', '2022-11-29 07:53:51', '2022-11-29'),
(54, '::1', '2022-11-30 07:50:55', '2022-11-30'),
(55, '::1', '2022-11-30 07:53:16', '2022-11-30'),
(56, '::1', '2022-11-28 07:59:26', '2022-11-28'),
(57, '::1', '2022-11-29 09:02:55', '2022-11-29'),
(58, '::1', '2022-11-29 09:04:13', '2022-11-29'),
(59, '::1', '2022-11-29 09:05:22', '2022-11-29'),
(60, '::1', '2022-11-30 09:04:45', '2022-11-30'),
(62, '::1', '2022-12-01 03:51:48', '2022-12-01'),
(63, '::1', '2022-12-01 04:54:54', '2022-12-01'),
(64, '::1', '2022-12-01 06:06:01', '2022-12-01'),
(65, '::1', '2022-12-01 08:46:01', '2022-12-01'),
(66, '::1', '2022-12-01 08:58:38', '2022-12-01'),
(67, '::1', '2022-12-02 03:35:55', '2022-12-02'),
(68, '::1', '2022-12-02 03:46:53', '2022-12-02'),
(69, '::1', '2022-12-02 03:55:24', '2022-12-02'),
(70, '::1', '2022-12-02 04:08:51', '2022-12-02'),
(71, '::1', '2022-12-02 04:12:49', '2022-12-02'),
(72, '::1', '2022-12-02 04:16:08', '2022-12-02'),
(73, '::1', '2022-12-02 04:19:55', '2022-12-02'),
(74, '::1', '2022-12-02 04:23:20', '2022-12-02'),
(75, '::1', '2022-12-02 04:24:42', '2022-12-02'),
(76, '::1', '2022-12-02 04:24:42', '2022-12-02'),
(77, '::1', '2022-12-02 06:44:29', '2022-12-02'),
(78, '::1', '2022-12-02 07:55:35', '2022-12-02'),
(79, '::1', '2022-12-02 08:38:37', '2022-12-02'),
(80, '::1', '2022-12-02 08:55:38', '2022-12-02'),
(81, '::1', '2022-12-04 02:49:45', '2022-12-04'),
(82, '::1', '2022-12-04 02:50:39', '2022-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
