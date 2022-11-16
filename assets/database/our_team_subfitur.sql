-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2022 pada 04.28
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `our_team_subfitur`
--

CREATE TABLE `our_team_subfitur` (
  `id` int(1) NOT NULL,
  `tk` varchar(250) NOT NULL,
  `sd` varchar(250) NOT NULL,
  `smp` varchar(250) NOT NULL,
  `sma` varchar(250) NOT NULL,
  `perguruan_tinggi` varchar(250) NOT NULL,
  `pengalaman` text NOT NULL,
  `id_fitur` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `our_team_subfitur`
--

INSERT INTO `our_team_subfitur` (`id`, `tk`, `sd`, `smp`, `sma`, `perguruan_tinggi`, `pengalaman`, `id_fitur`) VALUES
(2, 'TK fatahilah', 'SD negri beji 4', 'fatul hikmah', 'yaj', 'ui', 'pernah menjad seorang guru sebelum menjadi beban orang tua secara terus menerus', 1),
(3, 'TKIT darusalam', 'SDN negri beji 5', 'fatul barokah', 'yaj', 'ui', 'kerja kelompok', 2),
(4, 'TKIT as-salam', 'SDN negri beji 6', 'fatul ijar', 'yaj', 'ui', 'membantu ibu dan ayah', 3),
(5, 'TK fatahilah', 'SDN negri beji 4', 'fatul hikmah', 'yaj', 'ui', 'pernah menjad seorang guru sebelum menjadi beban orang tua secara terus menerus', 9),
(6, 'TK fatahilah', 'SD negri beji 4', 'fatul hikmah', 'yaj', 'ui', 'pernah menjad seorang guru sebelum menjadi beban orang tua secara terus menerus', 10),
(11, 'TK fatahilah', 'SD negri beji 4', 'fatul hikmah', 'yaj', 'ui', 'pernah menjad seorang guru sebelum menjadi beban orang tua secara terus menerus', 11);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `our_team_subfitur`
--
ALTER TABLE `our_team_subfitur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `our_team_subfitur`
--
ALTER TABLE `our_team_subfitur`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
