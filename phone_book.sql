-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 10:02 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_book`
--

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
(3, '2017_09_24_065924_create_posts_table', 1),
(4, '2017_09_25_075140_add_user_id_to_posts', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `Fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mnumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hnumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Fname`, `Lname`, `Mnumber`, `Hnumber`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Nedkooos', 'Stefanov', '0899162124', '1234567890', '2017-09-24 04:26:46', '2017-09-25 05:27:43', 1),
(4, 'Raq', 'Stefanova', '0812321312', '123123123', '2017-09-24 10:36:14', '2017-09-24 10:36:14', 1),
(5, 'Pepi', 'Emilova', '1234567890', '1234567890', '2017-09-24 16:46:32', '2017-09-24 16:46:32', 1),
(6, 'Ivan', 'Ivanov', '1234567890', '0987654321', '2017-09-25 05:00:10', '2017-09-25 05:00:10', 1),
(8, 'testtest', 'test', '1234567890', '1234567890', '2017-09-25 05:29:26', '2017-09-25 05:29:26', 2),
(9, 'pepitest', 'pepi', '1234567890', '1234567890', '2017-09-25 17:13:06', '2017-09-25 17:13:06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nedko', 'nedkospetc@abv.bg', '$2y$10$SjmVndV/eL9Ntk9oFB9c4uMu2LZZxPmtTE.oin4xHA0PjIEfkmdm2', 'KzVppJgduYJRTHadokZa9c0tnw5KLQwkyIkWhoLGa5iyo6SsWhNXp7UFJsay', '2017-09-25 04:47:24', '2017-09-25 04:47:24'),
(2, 'test', 'test@abv.bg', '$2y$10$ikFhcE1lE/nPOsRIrxSrpOXI0uyAtHh/i7MhT1TovGPp0bEhqnwJO', 'a09xgCxAJQ1NxSsy2XuFePnZEDi7W7Z11VoN9W5zQ4WJ477ZQQ3d4NA5fXVh', '2017-09-25 05:18:48', '2017-09-25 05:18:48'),
(3, 'pepi', 'pepi@abv.bg', '$2y$10$82GhdVxH1W/6BKF1N7E46OLKomjo1hrl5qB5av0TnR2GcfMzq06hS', '1va4BTnxybkYfLLXKP2UzAVEGxrtA6CoTWDjHqXox9mhdFcLlKRlJoW6fLmc', '2017-09-25 17:12:39', '2017-09-25 17:12:39');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
