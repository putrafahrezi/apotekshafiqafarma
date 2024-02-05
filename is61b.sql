-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 08:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is61b`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `kd_obat` varchar(20) NOT NULL,
  `nama_obat` varchar(150) NOT NULL,
  `jenis_obat` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok_awal` int(200) NOT NULL,
  `stok_akhir` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `kd_obat`, `nama_obat`, `jenis_obat`, `harga`, `stok_awal`, `stok_akhir`) VALUES
(1, 'pct', 'paracetamol', 'tablet', '20000', 15, 8),
(2, 'amx', 'amoxilin', 'tablet', '15000', 20, 10),
(3, 'vit c', 'vitamin c', 'kapsul', '50000', 35, 15),
(4, 'cft', 'cefat', 'tablet', '10000', 50, 12),
(5, 'dp', 'Dexteem Plus', 'kapsul', '35000', 70, 34);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nip` int(11) NOT NULL,
  `nama_pasien` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `penyakit` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nip`, `nama_pasien`, `jenis_kelamin`, `penyakit`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `email`) VALUES
(556677, 'sulaiman', 'laki-laki', 'demam', 'aceh besar', '12-03-1998', 'beurawe', '081234566778', '-'),
(667788, 'farhan', 'Laki - Laki', 'asam lambung', 'banda aceh', '2002-06-20', 'peurada', '088776657656', 'farhan13@gmail.com'),
(998877, 'maria', 'Perempuan', 'magh', 'pidie', '1995-11-22', 'simpang tiga', '088776235467', 'mar23@gmail.com'),
(11223344, 'putri', 'perempuan', 'lambung', 'banda aceh', '11-12-1995', 'ule kareng', '081234987867', 'putri11@gmail.com'),
(11223345, 'ihwan', 'Laki - Laki', 'sariawan', 'bener meriah', '2003-07-24', 'darussalam', '081234566778', 'iwan22@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `kd_petugas` varchar(50) NOT NULL,
  `nm_petugas` varchar(100) NOT NULL,
  `umur` int(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `kd_petugas`, `nm_petugas`, `umur`, `alamat`, `no_hp`, `email`) VALUES
(1, 'ptgs1', 'irwan', 26, 'banda aceh', '081234987867', 'irwan24@gmail.com'),
(2, 'ptgs2', 'marwadi', 35, 'aceh besar', '088776235467', 'marwadi44@gmail.com'),
(3, 'ptgs3', 'putri', 25, 'ule  kareng', '088776235465', 'put88@gmail.com'),
(4, 'ptgs4', 'melati', 20, 'darussalam', '088776235498', 'melati89@gmail.com'),
(5, 'ptgs5', 'bahri', 30, 'peunayong', '088776235490', 'bahri77@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `last_log`) VALUES
(1, 'Adminisrator', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2024-02-06 01:59:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
