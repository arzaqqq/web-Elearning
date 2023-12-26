-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2023 pada 01.49
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aezaq`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `alamat`, `no_hp`, `jenis_kelamin`, `password`) VALUES
(1, 'Miftahul Arzaq', 'admin123', 'prabayuka jln.sujakto no.3431', '087768795423', 'Laki-laki', '12345'),
(2, 'Miftahul Arzaq', 'admin123', 'prabayuka jln.sujakto no.34', '087768795423', 'Laki-laki', '12345'),
(3, 'Miftahul Arzaq', 'admin123', 'prabayuka jln.sujakto no.34', '087768795423', 'Laki-laki', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_course`
--

CREATE TABLE `tb_course` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `isi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_course`
--

INSERT INTO `tb_course` (`id`, `course`, `isi`) VALUES
(26, 'web development', 'RP. 300,000/ 3 Bulan'),
(28, 'Data Analisi', 'Rp. 350,000 / 3 Bulan'),
(29, 'Cyber Secority', 'Rp. 500,000 / 4 Bulan'),
(30, 'UI/UX', 'Rp.450,000/ 4 Bulan'),
(31, 'Digital Marketing', 'Rp.500,000 / 4 Bulan'),
(32, 'Game Developer', 'Rp.750,000/ 6 Bulan'),
(33, 'Back-end Developer', 'Rp.500,000 / 3 Bulan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mentor`
--

CREATE TABLE `tb_mentor` (
  `id` int(11) NOT NULL,
  `mentor` varchar(25) NOT NULL,
  `isi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mentor`
--

INSERT INTO `tb_mentor` (`id`, `mentor`, `isi`) VALUES
(1, 'Miftahul Arzaqi S.T S.Ag', 'Full stack Developer'),
(2, 'Alifin sandika M.T', 'Cyber Security - Expert\r\n'),
(3, 'Saryanul S.T', 'UI/UX Desainer'),
(4, 'Ahlan saidan M.T', 'Digital Marketing - Expert'),
(5, 'Sahlani azair M.T M.Kom', 'Game developer - Master'),
(6, 'Alfin M.Kom M.Pd', 'Back end Developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `alamat`, `no_hp`, `jenis_kelamin`, `password`) VALUES
(1, 'Alhafiqi hafizi', 'user123', 'Ki. Basuki No. 400', '0832657899988', 'Laki-laki', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mentor`
--
ALTER TABLE `tb_mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_mentor`
--
ALTER TABLE `tb_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
