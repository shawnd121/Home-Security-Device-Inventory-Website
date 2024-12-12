-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Dec 12, 2024 at 12:00 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sd2257`
--

-- --------------------------------------------------------

--
-- Table structure for table `HomeSecurityCategories`
--

CREATE TABLE IF NOT EXISTS `HomeSecurityCategories` (
  `HomeSecurityCategoryID` int(11) NOT NULL,
  `HomeSecurityCategoryCode` varchar(10) NOT NULL,
  `HomeSecurityCategoryName` varchar(255) NOT NULL,
  `AisleNumber` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HomeSecurityCategories`
--

INSERT INTO `HomeSecurityCategories` (`HomeSecurityCategoryID`, `HomeSecurityCategoryCode`, `HomeSecurityCategoryName`, `AisleNumber`, `DateCreated`) VALUES
(100, 'SDL', 'Smart Door Locks', 1, '2024-11-22 21:51:36'),
(200, 'SCS', 'Security Camera Systems', 2, '2024-11-22 21:51:36'),
(300, 'MSL', 'Motion Sensor Lights', 3, '2024-11-22 21:51:36'),
(400, 'VDB', 'Video Doorbells', 4, '2024-11-22 21:51:36'),
(500, 'WAL', 'Window Alarms', 5, '2024-11-22 21:51:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HomeSecurityCategories`
--
ALTER TABLE `HomeSecurityCategories`
 ADD PRIMARY KEY (`HomeSecurityCategoryID`), ADD UNIQUE KEY `HomeSecurityCategoryCode` (`HomeSecurityCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
