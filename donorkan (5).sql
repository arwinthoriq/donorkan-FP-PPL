-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 08:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donorkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `darah`
--

CREATE TABLE `darah` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `status` enum('Pending','Selesai') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darah`
--

INSERT INTO `darah` (`id`, `users_id`, `golongan_darah`, `nama`, `usia`, `jenis_kelamin`, `riwayat_penyakit`, `status`, `created_at`, `updated_at`) VALUES
(37, 5, 'O', 'setiawan', 60, 'laki-laki', 'tidak ada', 'Selesai', '2020-05-09 19:18:41', '2020-05-23 21:42:24'),
(38, 2, 'AB', 'dahlan', 38, 'laki-laki', 'anemia', 'Selesai', '2020-05-09 19:19:55', '2020-05-09 19:19:55'),
(39, 5, 'A+', 'yuliana', 38, 'perempuan', 'anemia', 'Pending', '2020-05-14 06:10:52', '2020-05-14 06:10:52'),
(43, 2, 'Z', 'pak darman', 48, 'laki-laki', 'tidak ada', 'Pending', '2020-05-19 09:21:26', '2020-05-19 09:21:26'),
(44, 6, 'A+', 'zaenal', 40, 'laki-laki', 'anemia', 'Selesai', '2020-05-19 09:24:14', '2020-05-26 22:24:17'),
(45, 6, 'A+', 'silvana', 38, 'perempuan', 'tidak ada', 'Pending', '2020-05-20 23:22:54', '2020-05-22 23:11:56'),
(46, 15, 'C', 'Pak tomas', 49, 'laki-laki', 'Leukimia', 'Pending', '2020-05-23 22:33:32', '2020-05-23 22:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `darah_id` int(11) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `darah_id`, `alamat`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(20, 37, 'jalan ajalan', '-7.1603391289001', '112.657413482666', '2020-05-10 02:18:41', '2020-05-09 19:18:41'),
(21, 38, 'jalan maling kundang', '-7.10259611283154', '112.44815826416016', '2020-05-10 02:19:55', '2020-05-09 19:19:55'),
(22, 39, 'jalan jalan kegunung', '-7.120652233178573', '112.60059356689453', '2020-05-14 13:10:52', '2020-05-14 06:10:52'),
(23, 40, 'jalan ke kutub selatan', '-7.144839506593979', '112.67440795898438', '2020-05-19 07:02:34', '2020-05-19 00:02:34'),
(24, 41, 'sadsad', '-7.123377623606722', '112.61363983154295', '2020-05-19 16:03:10', '2020-05-19 09:03:10'),
(25, 42, 'mklnjnnm', '-7.143476877284146', '112.6156997680664', '2020-05-19 16:19:30', '2020-05-19 09:19:30'),
(26, 43, 'jalan gunung salak pondok', '-7.150971288207653', '112.65449523925781', '2020-05-19 16:21:26', '2020-05-19 09:21:26'),
(27, 44, 'jalan taman bunga mekar', '-7.115542082480213', '112.62805938720703', '2020-05-19 16:24:14', '2020-05-19 09:24:14'),
(28, 45, 'jalan veteran no 5 rt 04 rw 03, gresik, jawa timur', '-7.159487514966097', '112.63526916503906', '2020-05-21 06:22:54', '2020-05-20 23:22:54'),
(29, 46, 'Jalan veteran no 5 rt 04 rw 03, gresik, jawa timur', '-6.970901380279712', '111.42093658447264', '2020-05-24 05:33:32', '2020-05-23 22:33:32'),
(30, 47, 'jalan jakamsow wk2jndsi2', '-7.139048303981796', '112.61123657226562', '2020-05-27 05:40:22', '2020-05-26 22:40:22'),
(31, 48, 'jalan taman bungan melati no 14', '-7.154037148145602', '112.61844635009766', '2020-05-27 05:43:23', '2020-05-26 22:43:23'),
(32, 49, 'nink knik', '-7.168344222127182', '112.63835906982422', '2020-05-27 05:46:31', '2020-05-26 22:46:31'),
(33, 50, 'iasjdiawjd', '-7.191507103212196', '112.62977600097655', '2020-05-27 05:49:14', '2020-05-26 22:49:14'),
(34, 51, 'asfda faf', '-7.150630635832775', '112.63629913330078', '2020-05-27 05:57:38', '2020-05-26 22:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `pendonor_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `darah_id` int(11) NOT NULL,
  `konfirmasi` enum('SudahDonor','BelumDonor') NOT NULL DEFAULT 'BelumDonor',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `pendonor_id`, `users_id`, `darah_id`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(20, 2, 5, 37, 'BelumDonor', '2020-05-09 19:20:48', '2020-05-09 20:57:30'),
