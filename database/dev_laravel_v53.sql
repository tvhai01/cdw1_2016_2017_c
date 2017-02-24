-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 03:26 AM
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
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
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

INSERT INTO `transactions` (`transaction_id`, `transaction_status`, `transaction_first_name`, `transaction_last_name`, `transaction_phone`, `amount`, `payment`, `payment_info`, `created`) VALUES
(1, 'transaction_status', 'first_name	', 'last_name', '123456789', '30', 'abcdefghijklmnop', 'abcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnop', 1),
(2, 'transaction_status2', 'first_name2', 'last_name2', '123789456', '23', 'sdasdasssasdsada', 'abcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnopabcdefghijklmnop', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
