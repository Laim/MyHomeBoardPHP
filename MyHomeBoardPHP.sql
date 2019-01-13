-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2019 at 02:35 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laimmcke_devd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblLink`
--

CREATE TABLE `tblLink` (
  `LID` int(255) NOT NULL,
  `HID` int(255) NOT NULL,
  `LinkName` varchar(255) NOT NULL,
  `LinkHref` varchar(255) NOT NULL,
  `LinkOrder` int(255) NOT NULL,
  `LinkCustomClasses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblLink`
--

INSERT INTO `tblLink` (`LID`, `HID`, `LinkName`, `LinkHref`, `LinkOrder`, `LinkCustomClasses`) VALUES
(1, 1, '<span class=\"fab fa-reddit-square\"></span> Reddit', 'https://reddit.com', 1, 'rel=\"nofollow\" target=\"_blank\"'),
(2, 0, 'GitHub', 'https://github.com/laim', 1, ''),
(3, 1, 'Twitter', 'https://twitter.com', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblLinkHeaders`
--

CREATE TABLE `tblLinkHeaders` (
  `HID` int(255) NOT NULL COMMENT 'Link Header ID',
  `HeaderName` varchar(255) NOT NULL,
  `HeaderLink` varchar(255) NOT NULL,
  `HeaderDDName` varchar(255) NOT NULL COMMENT 'Dropdown Name',
  `HeaderOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblLinkHeaders`
--

INSERT INTO `tblLinkHeaders` (`HID`, `HeaderName`, `HeaderLink`, `HeaderDDName`, `HeaderOrder`) VALUES
(1, 'Social Media', '#', 'dropdownSocialMedia', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblLink`
--
ALTER TABLE `tblLink`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `tblLinkHeaders`
--
ALTER TABLE `tblLinkHeaders`
  ADD PRIMARY KEY (`HID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblLink`
--
ALTER TABLE `tblLink`
  MODIFY `LID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblLinkHeaders`
--
ALTER TABLE `tblLinkHeaders`
  MODIFY `HID` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Link Header ID', AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
