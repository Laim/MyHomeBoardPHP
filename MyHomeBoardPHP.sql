-- Host: localhost
-- Generation Time: Feb 09, 2019 at 02:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhomeboardphp`
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
  `LinkCustomVar` varchar(255) NOT NULL,
  `LinkFontAwesome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblLink`
--

INSERT INTO `tblLink` (`LID`, `HID`, `LinkName`, `LinkHref`, `LinkOrder`, `LinkCustomVar`, `LinkFontAwesome`) VALUES
(1, 0, 'GitHub', 'https://github.com/laim/myhomeboardphp', 1, 'rel=\\\"nofollow\\\" target=\\\"_blank\\\"', 'fab fa-github'),
(2, 1, 'Twitter', 'https://twitter.com/lilpeepachu', 1, '', 'fab fa-twitter'),
(3, 1, 'Instagram', 'https://instagram.com/lyeuhm', 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblLinkHeaders`
--

CREATE TABLE `tblLinkHeaders` (
  `HID` int(255) NOT NULL COMMENT 'Link Header ID',
  `HeaderName` varchar(255) NOT NULL,
  `HeaderLink` varchar(255) NOT NULL,
  `HeaderDDName` varchar(255) NOT NULL COMMENT 'Dropdown Name',
  `HeaderOrder` int(11) NOT NULL,
  `HeaderFontAwesome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblLinkHeaders`
--

INSERT INTO `tblLinkHeaders` (`HID`, `HeaderName`, `HeaderLink`, `HeaderDDName`, `HeaderOrder`, `HeaderFontAwesome`) VALUES
(1, 'Social Media', '#', 'dropdownSocialMedia', 1, '');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
