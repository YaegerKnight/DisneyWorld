-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 12:40 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disneyworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `merch_id` int(11) NOT NULL,
  `merch_name` varchar(45) DEFAULT NULL,
  `merch_qty` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`merch_id`, `merch_name`, `merch_qty`) VALUES
(1, 'Marvel', 90),
(2, 'Avengers', 98),
(3, 'Deadpool', 100),
(4, 'Wolverine', 100),
(5, 'Disney', 100),
(6, 'Mickey', 100);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `rest_id` int(11) NOT NULL,
  `rest_name` varchar(45) DEFAULT NULL,
  `rest_seats` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`rest_id`, `rest_name`, `rest_seats`) VALUES
(11, 'Rajdhani', 149),
(12, 'Baisaki', 147),
(13, 'Meghana\'s Foods', 130),
(14, 'MTR', 109),
(15, 'Gaze', 120),
(16, 'Caperberry', 115),
(17, 'Forage', 65),
(18, 'Chianti', 30),
(19, 'Little Italy', 45),
(20, 'Pizza Stop', 69),
(21, 'Euki', 59),
(22, 'Vinny\'s', 15),
(23, 'Tangra', 200),
(24, 'Szechuan Dragon', 400),
(25, 'Beijing Bites', 250),
(26, 'Zhangs', 340);

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `ride_id` int(11) NOT NULL,
  `ride_name` varchar(45) DEFAULT NULL,
  `ride_seats` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`ride_id`, `ride_name`, `ride_seats`) VALUES
(111, 'Coaster', 22),
(112, 'Equinox', 22),
(113, 'Mixer', 14),
(114, 'DropZone', 25);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` int(11) NOT NULL,
  `trans_user_email` varchar(45) DEFAULT NULL,
  `trans_user_item` varchar(45) DEFAULT NULL,
  `trans_item_id` int(11) DEFAULT NULL,
  `trans_item_no` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trans_id`, `trans_user_email`, `trans_user_item`, `trans_item_id`, `trans_item_no`) VALUES
(2, 'nandan@gmail.com', 'Equinox', 112, '3'),
(1, 'bs82135@gmail.com', 'Mixer', 113, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`merch_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`ride_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