(21, 6, 5, 39, 'BelumDonor', '2020-05-14 06:12:18', '2020-05-14 06:12:18'),
(22, 2, 5, 39, 'SudahDonor', '2020-05-14 06:21:55', '2020-05-14 06:21:55'),
(23, 6, 2, 38, 'BelumDonor', '2020-05-14 06:25:35', '2020-05-14 06:25:35'),
(25, 6, 5, 37, 'BelumDonor', '2020-05-20 05:26:46', '2020-05-20 05:26:46'),
(26, 6, 2, 43, 'BelumDonor', '2020-05-20 05:27:12', '2020-05-20 05:27:12'),
(27, 5, 6, 44, 'BelumDonor', '2020-05-20 05:48:46', '2020-05-20 23:42:04'),
(28, 15, 6, 45, 'BelumDonor', '2020-05-23 22:34:53', '2020-05-23 22:34:53'),
(29, 2, 15, 46, 'BelumDonor', '2020-05-26 07:26:25', '2020-05-26 07:26:25'),
(30, 6, 5, 39, 'BelumDonor', '2020-05-26 07:54:27', '2020-05-26 07:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('customer','admin') COLLATE utf8mb4_unicode_ci DEFAULT 'customer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ppl', 'ppl@gmail.com', '2020-05-02 20:09:10', '$2y$10$hoz7xj14/H1SFFH5Ewtnze/5qAoIbJKC4rOPDCkxKsF2rhs1utuPu', 'admin', 'xHF2uUTK4AnhXceUmhJOyiagr4sYPwEyvCklwP20jogeXo82t6O68mfBUbf7', '2020-03-27 20:04:43', '2020-04-28 00:13:16'),
(2, 'lala', 'lala@gmail.com', '2020-05-04 03:28:30', '$2y$10$xX7Djb4eWwvhLcG5IIG6vuijHyNmFKD2us5le7C2px7M56f9bW7C2', 'customer', 'exCnYUln0OOb9PzoSf3si1RBSfCYqaTcXaQbQc0Sagk5qMMXUT9eqHKdzPbI', '2020-03-31 18:58:58', '2020-03-31 18:58:58'),
(4, 'papa', 'papa@gmail.com', '2020-05-08 03:28:28', '$2y$10$p6VESdWh/tt4csm6ip6/E.cRJpSIuA8PCRp523N4.NSLMO282rGGu', 'customer', 'Oe1ok9GO8HzjPz2S5k6UggchLQ8zAUSXOzlfVgdUkmc7x47raSEOfkr6WYE5', '2020-03-31 19:06:27', '2020-03-31 19:06:27'),
(5, 'jaja', 'jaja@gmail.com', '2020-05-03 20:09:09', '$2y$10$IEJO8XcE7MjLuwjdAYlt..btJH7XKQn56LHCbkH7MmxkR7DqjUik6', 'customer', '7gTZrOKiac5cpdqtKNs9WsEByDwWgIHalbisL9yq3JadAKT8JKeJTJ1C71qN', '2020-03-31 19:22:38', '2020-03-31 19:22:38'),
(6, 'rara', 'rara@gmail.com', '2020-05-15 21:40:11', '$2y$10$0ySchL7S4ooXYPEHRGXGz.eZAr6Bc867/2XL4RzNdaS.EpDsRLXjW', 'customer', NULL, '2020-05-02 17:52:59', '2020-05-02 17:52:59'),
(15, 'adra', 'adratomas@gmail.com', '2020-05-23 22:31:31', '$2y$10$doHe1h0HYXTUQGUYPWHvkexjqekAKj0CqhswGNcxOmnESO2NiUoJa', 'customer', NULL, '2020-05-23 22:23:30', '2020-05-23 22:31:31'),
(16, 'donorkan', 'team.donorkan@gmail.com', '2020-05-24 05:37:52', '$2y$10$dqU2SLEdxntgz/IZPbQFbORkLsXYcdyGPME8ak.STy4Zwkbv6ZSoO', 'admin', 'ICo45nKv39KTrwiR6sBkX0JZwqqvNi4jf3eHZblrhgndUzSWS2lJzRClCQXk', '2020-05-24 05:25:14', '2020-05-24 05:37:52'),
(17, 'setan', 'setan@gmail.com', NULL, '$2y$10$SR7QUp/K66mibpHfans7qOyTx1ZMuLDS5MUlPjA1VgP7RY0I.CIxK', 'customer', NULL, '2020-05-26 23:02:41', '2020-05-26 23:02:41'),
(18, 'pertama', 'pertama@gmail.com', NULL, '$2y$10$ySfLMJYMaE23E2KpZVTjve23JihZet7FhLsXPWV5o2yzKyANivSWK', 'customer', NULL, '2020-05-26 23:03:51', '2020-05-26 23:03:51'),
(19, 'yogi', 'yogi.firdaus17@student.uisi.ac.id', NULL, '$2y$10$YXiuc7loE7vDLtit5zghgeDTyBdwwdLFSPWHwp5auI0icua7QYZ3G', 'customer', NULL, '2020-05-26 23:05:10', '2020-05-26 23:05:10'),
(21, 'arwin', 'arwinthoriq76@gmail.com', NULL, '$2y$10$ejSj.iKiWzLzb9HOs.vTnuCEfe1gTiS.ULRfNgJ08oJXCtFd4wXUi', 'customer', NULL, '2020-05-26 23:09:23', '2020-05-26 23:09:23'),
(22, 'riezal', 'mochamat.setiawan17@student.uisi.ac.id', NULL, '$2y$10$EvvEU4co0BAC1pEw9FJp7uT8kZTvkHvCkDpuOiCMx5D3j.S.01fR2', 'customer', NULL, '2020-05-26 23:17:32', '2020-05-26 23:17:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darah`
--
ALTER TABLE `darah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
