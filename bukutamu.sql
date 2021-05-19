-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 08:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatamu`
--

CREATE TABLE `datatamu` (
  `id_tamu` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datatamu`
--

INSERT INTO `datatamu` (`id_tamu`, `tanggal`, `nama`, `email`, `website`, `pesan`) VALUES
(8, '2021-05-20', 'Prima Putra', 'primaputra024@gmail.com', 'https://primaptr.000webhostapp.com/', 'Hai Semoga cepat bertemu saya'),
(9, '2021-05-19', 'AMANDA AZZAHRA FADLA', 'amanda@gmail.com', 'amanda.com', 'Semoga Sehat selalu'),
(10, '2021-05-19', 'ANDRE ALFAREZY', 'andre@gmail.com', 'andre.com', 'Senang bertemu dengan Anda'),
(11, '2021-05-19', 'BAGAS HADID ZILZAL', 'bagas@gmail.com', 'bagas.com', 'Nice too meet you!'),
(12, '2021-05-19', 'Ridam Galik', 'ridamgalik@gmail.com', 'galik.com', 'See you next week!'),
(13, '2021-05-20', 'Rifan Aryanda', 'rifan@gmail.com', 'rifan.com', 'Pertemuan ini sangat berkesan'),
(14, '2021-05-20', 'Muhammad Aryan', 'aryan@gmail.com', 'aryanda.co.id', 'Hai Semoga cepat bertemu saya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatamu`
--
ALTER TABLE `datatamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatamu`
--
ALTER TABLE `datatamu`
  MODIFY `id_tamu` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
