-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 09:48 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `uname` varchar(599) NOT NULL,
  `pwd` varchar(599) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `uname`, `pwd`, `created_at`) VALUES
(1, 'admin', 'pass', '2018-10-03 19:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `event_id` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `event_name` varchar(599) NOT NULL,
  `event_from` varchar(100) NOT NULL,
  `event_to` varchar(100) NOT NULL,
  `event_address` varchar(599) NOT NULL,
  `event_place` varchar(599) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`event_id`, `user_email`, `event_name`, `event_from`, `event_to`, `event_address`, `event_place`, `created_at`) VALUES
('E_1', '0', 'Weddings', '2018-10-04', '2018-10-25', 'gimt', 'ghy', '2018-10-04 16:47:39'),
('E_2', 'tanmaydas@gmail.com', 'Birthday Party', '2018-10-11', '2018-10-26', 'ganesh', 'ghy', '2018-10-04 18:18:19'),
('E_3', 'tanmaydas@gmail.com', 'Seminar', '2018-10-19', '2018-10-19', 'hatigaon', 'ghy', '2018-10-04 18:36:49'),
('E_4', 'tanmaydas@gmail.com', 'Weddings', '2018-10-13', '2018-10-25', 'lasgate', 'ghy', '2018-10-04 18:54:39'),
('E_5', 'nubul@gmail.com', 'Seminar', '2018-10-11', '2018-10-18', 'gurgaon', 'Delhi', '2018-10-04 19:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `re_pwd` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `email`, `pwd`, `re_pwd`, `created_at`) VALUES
(1, 'tanmaydas@gmail.com', 'pass', 'pass', '2018-09-30 18:06:07'),
(2, 'nubul@gmail.com', 'pwd', 'pwd', '2018-10-03 20:18:04'),
(3, 'tanmay@gmail.com', 'pass', 'pass', '2018-10-04 04:51:59'),
(4, 'nubul@gmail.com', 'pass', 'pass', '2018-10-04 19:19:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
