-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2022 at 03:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elap`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(20, 'انتمينر', '2021-12-15 19:41:43', '2021-12-15 19:41:43'),
(21, 'غسالات', '2021-12-15 19:41:51', '2021-12-15 19:41:51'),
(22, 'كروت شاشه', '2021-12-15 19:41:59', '2021-12-15 19:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'مستعجل و مش عايز سوكتات', 348, 17, '2021-12-27 12:12:30', '2021-12-16 00:10:41'),
(17, 'مستعجل و مش عايز سوكتات', 348, 18, '2021-12-27 12:12:33', '2021-12-16 00:10:41'),
(18, 'مستعجل و مش عايز سوكتات', 348, 18, '2021-12-27 12:56:21', '2021-12-16 00:10:41'),
(19, 'بسعﻻيسب', 316, 10, '2021-12-21 00:11:49', '2021-12-21 00:11:49'),
(20, 'evd', 348, 17, '2021-12-27 12:56:23', '2021-12-21 00:12:59'),
(21, 'evd', 318, 10, '2021-12-21 00:12:59', '2021-12-21 00:12:59'),
(22, 'evd', 319, 10, '2021-12-21 00:12:59', '2021-12-21 00:12:59'),
(23, 'erge', 352, 83, '2022-01-03 16:57:01', '2022-01-03 16:57:01'),
(24, 'مستعجل', 358, 87, '2022-02-09 19:50:00', '2022-02-09 19:50:00'),
(25, 'test', 359, 85, '2022-02-10 00:48:06', '2022-02-10 00:48:06');

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
-- Table structure for table `fixeds`
--

CREATE TABLE `fixeds` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history_products`
--

CREATE TABLE `history_products` (
  `id` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_products`
--

INSERT INTO `history_products` (`id`, `status`, `user_id`, `product_id`, `created_at`, `end_at`, `updated_at`) VALUES
(97, '0', 85, 359, '2022-02-10 00:48:06', NULL, '2022-02-10 00:48:06');

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
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_12_13_215127_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 88);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'الاقسام', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(2, 'تعديل قسم', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(3, 'اضافه قسم', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(4, 'حذف قسم', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(5, 'المنتجات', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(6, 'اضافه منتج', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(7, 'تعديل منتج', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(8, 'حذف منتج', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(9, 'رفض منتج', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(10, 'اضافه ملاحظه للمنتج', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(11, 'استلام المنتج', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(12, 'تسليم المنتج', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(13, 'تسليم العميل', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(14, 'تم الاصلاح', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(15, 'صيانه متقدمه', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(16, 'موظفين', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(17, 'اضافه موظف', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(18, 'تعديل موظف', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(19, 'حذف موظف', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(20, 'العملاء', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(21, 'اضافه عميل', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(22, 'تعديل عميل', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(23, 'حذف عميل', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(24, 'ادوار الموظفين', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(25, 'اضافه دور', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(26, 'تعديل دور', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(27, 'حذف دور', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(28, 'التقارير', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(29, 'اضافه الموقع', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(30, 'تعديل الموقع', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05'),
(31, 'حذف الموقع', 'web', '2022-02-10 00:39:05', '2022-02-10 00:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `permission_cat`
--

CREATE TABLE `permission_cat` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_cat`
--

INSERT INTO `permission_cat` (`id`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 20, 88, '2022-02-10 02:50:00', '0000-00-00 00:00:00'),
(2, 21, 88, '2022-02-10 02:50:03', '0000-00-00 00:00:00'),
(3, 22, 88, '2022-02-10 02:50:06', '0000-00-00 00:00:00');

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
  `id` int(11) NOT NULL,
  `name_product` varchar(225) NOT NULL,
  `damage` varchar(225) DEFAULT NULL,
  `count` int(11) NOT NULL,
  `product_inclusions` varchar(225) DEFAULT NULL,
  `serial_number` varchar(225) NOT NULL,
  `category_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_product`, `damage`, `count`, `product_inclusions`, `serial_number`, `category_id`, `customers_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(359, 'باور افالون', 'قاطع باور', 1, 'لا يوجود', 'Elap-20220210-1', 20, 89, 89, 0, '2022-02-10 00:48:06', '2022-02-10 00:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'استقبال', 'web', '2022-02-10 00:39:57', '2022-02-10 00:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(10, 1),
(13, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT '1',
  `roles_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `status`, `roles_name`, `created_at`, `updated_at`) VALUES
(85, 'elap', 'elap@mail.com', '$2y$10$Vqwk6lRFJxCJxVwoYeyrBOrwtjC/Brr8mZDMZ3OWfI0lnpJSkQK2a', '015412345631', '1', '[\"صيانه\"]', '2022-02-09 21:19:29', '2022-02-09 19:11:15'),
(88, 'nada', 'nada@mail.com', '$2y$10$PuYuyGuK2qvthDbitEWM..ApLLYJlDY/o3v0WVthXcnJ9ovRl8qiG', '2213185123', '1', '[\"\\u0627\\u0633\\u062a\\u0642\\u0628\\u0627\\u0644\"]', '2022-02-10 00:40:24', '2022-02-10 00:40:24'),
(89, 'Mohamed Samy', 'mohamedsamy@mqail.com', NULL, '01150100104', '0', '[\"\\u0639\\u0645\\u064a\\u0644\"]', '2022-02-10 00:47:47', '2022-02-10 00:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fixeds`
--
ALTER TABLE `fixeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_products`
--
ALTER TABLE `history_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `permission_cat`
--
ALTER TABLE `permission_cat`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fixeds`
--
ALTER TABLE `fixeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_products`
--
ALTER TABLE `history_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permission_cat`
--
ALTER TABLE `permission_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
