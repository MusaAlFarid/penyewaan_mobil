-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 06:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufacture_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `license_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `status` tinyint(1) DEFAULT 0,
  `price` int(10) UNSIGNED DEFAULT NULL,
  `penalty` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `manufacture_id`, `name`, `license_number`, `color`, `year`, `status`, `price`, `penalty`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Xeniaa', 'L - 1912 0f', 'putih', '2015', 0, 250, 1000, '2020-05-03 01:54:55', '2020-04-30 08:36:14', '2020-05-03 01:54:55'),
(2, 1, 'Ayla', 'L 21212 CK', 'Biru', '2010', 0, 20000, 10000, NULL, '2020-05-08 01:55:29', '2020-05-08 01:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`id`, `car_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'storage/image/car/09a883b5-d4bd-4cea-a64c-0b5431f7c16b.jpeg', '2020-05-02 00:50:06', '2020-04-30 08:36:14', '2020-05-02 00:50:06'),
(2, 1, 'storage/image/car/3496e720-edf5-4843-8e8d-5ce24d10c4cf.jpeg', '2020-05-02 00:50:05', '2020-04-30 08:36:53', '2020-05-02 00:50:05'),
(3, 1, 'storage/image/car/8ae6bb4b-9129-4993-a30a-0293b10b6196.jpeg', NULL, '2020-05-02 00:50:20', '2020-05-02 00:50:20'),
(4, 2, 'storage/image/car/2aaf96d5-63b9-4f50-a423-2d43bfa050d2.png', NULL, '2020-05-08 01:55:32', '2020-05-08 01:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `nik`, `address`, `phone_number`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Jojon', 12930292, 'jl jl jl owkeowkeokwo', '62280123801283', 'musaalfarid@gmail.com', '2020-05-04 01:46:30', '2020-05-08 01:54:03', NULL),
(5, 'Joni', 2109302193, 'jl Tegalsari 21 no.22', '123920193', 'qweojqwo@gmail.com', '2020-05-08 01:54:33', '2020-05-08 01:54:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'toyota', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(2, 'suzuki', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(3, 'honda', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(4, 'mercedes-benz', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(5, 'bmw', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(6, 'daihatsu', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(7, 'nissan', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(8, 'isuzu', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(9, 'kia', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(10, 'mitsubishi', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(11, 'datsun', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(12, 'mazda', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(13, 'hyundai', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(14, 'chevrolet', NULL, '2020-04-30 05:41:08', '2020-04-30 05:41:08'),
(15, 'toyota', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(16, 'suzuki', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(17, 'honda', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(18, 'mercedes-benz', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(19, 'bmw', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(20, 'daihatsu', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(21, 'nissan', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(22, 'isuzu', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(23, 'kia', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(24, 'mitsubishi', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(25, 'datsun', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(26, 'mazda', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(27, 'hyundai', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(28, 'chevrolet', NULL, '2020-05-02 00:45:44', '2020-05-02 00:45:44'),
(29, 'toyota', NULL, '2020-05-06 01:54:01', '2020-05-06 01:54:01'),
(30, 'suzuki', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(31, 'honda', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(32, 'mercedes-benz', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(33, 'bmw', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(34, 'daihatsu', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(35, 'nissan', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(36, 'isuzu', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(37, 'kia', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(38, 'mitsubishi', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(39, 'datsun', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(40, 'mazda', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(41, 'hyundai', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02'),
(42, 'chevrolet', NULL, '2020-05-06 01:54:02', '2020-05-06 01:54:02');

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
(2, '2019_05_17_143152_create_manufactures_table', 1),
(3, '2019_05_17_143613_create_cars_table', 1),
(4, '2019_06_17_143557_create_car_images_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_05_01_084520_create_customers_table', 2),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2020_05_07_082221_create_transaksi_table', 3);

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
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `rent_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `price` int(10) UNSIGNED DEFAULT NULL,
  `penalty` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `customer_id`, `car_id`, `invoice_no`, `rent_date`, `return_date`, `price`, `penalty`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
('1', '4', '2', 'hahaha123', '2020-05-10', '2020-05-12', 250000, 100000, 'Proses', NULL, '2020-05-10 09:02:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Oi8Wbhlmk7bwE5O25YAj9em2/yArA6E6/CiCbD4rI/gviWAAt0PjG', NULL, '2020-05-05 02:13:48', '2020-05-05 02:13:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_manufacture_id_foreign` (`manufacture_id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_images_car_id_foreign` (`car_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_manufacture_id_foreign` FOREIGN KEY (`manufacture_id`) REFERENCES `manufactures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_images`
--
ALTER TABLE `car_images`
  ADD CONSTRAINT `car_images_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
