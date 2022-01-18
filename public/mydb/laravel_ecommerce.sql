-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `phone`, `address`, `product_title`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(19, 'Emran', '01444555666', 'Dinajpur, Bangladesh', 'Birds Dolls', '1', '2200', '2022-01-12 23:50:22', '2022-01-12 23:50:22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_07_025357_create_sessions_table', 1),
(7, '2022_01_07_130029_create_products_table', 2),
(8, '2022_01_10_123817_create_carts_table', 3),
(9, '2022_01_12_030230_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `product_name`, `quantity`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 't-shirt', '4', '200', 'not delivered', '2022-01-11 22:23:46', '2022-01-11 22:23:46'),
(2, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 'kurti', '14', '140', 'delivered', '2022-01-11 22:23:46', '2022-01-12 00:35:59'),
(3, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 't-shirt', '4', '200', 'not delivered', '2022-01-11 22:40:27', '2022-01-11 22:40:27'),
(5, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 't-shirt', '1', '200', 'not delivered', '2022-01-12 08:23:23', '2022-01-12 08:23:23'),
(7, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 'Blanket', '3', '1400', 'delivered', '2022-01-12 22:43:33', '2022-01-12 22:46:07'),
(8, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 'Dolls', '2', '1600', 'not delivered', '2022-01-12 22:43:34', '2022-01-12 22:43:34'),
(9, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 'T-Shirt', '3', '800', 'not delivered', '2022-01-12 22:43:34', '2022-01-12 22:43:34'),
(10, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 'Shoe\'s', '1', '999', 'delivered', '2022-01-12 22:44:14', '2022-01-12 22:52:05'),
(11, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 'Headphone', '2', '1550', 'not delivered', '2022-01-12 22:45:08', '2022-01-12 22:45:08'),
(12, 'Emran', '01555444333', 'Dinajpur, Bangladesh', 'Shoe\'s', '3', '999', 'not delivered', '2022-01-14 07:30:55', '2022-01-14 07:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Kurti', '140', 'Now you can browse privately, and other people who use this device won’t see your activity. However, downloads, bookmarks and reading list items will be saved', '5', '1641806232.jpg', '2022-01-09 07:30:02', '2022-01-12 19:59:44'),
(4, 'Shoe\'s', '999', 'Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.', '13', '1642045275.jpg', '2022-01-12 21:08:05', '2022-01-12 21:41:15'),
(7, 'Sweater', '3600', 'Sixteen Clothing is free CSS template provided by TemplateMo.', '10', '1642045433.jpg', '2022-01-12 21:43:53', '2022-01-12 21:43:53'),
(8, 'Dolls', '1600', 'Sixteen Clothing is free CSS template provided by TemplateMo.', '12', '1642045555.jpg', '2022-01-12 21:45:55', '2022-01-12 21:45:55'),
(9, 'Blanket', '1400', 'Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.', '5', '1642045673.jpg', '2022-01-12 21:47:53', '2022-01-12 21:47:53'),
(10, 'Jacket', '1900', 'Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.', '18', '1642045765.jpg', '2022-01-12 21:49:25', '2022-01-12 21:49:25'),
(11, 'Birds Dolls', '2200', 'Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.', '8', '1642045868.jpg', '2022-01-12 21:51:08', '2022-01-12 21:51:08'),
(12, 'Shirt', '600', 'Sixteen Clothing is free CSS template provided by TemplateMo.', '14', '1642045943.jpg', '2022-01-12 21:52:23', '2022-01-12 21:52:23'),
(13, 'T-Shirt', '800', 'Sixteen Clothing is free CSS template provided by TemplateMo.', '7', '1642045985.jpg', '2022-01-12 21:53:05', '2022-01-12 21:53:05'),
(14, 'Cap', '300', 'Sixteen Clothing is free CSS template provided by TemplateMo.', '23', '1642046034.jpg', '2022-01-12 21:53:54', '2022-01-12 21:53:54'),
(15, 'Top', '599', 'Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.', '17', '1642047787.jpg', '2022-01-12 22:18:33', '2022-01-12 22:23:07'),
(16, 'Headphone', '1550', 'Sixteen Clothing is free CSS template provided by TemplateMo.', '13', '1642047572.jpg', '2022-01-12 22:19:32', '2022-01-12 22:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('f9BkqGVWKUbsfZGfVwANrlGY5N0r71kyxUf5v5mm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRWdCaTRpdHRUOFNESVVYUlNYcE1ETnJUa2l3WmFBRjFCTHJvbXZORiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91cGRhdGV2aWV3LzE1Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDFTdzhGY1NjZkZwVU1pOGpVVWkyM3VKMEx1dGtLLy9EdWwuR2pjelQzUGJ2RjR0SmxmQkNDIjt9', 1642168934),
('mDymrGXswv3nFu8gSz0WByO9LpvUZmXi5asphOWn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSjAxUkxwQnEwVWhqQlBXUFlnOGVNeEtSYWZvSGllUVdNYzFsZHNOOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1642166860),
('rmaa7iidoAVy7Bv0bw1ehvTdVY1KvpiWlKs5kExA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1lBWEZuVW9SbmpKQUpVNjBNRjR2cFBKd25mWjlxTExRaVNyWnVKSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1642507655);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1', '01555444333', 'dhaka, Bangladesh', NULL, '$2y$10$1Sw8FcScfFpUMi8jUUi23uJ0LutkK//Dul.GjczT3PbvF4tJlfBCC', NULL, NULL, 'AXD4n8xxRkduLCK29sVSC3mxVVGg4yXBZsMm14WChAfSUdeOalMK4Ad2GdWg', NULL, NULL, '2022-01-06 23:04:07', '2022-01-12 19:17:22'),
(2, 'Emran', 'user@gmail.com', '0', '01555444333', 'Dinajpur, Bangladesh', NULL, '$2y$10$82/w6CLrl4pqZqByJJE/mOCBrkYT2mXm0UdchTmpZkPNV1uA9WUs.', NULL, NULL, 'kdQ0lAoN6IflN0DAVyT0EDqEOZ8cjX3Frb3pabmHzsZfi7Jf8NUm2NcLyMB9', NULL, NULL, '2022-01-07 02:51:35', '2022-01-07 02:51:35'),
(3, 'Emran', 'emran@gmail.com', '0', '01444555666', 'Dinajpur, Bangladesh', NULL, '$2y$10$F7ANQnz.V3MS85ndK3vDrudnj5UPqkkt5nI8SpnckP56Y.VwdidOq', NULL, NULL, NULL, NULL, NULL, '2022-01-12 23:49:51', '2022-01-12 23:49:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
