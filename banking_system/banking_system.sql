-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2021 at 06:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `current_balance` int(11) DEFAULT NULL,
  `account_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `current_balance`, `account_id`) VALUES
(1, 'arun', 'arun@gmail.com', 50000, 'acc6789'),
(2, 'raj', 'raj@gmail.com', 45000, 'acc1234'),
(3, 'aman', 'aman@gmail.com', 70000, 'acc8901'),
(4, 'anajali', 'anjali@gmail.com', 50000, 'acc4561'),
(5, 'anajali', 'anjali123@gmail.com', 50000, 'acc2789'),
(6, 'aradhya', 'aradhya@gmail.com', 75000, 'acc6781'),
(7, 'shivank', 'shivank@gmail.com', 65000, 'acc0919'),
(8, 'addhayan', 'addhayan@gmail.com', 80000, 'acc0200'),
(9, 'atul', 'atul@gmail.com', 500000, 'acc0542'),
(10, 'rishabh', 'rishabh@gmail.com', 70000, 'acc9010');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
CREATE TABLE IF NOT EXISTS `transfers` (
  `trid` int(11) NOT NULL,
  `tramount` int(11) DEFAULT NULL,
  `trFrom_id` varchar(20) DEFAULT NULL,
  `trTo_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`trid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`trid`, `tramount`, `trFrom_id`, `trTo_id`) VALUES
(1298, 4000, 'acc6789', 'acc1234'),
(8232, 2000, 'acc1234', 'acc123'),
(5169, 3000, 'acc1234', 'acc6789'),
(1993, 2000, 'acc1234', 'acc6789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
