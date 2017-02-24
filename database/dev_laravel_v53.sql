-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 09:25 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_laravel_v53`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors_main`
--

CREATE TABLE `authors_main` (
  `authors_main_id` int(11) NOT NULL,
  `authors_main_description` varchar(255) DEFAULT NULL,
  `authors_main_img_1` varchar(255) DEFAULT NULL,
  `authors_main_img_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `catalog_id` int(20) NOT NULL,
  `catalog_name` varchar(255) DEFAULT NULL,
  `catalog_parentid` int(20) DEFAULT NULL,
  `catalog_sortoder` tinyint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catalogs`
--

INSERT DELAYED INTO `catalogs` (`catalog_id`, `catalog_name`, `catalog_parentid`, `catalog_sortoder`) VALUES
(1, 'name1', 1, 10),
(2, 'name2', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` varchar(45) DEFAULT NULL,
  `gallery_description` varchar(255) DEFAULT NULL,
  `gallery_img_1` varchar(255) DEFAULT NULL,
  `gallery_img_2` varchar(255) DEFAULT NULL,
  `gallery_img_3` varchar(255) DEFAULT NULL,
  `gallery_img_4` varchar(255) DEFAULT NULL,
  `gallery_img_5` varchar(255) DEFAULT NULL,
  `gallery_img_6` varchar(255) DEFAULT NULL,
  `gallery_img_7` varchar(255) DEFAULT NULL,
  `gallery_img_8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT DELAYED INTO `groups` (`id`, `name`, `permissions`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '{"_superadmin":1}', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(2, 'editor', '{"_user-editor":1,"_group-editor":1}', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(3, 'base admin', '{"_user-editor":1}', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT DELAYED INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
(2, '2014_02_19_095545_create_users_table', 1),
(3, '2014_02_19_095623_create_user_groups_table', 1),
(4, '2014_02_19_095637_create_groups_table', 1),
(5, '2014_02_19_160516_create_permission_table', 1),
(6, '2014_02_26_165011_create_user_profile_table', 1),
(7, '2014_05_06_122145_create_profile_field_types', 1),
(8, '2014_05_06_122155_create_profile_field', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(10) NOT NULL,
  `new_image` varchar(255) DEFAULT NULL,
  `new_title` varchar(255) DEFAULT NULL,
  `new_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT DELAYED INTO `news` (`new_id`, `new_image`, `new_title`, `new_description`) VALUES
(1, 'img1', 'img1_1', 'abc'),
(2, 'img2', 'img2_2', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT DELAYED INTO `permission` (`id`, `description`, `permission`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '_superadmin', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(2, 'user editor', '_user-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(3, 'group editor', '_group-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(4, 'permission editor', '_permission-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(5, 'profile type editor', '_profile-editor', 0, '2017-02-16 19:07:34', '2017-02-16 19:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_catalogid` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_discount` int(11) DEFAULT NULL,
  `product_imagelink` varchar(255) DEFAULT NULL,
  `product_imagelist` varchar(255) DEFAULT NULL,
  `product_created` int(11) DEFAULT NULL,
  `product_view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT DELAYED INTO `products` (`product_id`, `product_catalogid`, `product_name`, `product_price`, `product_discount`, `product_imagelink`, `product_imagelist`, `product_created`, `product_view`) VALUES
(1, 2, 'product1', 4, 10, 'abcde', 'abcde', 1, 2),
(2, 3, 'abcde', 5, 9, 'abcede', 'abcde', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `profile_field`
--

CREATE TABLE `profile_field` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `profile_field_type_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_field_type`
--

CREATE TABLE `profile_field_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_1`
--

CREATE TABLE `question_1` (
  `question_1_id` int(11) NOT NULL,
  `question_1_title_1` varchar(255) DEFAULT NULL,
  `question_1_description_1` varchar(255) DEFAULT NULL,
  `question_1_title_2` varchar(255) DEFAULT NULL,
  `question_1_description_2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question_2`
--

CREATE TABLE `question_2` (
  `question_2_id` int(11) NOT NULL,
  `question_2_title_3` varchar(255) DEFAULT NULL,
  `question_2_description_3` varchar(255) DEFAULT NULL,
  `question_2_title_4` varchar(255) DEFAULT NULL,
  `question_2_description_4` varchar(255) DEFAULT NULL,
  `question_2_title_5` varchar(255) DEFAULT NULL,
  `question_2_description_5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

CREATE TABLE `samples` (
  `sample_id` int(20) NOT NULL,
  `sample_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `samples`
--

INSERT DELAYED INTO `samples` (`sample_id`, `sample_name`) VALUES
(1, 'tranviethai'),
(2, 'phamanhnguyen'),
(3, 'nguyenminhthai'),
(4, 'huynhthienphuc'),
(5, 'nguyenvana');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `slideshow_id` int(11) NOT NULL,
  `slideshow_name` varchar(255) DEFAULT NULL,
  `slideshow_img` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshows`
--

INSERT DELAYED INTO `slideshows` (`slideshow_id`, `slideshow_name`, `slideshow_img`) VALUES
(1, 'slideshow1', 'abcde'),
(2, 'slideshow2', 'abcdef');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT DELAYED INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `title_mains`
--

CREATE TABLE `title_mains` (
  `title_main_id` int(11) NOT NULL,
  `title_main_title` varchar(255) DEFAULT NULL,
  `title_main_content` varchar(255) DEFAULT NULL,
  `title_main_description` varchar(255) DEFAULT NULL,
  `title_main_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `transaction_status` varchar(45) NOT NULL,
  `transaction_first_name` varchar(45) NOT NULL,
  `transaction_last_name` varchar(45) NOT NULL,
  `transaction_phone` varchar(45) NOT NULL,
  `amount` decimal(45,0) NOT NULL,
  `payment` varchar(45) NOT NULL,
  `payment_info` text NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT DELAYED INTO `transactions` (`transaction_id`, `transaction_status`, `transaction_first_name`, `transaction_last_name`, `transaction_phone`, `amount`, `payment`, `payment_info`, `created`) VALUES
(1, 'transaction_status', 'first_name	', 'last_name', '123456789', '30', 'abcdefghijklmnop', 'abcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnop', 1),
(2, 'transaction_status2', 'first_name2', 'last_name2', '123789456', '23', 'sdasdasssasdsada', 'abcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnop', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT DELAYED INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `banned`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$8OWc3y5qDAPGkd/G/vr1Je4pYtqlDKRt4SJonbiXKb6vA.AaJVZPK', NULL, 1, 0, NULL, NULL, '2017-02-23 23:07:59', '$2y$10$EUMOJ8JLRy/37Fr1gRlKCeZygDA2bx2HONsc/Je.D4/9pZKEp7g52', NULL, 0, '2017-02-16 19:07:34', '2017-02-23 23:07:59'),
(2, 'phuc@admin.com', '$2y$10$Sx2vWTY0SvQDWdGcJqC4R.xCmGbkb47c4ULuP0Mn5R9cBAQNn2kt2', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, 0, '2017-02-23 04:34:42', '2017-02-23 04:35:15'),
(3, 'nguyen@admin.com', '$2y$10$P/ylSrOqKZ5QYUqywNIw2eDpJ42D495gPIyFqY9IQ6UJmvuKm1CTm', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, 0, '2017-02-23 04:35:43', '2017-02-23 04:35:43'),
(4, 'thai@admin.com', '$2y$10$fbe98.U.Ffi0RL7IHZEPaOqB47W6eoT7IBtfRKFhbUKnuYiWioB/G', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, 0, '2017-02-23 04:36:18', '2017-02-23 04:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT DELAYED INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT DELAYED INTO `user_profile` (`id`, `user_id`, `code`, `vat`, `first_name`, `last_name`, `phone`, `state`, `city`, `country`, `zip`, `address`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-16 19:07:34', '2017-02-16 19:07:34'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-23 04:34:42', '2017-02-23 04:34:42'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-23 04:35:43', '2017-02-23 04:35:43'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-23 04:36:18', '2017-02-23 04:36:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors_main`
--
ALTER TABLE `authors_main`
  ADD PRIMARY KEY (`authors_main_id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile_field`
--
ALTER TABLE `profile_field`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  ADD KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`);

--
-- Indexes for table `profile_field_type`
--
ALTER TABLE `profile_field_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_1`
--
ALTER TABLE `question_1`
  ADD PRIMARY KEY (`question_1_id`);

--
-- Indexes for table `question_2`
--
ALTER TABLE `question_2`
  ADD PRIMARY KEY (`question_2_id`);

--
-- Indexes for table `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`sample_id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `title_mains`
--
ALTER TABLE `title_mains`
  ADD PRIMARY KEY (`title_main_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_activation_code_index` (`activation_code`),
  ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profile_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors_main`
--
ALTER TABLE `authors_main`
  MODIFY `authors_main_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `catalog_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `profile_field`
--
ALTER TABLE `profile_field`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_field_type`
--
ALTER TABLE `profile_field_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question_1`
--
ALTER TABLE `question_1`
  MODIFY `question_1_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question_2`
--
ALTER TABLE `question_2`
  MODIFY `question_2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `samples`
--
ALTER TABLE `samples`
  MODIFY `sample_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `title_mains`
--
ALTER TABLE `title_mains`
  MODIFY `title_main_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
