-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2021 at 06:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `usia` int(11) NOT NULL,
  `rt` int(11) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `gender`, `usia`, `rt`, `dusun`, `pendidikan`, `pekerjaan`) VALUES
(1, '7404100106690001', 'La Sarimajo', 'Pria', 50, 1, 'Ngapaompu', 'SD', 'Nelayan/Perikanan'),
(2, '7404100107740078', 'La Jaeni', 'Pria', 45, 1, 'Ngapaompu', 'SMA', 'Nelayan/Perikanan'),
(3, '7404100811070001', 'Alamsyah Rahmaeni', 'Pria', 12, 1, 'Ngapaompu', 'SD', 'Pelajar/Mahasiswa'),
(4, '7404101204940001', 'Sarwan', 'Pria', 25, 1, 'Ngapaompu', 'SMA', 'Nelayan/Perikanan'),
(5, '7404101207030001', 'La Karama', 'Pria', 16, 1, 'Ngapaompu', 'Tidak Tamat SD', 'Belum/Tidak bekerja'),
(6, '7404101708020002', 'Amal Hidayat Masni', 'Pria', 17, 1, 'Ngapaompu', 'SMP', 'Pelajar/Mahasiswa'),
(7, '7404101803010001', 'Mardin La Diy', 'Pria', 18, 1, 'Ngapaompu', 'SMP', 'Pelajar/Mahasiswa'),
(8, '7404102402950002', 'La Aliwara', 'Pria', 24, 1, 'Ngapaompu', 'Tidak Tamat SD', 'Nelayan/Perikanan'),
(9, '7404103010750001', 'La Diy', 'Pria', 44, 1, 'Ngapaompu', 'Tidak Tamat SD', 'Nelayan/Perikanan'),
(10, '7404104106720001', 'Wa Ode Hajiani', 'Wanita', 47, 1, 'Ngapaompu', 'S1', 'Mengurus Rumah Tangga'),
(11, '7404104107740094', 'Rahama', 'Wanita', 45, 1, 'Ngapaompu', 'S1', 'Mengurus Rumah Tangga'),
(12, '7404105007010001', 'Wa Lisa', 'Wanita', 18, 1, 'Ngapaompu', 'SMP', 'Pelajar/Mahasiswa'),
(13, '7404105405000005', 'Venti Nurmaeni', 'Wanita', 19, 1, 'Ngapaompu', 'SMP', 'Pelajar/Mahasiswa'),
(14, '7404106502990002', 'Wa Rana', 'Wanita', 20, 1, 'Ngapaompu', 'SMA', 'Pelajar/Mahasiswa'),
(15, '7404106502990003', 'Wa Rani', 'Wanita', 20, 1, 'Ngapaompu', 'SMA', 'Pelajar/Mahasiswa'),
(16, '7404106611760001', 'Wa Siti Rukiah', 'Wanita', 43, 1, 'Ngapaompu', 'S3', 'Dosen'),
(17, '7404106803950001', 'Sunarti La Diy', 'Wanita', 24, 1, 'Ngapaompu', 'S2', 'Pelajar/Mahasiswa'),
(18, '7415026504130001', 'Sunarlia La Diy', 'Wanita', 6, 1, 'Ngapaompu', 'Belum Sekolah', 'Belum/Tidak Bekerja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
