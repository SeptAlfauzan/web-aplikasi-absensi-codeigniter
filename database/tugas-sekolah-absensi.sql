-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2019 pada 02.29
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

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
-- Struktur dari tabel `tb-absen`
--

CREATE TABLE `tb-absen` (
  `id-absen` int(200) NOT NULL,
  `id-siswa` varchar(100) NOT NULL,
  `abs-datang` date NOT NULL,
  `waktu-abs-datang` time NOT NULL,
  `abs-pulang` date NOT NULL,
  `waktu-abs-pulang` time NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb-absen`
--

INSERT INTO `tb-absen` (`id-absen`, `id-siswa`, `abs-datang`, `waktu-abs-datang`, `abs-pulang`, `waktu-abs-pulang`, `status`) VALUES
(1, 'ASD512', '2019-04-14', '12:47:47', '0000-00-00', '00:00:00', 1),
(2, '2', '2019-04-14', '13:34:53', '2019-04-14', '13:36:34', 0),
(10, '2', '2019-04-14', '13:52:36', '2019-04-14', '13:52:49', 0),
(13, 'BAG930', '2019-04-25', '08:21:12', '2019-04-25', '08:22:18', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-admin`
--

CREATE TABLE `tb-admin` (
  `id-admin` int(100) NOT NULL,
  `nama-admin` text NOT NULL,
  `password-admin` varchar(100) NOT NULL,
  `status-admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb-admin`
--

INSERT INTO `tb-admin` (`id-admin`, `nama-admin`, `password-admin`, `status-admin`) VALUES
(1, 'Septa Alfauzan', '750249', 'operator'),
(5, 'admin', 'ADM786', 'mentor'),
(6, 'dasdasd', 'DAS142', 'mentor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-kejuruan`
--

CREATE TABLE `tb-kejuruan` (
  `id-kejuruan` int(100) NOT NULL,
  `nama-kejuruan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb-kejuruan`
--

INSERT INTO `tb-kejuruan` (`id-kejuruan`, `nama-kejuruan`) VALUES
(1, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-sekolah`
--

CREATE TABLE `tb-sekolah` (
  `id-sekolah` int(100) NOT NULL,
  `nama-sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb-sekolah`
--

INSERT INTO `tb-sekolah` (`id-sekolah`, `nama-sekolah`) VALUES
(1, 'SMK Negeri 1 Boyolangu'),
(2, 'SMK Negeri 1 Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-siswa`
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
  `status-aktivasi` tinyint(1) NOT NULL,
  `refresh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb-siswa`
--

INSERT INTO `tb-siswa` (`id-siswa`, `nama-siswa`, `jenis-kelamin`, `kelas`, `id-kejuruan`, `tempat-lahir`, `tanggal-lahir`, `id-sekolah`, `password-siswa`, `status-aktivasi`, `refresh`) VALUES
('ASD512', 'asd', 'Laki-laki', '10', 1, 'asdsad', '2019-04-02', 1, 'ASD496371', 1, 1),
('BAG930', 'bagas', 'Laki-laki', '10', 1, 'blitar', '2019-04-10', 1, '138752', 1, 1),
('COB186', 'COBA', 'Perempuan', '10', 1, 'trenggalek', '2019-04-02', 1, 'COB364207', 1, 1),
('IPS017', 'ipsum', 'Laki-laki', '10', 1, 'Tulungagung', '2019-04-09', 1, '623910', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb-absen`
--
ALTER TABLE `tb-absen`
  ADD PRIMARY KEY (`id-absen`);

--
-- Indeks untuk tabel `tb-admin`
--
ALTER TABLE `tb-admin`
  ADD PRIMARY KEY (`id-admin`);

--
-- Indeks untuk tabel `tb-kejuruan`
--
ALTER TABLE `tb-kejuruan`
  ADD PRIMARY KEY (`id-kejuruan`);

--
-- Indeks untuk tabel `tb-sekolah`
--
ALTER TABLE `tb-sekolah`
  ADD PRIMARY KEY (`id-sekolah`);

--
-- Indeks untuk tabel `tb-siswa`
--
ALTER TABLE `tb-siswa`
  ADD PRIMARY KEY (`id-siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb-absen`
--
ALTER TABLE `tb-absen`
  MODIFY `id-absen` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb-admin`
--
ALTER TABLE `tb-admin`
  MODIFY `id-admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb-kejuruan`
--
ALTER TABLE `tb-kejuruan`
  MODIFY `id-kejuruan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb-sekolah`
--
ALTER TABLE `tb-sekolah`
  MODIFY `id-sekolah` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
