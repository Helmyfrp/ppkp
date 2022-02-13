-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 04:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppkp-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namafile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`id`, `namalengkap`, `namafile`, `created_at`, `updated_at`) VALUES
(1, 'fwfqwfqwfqwf', 'C:\\xampp\\tmp\\php373.tmp', NULL, NULL),
(2, 'pppppppppppppppppp', 'C:\\xampp\\tmp\\phpA9A7.tmp', NULL, NULL),
(3, 'aaaaaaaaaaaa', 'C:\\xampp\\tmp\\phpC2FD.tmp', NULL, NULL),
(4, 'bbbbbbbbbbb', 'C:\\xampp\\tmp\\phpDD7B.tmp', NULL, NULL),
(5, 'cccccccccccc', 'C:\\xampp\\tmp\\phpF7EA.tmp', NULL, NULL),
(6, 'dddddddddddddd', 'C:\\xampp\\tmp\\php1769.tmp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nidn` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `name`, `jeniskelamin`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1234, 'Akai', 'lakilaki', 'akai@gmail.com', NULL, '$2y$10$ll2s3D7bLoARtFuuMNo9JeDIK.MTvGnMUTAlnYODVshH8c9rwFdiO', 'dosen', NULL, NULL, NULL),
(2, 12345, 'lunox', 'perempuan', 'lunox@gmail.com', NULL, '$2y$10$xKb.Yu0e.hVtjDOmaIBmj.qELCc2LeEfiCiq62H7TUC.SzSrVCeSO', 'dosen', NULL, NULL, NULL),
(3, 12345, 'lesley', 'perempuan', 'lesley@gmail.com', NULL, '$2y$10$O1G2LWKmUcxJFMFQDHp5juPWYZB1Ve9b1H5VOZffL/Rc7dVyhuY.i', 'dosen', NULL, NULL, NULL),
(4, 12345, 'lunox', 'lakilaki', 'lunox@gmail.com', NULL, '$2y$10$MXXUal1qjsPDuB5rJRMUJOKJmYBseQSQsRg2M6cIAz9lcm6bATyQi', 'dosen', NULL, NULL, NULL),
(5, 12345, 'lord', 'perempuan', 'lord@gmail.com', NULL, '$2y$10$Y2f9JeLp/aVoaznD7/HjX.jl1n0CWBw0JgzZCXTte0UKFfA57C9aq', 'dosen', NULL, NULL, NULL),
(6, 44123, 'kupa', 'perempuan', 'kupa@gmail.com', NULL, '$2y$10$AJcAQMTITIF9DyB3zvfu0ua2LUlCXt7cYi2XCRaKkguOIKSavlMCm', 'dosen', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formbimbingan`
--

CREATE TABLE `formbimbingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namafile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formbimbingan`
--

INSERT INTO `formbimbingan` (`id`, `namalengkap`, `namafile`, `created_at`, `updated_at`) VALUES
(1, 'hahahaha', 'C:\\xampp\\tmp\\php1E96.tmp', NULL, NULL),
(2, 'fwfqwfqwfqwf', 'C:\\xampp\\tmp\\phpEC71.tmp', NULL, NULL),
(3, 'dgdfgfddgfgfdgdf', 'C:\\xampp\\tmp\\php92C2.tmp', NULL, NULL),
(4, 'werwrwe', 'C:\\xampp\\tmp\\phpB639.tmp', NULL, NULL),
(5, 'dgdfgd', 'C:\\xampp\\tmp\\phpD76E.tmp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` int(11) NOT NULL,
  `NamaLengkap` varchar(100) NOT NULL,
  `JenisKelamin` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `NamaLengkap`, `JenisKelamin`, `status`, `Email`, `Password`) VALUES
(12345, 'Helmy', 'Laki Laki', '', 'helmy@gmail.com', ''),
(137678, 'hel', 'lakilaki', 'mahasiswa', 'jahjk@gmail.com', '$2y$10$1d7u/2Ko1ZbQPymVw8C/ZOKEgII8zMJFZuoNf5oe7NmJZ/cNk1cb6'),
(123456, 'zilong', 'perempuan', 'mahasiswa', 'zilong@gmail.com', '$2y$10$dloUj08/3lWVy3JZ1AVHy.NdoPzPNZkW2sq2VBy4s7or/KIq0W7wO');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswabimbingan`
--

CREATE TABLE `mahasiswabimbingan` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `namafile` varchar(100) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswabimbingan`
--

INSERT INTO `mahasiswabimbingan` (`id`, `namalengkap`, `namafile`, `create_at`, `update_at`) VALUES
(1, 'hahahaha', 'C:\\xampp\\tmp\\phpF34.tmp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_01_07_160616_create_proposal_table', 1),
(2, '2022_01_08_040116_create_projectkp_table', 2),
(3, '2022_01_09_115304_create_dosen_table', 3),
(4, '2022_01_09_115843_create_dosen_table', 4),
(5, '2022_01_09_121021_create_dosen_table', 5),
(6, '2022_01_09_123504_create_dosenpembimbing_table', 6),
(7, '2022_01_09_140308_create_pengajuanproposal_table', 7),
(8, '2022_01_09_164514_create_pengajuanproposal_table', 8),
(9, '2022_01_09_165210_create_bimbingan_table', 9),
(10, '2022_01_09_165611_create_uploadkp_table', 10),
(11, '2022_01_09_165914_create_mahasiswabimbingan_table', 11),
(12, '2022_01_09_170034_create_formbimbingan_table', 12),
(13, '2022_01_09_170150_create_projectkpdosen_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuanproposal`
--

CREATE TABLE `pengajuanproposal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namafile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuanproposal`
--

INSERT INTO `pengajuanproposal` (`id`, `namalengkap`, `namafile`, `created_at`, `updated_at`) VALUES
(1, 'abcd', 'C:\\xampp\\tmp\\phpE3E2.tmp', NULL, NULL),
(2, 'hahahaha', 'C:\\xampp\\tmp\\php9199.tmp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projectkpdosen`
--

CREATE TABLE `projectkpdosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namafile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectkpdosen`
--

INSERT INTO `projectkpdosen` (`id`, `namalengkap`, `namafile`, `created_at`, `updated_at`) VALUES
(1, 'wkwkwkwkwkwkkw', 'C:\\xampp\\tmp\\php4E1C.tmp', NULL, NULL),
(2, 'yrtyrr', 'C:\\xampp\\tmp\\php15.tmp', NULL, NULL),
(3, 'yutyututt', 'C:\\xampp\\tmp\\php1FC3.tmp', NULL, NULL),
(4, 'asdkmdsamdsa', 'C:\\xampp\\tmp\\php68D3.tmp', NULL, NULL),
(5, 'trtrtrtrtrtr', 'C:\\xampp\\tmp\\php8D16.tmp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploadkp`
--

CREATE TABLE `uploadkp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namafile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploadkp`
--

INSERT INTO `uploadkp` (`id`, `namalengkap`, `namafile`, `created_at`, `updated_at`) VALUES
(1, 'wkwkwkwkwk', 'C:\\xampp\\tmp\\php5465.tmp', NULL, NULL),
(2, 'hahahhahaha', 'C:\\xampp\\tmp\\phpD991.tmp', NULL, NULL),
(3, 'sdadadadadasdasd', 'C:\\xampp\\tmp\\phpF98D.tmp', NULL, NULL),
(4, 'fggfgfgfgf', 'C:\\xampp\\tmp\\php18DE.tmp', NULL, NULL),
(5, 'kookokkokokokokko', 'C:\\xampp\\tmp\\php3AAF.tmp', NULL, NULL),
(6, 'lalalallallala', 'C:\\xampp\\tmp\\php724B.tmp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `name`, `jeniskelamin`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 123, 'helmy', 'lakilaki', 'ppkp@gmail.com', NULL, '$2y$10$04DYEKMsXCmVy3/1qdJTge2OcdRNfCDrlKltaLQ4d/3fX7wBcLW4S', 'ppkp', NULL, NULL, NULL),
(20, 666, 'Tommy', 'lakilaki', 'tommy@gmail.com', NULL, '$2y$10$F249dioN46kvm4tjVMqUtOzT7pO0tlW4bDFHOCdg1s0rk4.OcLoxO', 'mahasiswa', NULL, NULL, NULL),
(25, 12345, 'sleepingchilds', 'lakilaki', '16410100036@dinamika.ac.id', NULL, '$2y$10$jjwLlyt/tGu6mqFg4j074OPxOrEYKz/7x1UhdduVuy3lCgnJCl1ZK', 'mahasiswa', NULL, NULL, NULL),
(26, 132456, 'Elmo', 'lakilaki', 'elmo@gmail.com', NULL, '$2y$10$oCIUQeRc1EhRsFN99r4LjesWLh6OVKjm8KdEmJecZ8kP.oOHLQ9IW', 'ppkp', NULL, NULL, NULL),
(28, 12345, 'Aragorn', 'lakilaki', 'aragorn@gmail.com', NULL, '$2y$10$efSj4hwYCfO8L0TO/T.Vde8pEef6kBh3Lwto/61xbXkYaJGvEIWb6', 'mahasiswa', NULL, NULL, NULL),
(29, 12345678, 'Akemi', 'lakilaki', 'akemi@gmail.com', NULL, '$2y$10$M9F3ChJxaQljL952X2I.GO9MY/qpel.PmcoiiH3w/PF0wy69l6E9K', 'mahasiswa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `formbimbingan`
--
ALTER TABLE `formbimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswabimbingan`
--
ALTER TABLE `mahasiswabimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuanproposal`
--
ALTER TABLE `pengajuanproposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectkpdosen`
--
ALTER TABLE `projectkpdosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadkp`
--
ALTER TABLE `uploadkp`
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
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formbimbingan`
--
ALTER TABLE `formbimbingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswabimbingan`
--
ALTER TABLE `mahasiswabimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengajuanproposal`
--
ALTER TABLE `pengajuanproposal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectkpdosen`
--
ALTER TABLE `projectkpdosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uploadkp`
--
ALTER TABLE `uploadkp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
