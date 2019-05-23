-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 05:35 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas-sekolah-absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb-absen`
--

CREATE TABLE `tb-absen` (
  `id-absen` int(200) NOT NULL,
  `id-siswa` varchar(100) NOT NULL,
  `abs-datang` date NOT NULL,
  `waktu-abs-datang` time(6) NOT NULL,
  `abs-pulang` date NOT NULL,
  `waktu-abs-pulang` time(6) NOT NULL,
  `lokasi-abs` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb-admin`
--

CREATE TABLE `tb-admin` (
  `id-admin` int(100) NOT NULL,
  `nama-admin` text NOT NULL,
  `password-admin` varchar(100) NOT NULL,
  `status-admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb-kejuruan`
--

CREATE TABLE `tb-kejuruan` (
  `id-kejuruan` int(100) NOT NULL,
  `nama-kejuruan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb-kejuruan`
--

INSERT INTO `tb-kejuruan` (`id-kejuruan`, `nama-kejuruan`) VALUES
(1, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `tb-sekolah`
--

CREATE TABLE `tb-sekolah` (
  `id-sekolah` int(100) NOT NULL,
  `nama-sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb-sekolah`
--

INSERT INTO `tb-sekolah` (`id-sekolah`, `nama-sekolah`) VALUES
(1, 'SMKN 1 Boyolangyu');

-- --------------------------------------------------------

--
-- Table structure for table `tb-siswa`
--

CREATE TABLE `tb-siswa` (
  `id-siswa` varchar(100) NOT NULL,
  `nama-siswa` text NOT NULL,
  `jenis-kelamin` text NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `id-kejuruan` int(100) NOT NULL,
  `tempat-lahir` text NOT NULL,
  `tanggal-lahir` date NOT NULL,
  `id-sekolah` int(100) NOT NULL,
  `password-siswa` varchar(100) NOT NULL,
  `status-aktivasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb-siswa`
--

INSERT INTO `tb-siswa` (`id-siswa`, `nama-siswa`, `jenis-kelamin`, `kelas`, `id-kejuruan`, `tempat-lahir`, `tanggal-lahir`, `id-sekolah`, `password-siswa`, `status-aktivasi`) VALUES
('2', 'loerm', 'laki-laki', 'XI', 1, 'Tulunagagung', '2019-04-01', 1, 'klahsdasdsam,', 0),
('ASD512', 'asd', 'Laki-laki', '10', 1, 'asdsad', '2019-04-02', 1, '578306', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb-absen`
--
ALTER TABLE `tb-absen`
  ADD PRIMARY KEY (`id-absen`);

--
-- Indexes for table `tb-admin`
--
ALTER TABLE `tb-admin`
  ADD PRIMARY KEY (`id-admin`);

--
-- Indexes for table `tb-kejuruan`
--
ALTER TABLE `tb-kejuruan`
  ADD PRIMARY KEY (`id-kejuruan`);

--
-- Indexes for table `tb-sekolah`
--
ALTER TABLE `tb-sekolah`
  ADD PRIMARY KEY (`id-sekolah`);

--
-- Indexes for table `tb-siswa`
--
ALTER TABLE `tb-siswa`
  ADD PRIMARY KEY (`id-siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb-absen`
--
ALTER TABLE `tb-absen`
  MODIFY `id-absen` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
