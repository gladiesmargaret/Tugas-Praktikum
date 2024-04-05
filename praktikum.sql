-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 06:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` int(18) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama`, `nip`, `alamat`) VALUES
(1, 'John Doe', 2147483647, 'Jalan apel 123'),
(2, 'Jane Doe', 2147483647, 'Jalan jambu 123'),
(3, 'Adam Smith', 2147483647, 'Jalan nenas 123'),
(4, 'Sarah Lee', 2147483647, 'Jalan sirsak 123'),
(5, 'Michael Wong', 2147483647, 'Jalan mangga 123'),
(6, 'Lisa Chen', 2147483647, 'Jalan pisang 123'),
(7, 'David Park', 2147483647, 'Jalan nangka 123'),
(8, 'Emily Wu', 2147483647, 'Jalan duku 123'),
(9, 'Jay Park', 2147483647, 'Jalan durian 123');

-- --------------------------------------------------------

--
-- Table structure for table `ktm`
--

CREATE TABLE `ktm` (
  `id_ktm` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nomor_identitas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ktm`
--

INSERT INTO `ktm` (`id_ktm`, `id_mahasiswa`, `nomor_identitas`) VALUES
(1, 1, 'KTM12345'),
(2, 2, 'KTM23456'),
(3, 3, 'KTM34567'),
(4, 4, 'KTM45678'),
(5, 5, 'KTM56789'),
(6, 6, 'KTM67890'),
(7, 7, 'KTM78901'),
(8, 8, 'KTM89012');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `nim`, `jurusan`, `alamat`) VALUES
(1, 'John Doe', 1901001, 'Teknik Informatika', 'Jalan Merdeka 123'),
(2, 'Jane Doe', 1901002, 'Manajemen', 'Teknik Elektro'),
(3, 'Adam Smith', 1901003, 'Manajemen', 'Jalan Raya 456'),
(4, 'Sarah Lee', 1901004, 'Akuntansi', 'Jalan Jaya 101'),
(5, 'Michael Wong', 1901005, 'Hukum', 'Jalan Damai 12'),
(6, 'Lisa Chen', 1901006, 'Teknik Kimia', 'Jalan Jenderal Sudirman'),
(7, 'David Park', 1901007, 'Ekonomi', 'Jalan Pahlawan 56 '),
(8, 'Emily Wu', 1901008, 'Psikologi', 'Jalan Harmoni 88');

-- --------------------------------------------------------

--
-- Table structure for table `nidn`
--

CREATE TABLE `nidn` (
  `id_nidn` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nomor_identitas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nidn`
--

INSERT INTO `nidn` (`id_nidn`, `id_dosen`, `nomor_identitas`) VALUES
(1, 1, '0012367890'),
(2, 2, '0012637485'),
(3, 3, '0037284734'),
(4, 4, '0028274645'),
(5, 5, '0073849565'),
(6, 6, '0027384985'),
(7, 7, '0028282357'),
(8, 8, '0037586589'),
(9, 9, '0035636863');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `ktm`
--
ALTER TABLE `ktm`
  ADD PRIMARY KEY (`id_ktm`),
  ADD KEY `ktm_ibfk_1` (`id_mahasiswa`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `nidn`
--
ALTER TABLE `nidn`
  ADD PRIMARY KEY (`id_nidn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ktm`
--
ALTER TABLE `ktm`
  MODIFY `id_ktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ktm`
--
ALTER TABLE `ktm`
  ADD CONSTRAINT `ktm_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
