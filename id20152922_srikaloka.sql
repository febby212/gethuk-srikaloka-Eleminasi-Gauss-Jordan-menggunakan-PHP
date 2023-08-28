-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2023 at 11:30 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20152922_srikaloka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(3) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `username`, `password`) VALUES
(1, 'dina', 123);

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE `hitung` (
  `id_barang` int(12) NOT NULL,
  `singkong1` int(12) NOT NULL,
  `singkong2` int(12) NOT NULL,
  `singkong3` int(12) NOT NULL,
  `gula1` int(12) NOT NULL,
  `gula2` int(12) NOT NULL,
  `gula3` int(12) NOT NULL,
  `isian1` int(12) NOT NULL,
  `isian2` int(12) NOT NULL,
  `isian3` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hitung`
--

INSERT INTO `hitung` (`id_barang`, `singkong1`, `singkong2`, `singkong3`, `gula1`, `gula2`, `gula3`, `isian1`, `isian2`, `isian3`) VALUES
(1, 30, 28, 37, 10, 9, 7, 10, 13, 6);

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id_user` int(3) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id_user`, `username`, `email`, `no_hp`, `password`) VALUES
(1, 'bambank', 'bambank@gmail.com', 85868868, '123'),
(2, 'febby', 'jo@gmail.com', 894654, '123'),
(94, 'bambank1', 'muhammadfebby212@gmail.com', 894654, '123'),
(139, 'bambank17', 'jhonobro144@gmail.com', 3131313, '123');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_sar` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_sar`, `nama`, `saran`) VALUES
(47, 'Bambang ', 'Sudah Bagus, Lanjutkan!!!!\r\n      '),
(48, 'dina', 'tampilan OK, tapi ada yang kureng¿'),
(49, 'jhon', 'Oke sih, tapi emang oke aja hehehe :)    '),
(50, 'Cluster Don', 'Masih ada yang kurang, tapi saya gak tau :)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_sar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_barang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_sar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
