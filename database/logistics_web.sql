-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 12:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistics_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `phone_number`, `email_address`, `message`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Precious Enica Cepe', '09101061885', 'cepeprecious00@gmail.com', 'Hello, I would like to inquire about something.....', 0, '2023-06-07 20:45:04', '2023-06-07 20:45:04');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_05_03_085209_create_inquiries_table', 1),
(11, '2023_06_08_083524_create_orders_table', 2),
(12, '2023_06_11_083706_update_orders', 3),
(13, '2023_06_11_091113_add_status_to_orders', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_options` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `item_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double(8,2) NOT NULL,
  `item_value` double(8,2) NOT NULL,
  `bags_specification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tracking_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `receiver_name`, `receiver_number`, `receiver_address`, `receiver_city`, `receiver_state`, `receiver_zip_code`, `sender_name`, `sender_number`, `sender_email`, `sender_address`, `sender_city`, `sender_state`, `sender_zip_code`, `delivery_options`, `item_name`, `quantity`, `item_category`, `weight`, `item_value`, `bags_specification`, `remarks`, `created_at`, `updated_at`, `tracking_number`, `status`) VALUES
(1, 'asdsadasdasd', 'sadasdasdasd', 'sadasdasdas', 'asdasdasd', 'asdasdas', 'sdasdas', 'asdasdas', 'asdasd', 'adasdasdas@gmail.com', 'dsfsdfsd', 'fsdfsdfsdf', 'sdfsdfsdfsdf', 'ssdfsdfsdfsd', 'Drop off to branches', 'sdfsdfsdfsd', 3, 'Documents', 5.00, 500.00, 'Medium', 'sdfsdfsdfsdfsdf', '2023-06-08 02:40:09', '2023-06-08 02:40:09', NULL, 'Pending'),
(2, 'asdsadasdasd', 'sadasdasdasd', 'sadasdasdas', 'asdasdasd', 'asdasdas', 'sdasdas', 'asdasdas', 'asdasd', 'adasdasdas@gmail.com', 'dsfsdfsd', 'fsdfsdfsdf', 'sdfsdfsdfsdf', 'ssdfsdfsdfsd', 'Drop off to branches', 'sdfsdfsdfsd', 3, 'Documents', 5.00, 500.00, 'Medium', 'sdfsdfsdfsdfsdf', '2023-06-08 02:46:00', '2023-06-08 02:46:00', NULL, 'Pending'),
(3, 'dsfsdfsdfsdfsdfsd', 'sdfsdfsdfsdfsdfsd', 'sdfsdfsdfsdfsdfsd', 'sdfsdfsdfsdfsd', 'sdfsdfsdfsdf', '8000', 'dsfsdfsdfsd', '54345345345345', 'dasdasdas@gmail.com', 'waaeaweaweaweawe', 'ewrwrewrwerwer', 'sdfsdfsdfsdf', '8000', 'Drop off to branches', 'asdasdasdasdas', 5, 'Documents', 5.00, 500.00, 'Large', 'dsfsdfsdfsdfsdfsdfsdfsdfsd', '2023-06-08 02:50:32', '2023-06-08 02:50:32', NULL, 'Pending'),
(4, 'asdsadasdasd', '09101061885', 'sadasdasdsa', 'asdasdasdasd', 'asdasdas', '8000', 'Precious Cepe', '54345345345345', 'dasdasdas@gmail.com', 'waaeaweaweaweawe', 'ewrwrewrwerwer', 'werwerwerwe', '8000', 'Drop off to branches', 'dssdfsdfsd', 5, 'Documents', 5.00, 500.00, 'Medium', 'retertertertertertert', '2023-06-10 03:41:33', '2023-06-10 03:41:33', NULL, 'Pending'),
(5, 'Precious Cepe', '09101061885', 'sadasdasdas', 'asdasdasdasd', 'asdasdasdasd', '8000', 'asdasdas', 'asdasd', 'adasdasdas@gmail.com', 'dsfsdfsd', 'fsdfsdfsdf', 'sdfsdfsdfsdf', '8000', 'Drop off to branches', 'sdfsdfsdfsd', 3, 'Documents', 5.00, 500.00, 'Medium', 'arerwrwerwerwerewrwerwe', '2023-06-11 00:49:48', '2023-06-11 00:49:48', 'TRK3GFN37AM', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$AZXn8h3cTaP7nINokHAq3eczZp5bmfWuYc.22Q5QjMxjLyTQMbR7m', 'admin', NULL, '2023-06-07 20:41:44', '2023-06-07 20:41:44'),
(2, 'Admin2', 'Admin2', 'admin2@gmail.com', NULL, '$2y$10$/V7CX5zQRjHMf0FII3rZh.bLQE8q0txPG5J4rLISYJUWS0eX9bbzO', 'admin', NULL, '2023-06-07 20:41:44', '2023-06-07 20:41:44'),
(3, 'Precious Cepe', 'prcepe2000', 'cepeprecious00@gmail.com', NULL, '$2y$10$N6yeCpmTgZnPKUESaHvv4.MtUo0NyQZzsUhQjti7ZJJ.Dht1VlAqC', 'user', NULL, '2023-06-07 20:47:05', '2023-06-07 20:47:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
