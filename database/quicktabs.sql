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
-- Table structure for table `quicktabs`
--

DROP TABLE IF EXISTS `quicktabs`;
CREATE TABLE `quicktabs` (
  `quicktab_id` int(11) NOT NULL,
  `quicktab_title_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quicktab_description_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quicktab_title_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quicktab_description_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quicktabs`
--

INSERT INTO `quicktabs` (`quicktab_id`, `quicktab_title_1`, `quicktab_description_1`, `quicktab_title_2`, `quicktab_description_2`) VALUES
(5, 'eqww', '<p>weqeqwewq eqweqweqw weqw eqweqwe qweqw</p>', 'eqweqweqweqw', '<p>qweqwe wqe qwe wqeq wq ewq</p>'),
(6, 'weqweqwewew', 'weqweqwe qwe qw eqw eqweqweqeqwewewqeqeq', 'wqeqweqwewqewqe', 'wqeqweqw eqw eqweqweqw '),
(7, 'sdjnasjda', '<p>sdmsandlajsd</p>', 'dasdasas', '<p>sdasdasd</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quicktabs`
--
ALTER TABLE `quicktabs`
  ADD PRIMARY KEY (`quicktab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quicktabs`
--
ALTER TABLE `quicktabs`
  MODIFY `quicktab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
