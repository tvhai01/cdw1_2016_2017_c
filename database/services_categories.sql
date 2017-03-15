-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 10:14 AM
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
-- Table structure for table `services_categories`
--

DROP TABLE IF EXISTS `services_categories`;
CREATE TABLE `services_categories` (
  `service_category_id` int(50) NOT NULL,
  `service_category_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services_categories`
--

INSERT INTO `services_categories` (`service_category_id`, `service_category_title`) VALUES
(1, 'Process Engineering111'),
(2, 'Assembly Of Steel2222'),
(3, 'Automotive Industry'),
(4, 'Heavy Industry & Mining'),
(5, 'Agricultural Engineering'),
(6, 'Chemical Industry'),
(7, 'Glass & aluminum'),
(11, 'sdasdsadasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD PRIMARY KEY (`service_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services_categories`
--
ALTER TABLE `services_categories`
  MODIFY `service_category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
