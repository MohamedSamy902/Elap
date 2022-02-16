-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2022 at 03:34 PM
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
(1, 'انتمينر', '2022-02-16 12:28:46', '2022-02-16 12:28:46'),
(2, 'بورده', '2022-02-16 12:28:46', '2022-02-16 12:28:46');

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

-- --------------------------------------------------------

--
-- Table structure for table `history_products`
--

CREATE TABLE `history_products` (
  `id` int(11) NOT NULL,
  `serial_number` varchar(225) NOT NULL,
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

INSERT INTO `history_products` (`id`, `serial_number`, `status`, `user_id`, `product_id`, `created_at`, `end_at`, `updated_at`) VALUES
(98, 'Elap-20220216-10', '0', 1, 377, '2022-02-16 12:27:45', NULL, '2022-02-16 12:27:45'),
(99, 'Elap-20220216-10', '0', 1, 378, '2022-02-16 12:27:45', NULL, '2022-02-16 12:27:45'),
(100, 'Elap-20220216-10', '0', 1, 379, '2022-02-16 12:27:45', NULL, '2022-02-16 12:27:45'),
(101, 'Elap-20220216-10', '0', 1, 380, '2022-02-16 12:27:45', NULL, '2022-02-16 12:27:45'),
(102, 'Elap-20220216-10', '0', 1, 381, '2022-02-16 12:27:45', NULL, '2022-02-16 12:27:45'),
(103, 'Elap-20220216-1', '0', 1, 1, '2022-02-16 12:29:43', NULL, '2022-02-16 12:29:43'),
(104, 'Elap-20220216-2', '0', 1, 2, '2022-02-16 12:29:43', NULL, '2022-02-16 12:29:43'),
(105, '5784144995', '0', 1, 3, '2022-02-16 12:29:43', NULL, '2022-02-16 12:29:43');

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
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2021_12_13_215127_create_permission_tables', 1);

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
(5, 'App\\Models\\User', 1);

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
(1, 'الاقسام', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(2, 'تعديل قسم', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(3, 'اضافه قسم', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(4, 'حذف قسم', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(5, 'المنتجات', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(6, 'اضافه منتج', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(7, 'تعديل منتج', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(8, 'حذف منتج', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(9, 'رفض منتج', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(10, 'اضافه ملاحظه للمنتج', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(11, 'استلام المنتج', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(12, 'تسليم المنتج', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(13, 'تسليم العميل', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(14, 'تم الاصلاح', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(15, 'صيانه متقدمه', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(16, 'موظفين', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(17, 'اضافه موظف', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(18, 'تعديل موظف', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(19, 'حذف موظف', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(20, 'العملاء', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(21, 'اضافه عميل', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(22, 'تعديل عميل', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(23, 'حذف عميل', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(24, 'ادوار الموظفين', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(25, 'اضافه دور', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(26, 'تعديل دور', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(27, 'حذف دور', 'web', '2022-02-16 11:17:32', '2022-02-16 11:17:32'),
(28, 'التقارير', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(29, 'اضافه الموقع', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(30, 'تعديل الموقع', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(31, 'حذف الموقع', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33');

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
(16, 1, 1, '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(17, 2, 1, '2022-02-16 11:17:33', '2022-02-16 11:17:33');

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
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'باور b8', 'غير معروف', 1, 'لا يوجود', 'Elap-20220216-1', 1, 2, 1, 0, '2022-02-16 12:29:43', '2022-02-16 12:29:43'),
(2, 'باور b8', 'غير معروف', 1, 'باور', 'Elap-20220216-2', 1, 2, 1, 0, '2022-02-16 12:29:43', '2022-02-16 12:29:43'),
(3, 'باور b8', 'غير معروف', 1, 'سريال', '5784144995', 1, 2, 1, 0, '2022-02-16 12:29:43', '2022-02-16 12:29:43');

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
(1, 'استقبال', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(2, 'تست', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(3, 'صيانه', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(4, 'صيانه متقدمه', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(5, 'مدير', 'web', '2022-02-16 11:17:33', '2022-02-16 11:17:33');

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
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 5),
(26, 5),
(27, 5),
(28, 5),
(29, 5),
(30, 5),
(31, 5);

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
(1, 'Mohamed Samy', 'admin@admin.com', '$2y$10$TyeiXrjVTv32SFomo59nDeF4RH1PP2e5Bsh5hL1ipnguZmUU96ICW', NULL, 'مفعل', '[\"admin\"]', '2022-02-16 11:17:33', '2022-02-16 11:17:33'),
(2, 'mohamed samy', 'mohamed@mail.com', NULL, '01150100104', '0', '[\"\\u0639\\u0645\\u064a\\u0644\"]', '2022-02-16 11:25:30', '2022-02-16 11:25:30');

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
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `history_products`
--
ALTER TABLE `history_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permission_cat`
--
ALTER TABLE `permission_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
