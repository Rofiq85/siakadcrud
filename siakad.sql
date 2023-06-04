-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 10:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `Id_dosen` int(11) NOT NULL,
  `Nama_dosen` varchar(255) NOT NULL,
  `NIDN` char(10) NOT NULL,
  `Jenjang_pendidikan` enum('S2','S3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Id_dosen`, `Nama_dosen`, `NIDN`, `Jenjang_pendidikan`) VALUES
(1, 'RADEN MUHAMAD FIRZATULLAH', '0306049401', 'S2'),
(2, 'AMBROS MAGNUS RUDOLF MEKENG', '0306098803', 'S2'),
(3, 'MUHAMMAD IKHWANI SAPUTRA', '0309069204', 'S2'),
(4, 'CIAN RAMADHONA HASSOLTHINE', '0318039101', 'S2');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id_mhs` int(11) NOT NULL,
  `Nama_mhs` varchar(255) NOT NULL,
  `NIM` char(12) NOT NULL,
  `Program_studi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id_mhs`, `Nama_mhs`, `NIM`, `Program_studi`) VALUES
(1, 'SAIFUR ROFIQ', '200401010172', 'S1 PJJ Informatika'),
(2, 'ABDUL ROHIM', '220401020037', 'S1 PJJ Informatika'),
(3, 'AHMAD SOFIYULLAH', '220401020035', 'S1 PJJ Informatika'),
(4, 'ALIF PATRIA YOGASETA', '210401010010', 'S1 PJJ Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `Id_matkul` int(11) NOT NULL,
  `Nama_matkul` varchar(255) NOT NULL,
  `Kode_matkul` char(5) NOT NULL,
  `Deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`Id_matkul`, `Nama_matkul`, `Kode_matkul`, `Deskripsi`) VALUES
(1, 'Pemrograman Berbasis Web 2', '02215', 'Matakuliah yang mempelajari pembuatan website'),
(2, 'Bahasa Indonesia', '02103', 'Matakuliah tentang bahasa Indonesia'),
(3, 'Rekayasa Perangkat Lunak', '02218', 'Rekayasa Perangkat'),
(4, 'Analisa Berorientasi Objek', '02216', 'Analisa Berorientasi Objek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`Id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id_mhs`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`Id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `Id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `Id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
