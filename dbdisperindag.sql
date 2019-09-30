-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2019 at 09:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdisperindag`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_usaha`
--

CREATE TABLE `data_usaha` (
  `id` bigint(20) NOT NULL,
  `wirausaha_id` bigint(20) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `aset` bigint(20) NOT NULL,
  `jenis_usaha` varchar(200) NOT NULL,
  `golongan` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `bukti_verifikasi` varchar(500) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_usaha`
--

INSERT INTO `data_usaha` (`id`, `wirausaha_id`, `nama_usaha`, `aset`, `jenis_usaha`, `golongan`, `status`, `bukti_verifikasi`, `updated_at`, `created_at`) VALUES
(5366, 18773, '231', 12, 'konveksi', 'Usaha Mikro', 'terverifikasi', NULL, '2019-09-29 23:41:55', '2019-09-29 23:41:20'),
(6909, 18773, 'usaha bedak', 211, 'percetakan', 'Usaha Mikro', 'belum terverifikasi', NULL, '2019-09-29 23:41:14', '2019-09-29 23:41:14'),
(7185, 18773, 'usaha apa ya', 12313, 'kecantikan', 'Usaha Mikro', 'belum terverifikasi', NULL, '2019-09-29 23:41:27', '2019-09-29 23:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `disper`
--

CREATE TABLE `disper` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disper`
--

INSERT INTO `disper` (`id`, `user_id`, `nip`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(11139, 12881, 21123, 'jojo', 'jalan semeru', '2019-09-29 04:48:32', '2019-09-29 04:48:32'),
(14555, 15618, 77667, 'jiji', 'jij', '2019-09-29 04:53:07', '2019-09-29 04:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_21_143524_create_wirausahawan_table', 2),
(4, '2019_09_21_144543_create_wirausahawan_table', 3),
(5, '2019_09_21_144739_create_disper_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$eNe4bnxQI3ayAJxjsgYoeus1t46XkNjj/UPEidX2S7bF8jAL0TE7y', NULL, NULL, NULL),
(10216, 'wirausahawan', 'asdasd', 'tan@gmail.com', NULL, '$2y$10$Ysx5G121fIs.Tj7.bKtGr.ZOAClxpXjwmqIfoCkgh2aAJa4cLa6ny', NULL, '2019-09-26 05:44:41', '2019-09-26 05:44:41'),
(10235, 'disper', 'titania', 'titan@gmail.com', NULL, '$2y$10$F/C5AOd22lhcIsRC5d.vbecy7.IXRbVrVr3UNkyogqiF6cazuZRam', NULL, '2019-09-21 08:54:20', '2019-09-21 08:54:20'),
(10399, 'wirausahawan', 'kont', 'aw@gmail.com', NULL, '$2y$10$eNe4bnxQI3ayAJxjsgYoeus1t46XkNjj/UPEidX2S7bF8jAL0TE7y', NULL, '2019-09-21 08:35:35', '2019-09-21 08:35:35'),
(11171, 'disper', 'tania', '1as@gmail.com', NULL, '$2y$10$0ONMj7CVBrJuwh3Q1Uf.e.zRvSSn468FwDtjyNLooAZnO2BaCgFHG', NULL, '2019-09-21 08:49:11', '2019-09-21 08:49:11'),
(11557, 'wirausahawan', 'sadas', 'alfian000000@gmail.com', NULL, '$2y$10$MyT4fM1h4utjyDtuFZPb5e6v2onqJqCB4GpjWD0ViwyK5Iyk47AYG', NULL, '2019-09-21 08:22:15', '2019-09-21 08:22:15'),
(12881, 'disper', 'jojo', 'jojo@gmail.com', NULL, '$2y$10$9.UZg0Xjd1K.T0cK3jvEyOs5QIpvsRVWOWEctUdq0F9WSBZjGl2we', NULL, '2019-09-29 04:48:33', '2019-09-29 04:48:33'),
(13049, 'wirausahawan', 'er v', 'alimpes12@gmail.com', NULL, '$2y$10$ALctv3/TJs99n47mvfjntesDfj0dnuW2l8LLoh3Tp8mXeqlmoF.pe', NULL, '2019-09-29 19:22:10', '2019-09-29 19:22:10'),
(15618, 'disper', 'jiji', 'jiji@gmail.com', NULL, '$2y$10$rK7jeizNzlzAB9LP8eGPPOJHDTcDZjQGBlOilZIGx3lyTJSMH/cZW', NULL, '2019-09-29 04:53:08', '2019-09-29 04:53:08'),
(15762, 'disper', 'tania', 'taniatania@gmail.com', NULL, '$2y$10$0Qdq1ljcSK8Hq8EFfI2V1eJCjXvh13vm4xWjsZ8JRXobhOyg8mnCS', NULL, '2019-09-26 05:43:33', '2019-09-26 05:43:33'),
(17128, 'wirausahawan', 'as seregar', 'alfian000000@gmail.comaa', NULL, '$2y$10$ENXmUHFnzkdEo3d.YKxqv.0uORi/TTrFQdNbSCWotpCYTGSfVczQS', NULL, '2019-09-29 19:21:47', '2019-09-29 19:21:47'),
(18773, 'wirausahawan', 'sadasd', 'karyawan@gmail.com', NULL, '$2y$10$944dDymDhxZCg.88ODxMXea5v/x8GBGLSkbnhhkpiYBNmxgXu/a6G', NULL, '2019-09-21 08:55:39', '2019-09-21 08:55:39'),
(18938, 'wirausahawan', 'alfian', 'titan@gmaikl.com', NULL, '$2y$10$NN0g3vE0khhK0X1r2TrfQuo6k0mYvrducb4gfPYOXbujByavPZtxq', NULL, '2019-09-24 20:10:17', '2019-09-24 20:10:17'),
(19249, 'wirausahawan', 'asdasd', 'er@gmail.com', NULL, '$2y$10$6UA2wygb0nYO/KDf0q/ryuyzEG3zXUS2/AEp39d4FpEYOrtO80aEG', NULL, '2019-09-21 08:20:36', '2019-09-21 08:20:36'),
(19411, 'wirausahawan', 'sadad', 'er1@gmail.com', NULL, '$2y$10$in9FF/cPprCVYrrPaFWaR.daqP2hvATbU8Hvfhl0t05XkJGnzRU9G', NULL, '2019-09-21 08:25:10', '2019-09-21 08:25:10'),
(19986, 'disper', 'alfian ferdiansyah', 'titaniaoktaviani@gmail.com', NULL, '$2y$10$N0wfKFvLzaOrbvBFofbKJeS8D.Q0MwrvQqkn3JUfrT/a62CDEya1u', NULL, '2019-09-21 08:48:33', '2019-09-21 08:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `wirausahawan`
--

CREATE TABLE `wirausahawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` int(20) NOT NULL,
  `umur` int(11) NOT NULL,
  `nik` int(50) NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wirausahawan`
--

INSERT INTO `wirausahawan` (`id`, `user_id`, `nama`, `nohp`, `umur`, `nik`, `jenis_kelamin`, `alamat`, `created_at`, `updated_at`) VALUES
(12294, 19249, 'asdasd', 0, 0, 0, '', 'asdasda', '2019-09-21 08:20:34', '2019-09-21 08:20:34'),
(12730, 19103, 'titania ayunda', 82275, 22, 2223123, 'female', 'jalan semeru', '2019-09-29 22:17:23', '2019-09-29 22:17:23'),
(12897, 11557, 'sadas', 0, 0, 0, '', 'dasdasd', '2019-09-21 08:22:14', '2019-09-21 08:22:14'),
(13294, 18773, 'sadasd', 0, 0, 0, '', 'sadad', '2019-09-21 08:55:38', '2019-09-21 08:55:38'),
(13539, 13049, 'er v', 8912212, 22, 23424, 'male', 'er', '2019-09-29 19:22:10', '2019-09-29 19:22:10'),
(15276, 17974, 'titania ayunda', 82275, 22, 2223123, 'female', 'jalan semeru', '2019-09-29 22:17:22', '2019-09-29 22:17:22'),
(15914, 17128, 'as seregar', 1212, 22, 1212, 'male', 'asdasd', '2019-09-29 19:21:45', '2019-09-29 19:21:45'),
(17013, 10399, 'kont', 0, 0, 0, '', 'sad', '2019-09-21 08:35:35', '2019-09-21 08:35:35'),
(17521, 18938, 'alfian', 0, 0, 0, '', 'kmasas', '2019-09-24 20:10:16', '2019-09-24 20:10:16'),
(18544, 10216, 'asdasd', 0, 0, 0, '', 'adsads', '2019-09-26 05:44:41', '2019-09-26 05:44:41'),
(19746, 19411, 'sadad', 0, 0, 0, '', 'asdasd', '2019-09-21 08:25:10', '2019-09-21 08:25:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_usaha`
--
ALTER TABLE `data_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wirausaha_id` (`wirausaha_id`);

--
-- Indexes for table `disper`
--
ALTER TABLE `disper`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wirausahawan`
--
ALTER TABLE `wirausahawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_usaha`
--
ALTER TABLE `data_usaha`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7186;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19987;

--
-- AUTO_INCREMENT for table `wirausahawan`
--
ALTER TABLE `wirausahawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19747;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_usaha`
--
ALTER TABLE `data_usaha`
  ADD CONSTRAINT `data_usaha_ibfk_1` FOREIGN KEY (`wirausaha_id`) REFERENCES `wirausahawan` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
