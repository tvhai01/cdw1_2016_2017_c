-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 09:50 AM
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
  `quicktab_title_1` varchar(255) DEFAULT NULL,
  `quicktab_description_1` varchar(255) DEFAULT NULL,
  `quicktab_title_2` varchar(255) DEFAULT NULL,
  `quicktab_description_2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quicktabs`
--

INSERT INTO `quicktabs` (`quicktab_id`, `quicktab_title_1`, `quicktab_description_1`, `quicktab_title_2`, `quicktab_description_2`) VALUES
(1, 'What do we do?', 'We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.', 'What do we do?', 'What do we do?'),
(2, 'What do we do?32323', 'We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.', 'What do we do?', 'What do we do?');

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
  MODIFY `quicktab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
