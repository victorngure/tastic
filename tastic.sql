-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2018 at 09:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastic`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agentId` int(100) NOT NULL,
  `agentName` varchar(100) NOT NULL,
  `agentPhone` varchar(100) NOT NULL,
  `agentEmail` varchar(100) NOT NULL,
  `agentImage` varchar(100) NOT NULL,
  `agentFacebook` varchar(100) NOT NULL,
  `agentYoutube` varchar(100) NOT NULL,
  `agentTwitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `propertyId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageId`, `image`, `created`, `propertyId`) VALUES
(69, '1516738824-home1.jpg', '2018-01-23 23:20:24', 80),
(70, '1516738824-home2.jpg', '2018-01-23 23:20:24', 80),
(71, '1516831367-home3.jpg', '2018-01-25 01:02:47', 81),
(72, '1516831367-home4.jpg', '2018-01-25 01:02:47', 81),
(73, '1516832146-home7.jpg', '2018-01-25 01:15:46', 82),
(74, '1516832146-home6.jpg', '2018-01-25 01:15:46', 82),
(75, '1516832146-home5.jpg', '2018-01-25 01:15:46', 82),
(76, '1516832146-home4.jpg', '2018-01-25 01:15:46', 82),
(77, '1516832146-home3.jpg', '2018-01-25 01:15:46', 82),
(78, '1516832146-home2.jpg', '2018-01-25 01:15:46', 82),
(79, '1516832146-home1.jpg', '2018-01-25 01:15:46', 82),
(80, '1518071705-home7.jpg', '2018-02-08 09:35:05', 83),
(81, '1518071705-home6.jpg', '2018-02-08 09:35:05', 83),
(82, '1518071705-home5.jpg', '2018-02-08 09:35:05', 83),
(83, '1518072519-home2.jpg', '2018-02-08 09:48:39', 84),
(84, '1518072519-home5.jpg', '2018-02-08 09:48:39', 84),
(85, '1518072519-home7.jpg', '2018-02-08 09:48:39', 84),
(86, '1518072615-home3.jpg', '2018-02-08 09:50:15', 86),
(87, '1518072799-home6.jpg', '2018-02-08 09:53:19', 88),
(88, '1518072799-home3.jpg', '2018-02-08 09:53:19', 88),
(89, '1518072799-home4.jpg', '2018-02-08 09:53:19', 88),
(90, '1518073178-home6.jpg', '2018-02-08 09:59:38', 89),
(91, '1518073178-home3.jpg', '2018-02-08 09:59:38', 89),
(92, '1521401509-home5.jpg', '2018-03-18 22:31:49', 90),
(93, '1521401510-home7.jpg', '2018-03-18 22:31:50', 90);

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `propertyId` int(100) NOT NULL,
  `propertyTitle` varchar(100) NOT NULL,
  `propertyPrice` int(11) NOT NULL,
  `propertyDescription` varchar(254) NOT NULL,
  `propertyArea` int(254) NOT NULL,
  `propertyStatus` varchar(254) NOT NULL,
  `bedrooms` int(254) NOT NULL,
  `bathrooms` int(254) NOT NULL,
  `propertyType` varchar(254) NOT NULL,
  `propertyLocation` varchar(100) NOT NULL,
  `propertySublocation` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `agentId` int(100) NOT NULL,
  `activationStatus` int(1) NOT NULL DEFAULT '0',
  `propertyVideo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`propertyId`, `propertyTitle`, `propertyPrice`, `propertyDescription`, `propertyArea`, `propertyStatus`, `bedrooms`, `bathrooms`, `propertyType`, `propertyLocation`, `propertySublocation`, `created`, `agentId`, `activationStatus`, `propertyVideo`) VALUES
(80, 'Kilimani Heights', 1000, '1000', 0, 'Sale', 0, 0, 'Apartment', 'Mombasa', 'Mtongwe', '2018-03-18 16:37:53', 27, 0, 'https://www.youtube.com/embed/UO5ktwPXsyM'),
(81, 'Donholmn Flat', 100, 'Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling. Of on am father by agreed supply rather either. Own handsome delicate its property mistress her end appetite. Mean are sons too sold nor said.', 100, 'Rent', 5, 5, 'Single Family Home', 'Nairobi', 'Kasarani', '2018-01-25 01:02:46', 27, 0, ''),
(82, 'Phase 8 Bedsitter', 1000, 'Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling. Of on am father by agreed supply rather either. Own handsome delicate its property mistress her end appetite. Mean are sons too sold nor said.', 0, 'Rent', 0, 0, 'Apartment', 'Kisumu', 'Nyamera', '2018-01-25 01:15:46', 27, 0, ''),
(83, 'Madaraka Flats', 1000, 'CSS stands for Cascading Style Sheets.\r\n\r\nCSS describes how HTML elements are to be displayed on screen, paper, or in other media.\r\n\r\nCSS saves a lot of work. It can control the layout of multiple web pages all at once.\r\n\r\nCSS can be added to HTML elemen', 10, 'Sale', 10, 10, 'Apartment', 'Kisumu', 'Nyamera', '2018-02-08 09:35:04', 27, 0, ''),
(84, 'Jong Jong Jong', 10, 'aaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 10, 'Sale', 10, 10, 'Apartment', 'Kisumu', 'Nyamera', '2018-02-08 09:48:39', 27, 0, ''),
(85, 'Jong Jong Jong', 10, 'aaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 10, 'Sale', 10, 10, 'Apartment', '', '', '2018-02-08 09:49:16', 27, 0, ''),
(86, 'Umoja  Tala', 110, '110', 110, 'Sale', 110, 110, 'Apartment', 'Nairobi', 'Kasarani', '2018-02-08 09:50:15', 27, 0, ''),
(87, 'Umoja  Tala', 110, '110', 110, 'Sale', 110, 110, 'Apartment', '', '', '2018-02-08 09:50:55', 27, 0, ''),
(88, 'Utawala FLats', 1111, 'Note that per RFC 2616 (the HTTP/1.1 specification), the value of the Location header must be an absolute URI, not just a path.\r\n\r\nIf your script is for a specific purpose and always redirects to a certain section, but may vary which particular records a', 1111, 'Sale', 1111, 1111, 'Apartment', 'Mombasa', 'Mtongwe', '2018-02-08 09:53:19', 27, 0, ''),
(89, 'Ruai Plaza ', 100, 'Note that per RFC 2616 (the HTTP/1.1 specification), the value of the Location header must be an absolute URI, not just a path.\r\n\r\nIf your script is for a specific purpose and always redirects to a certain section, but may vary which particular records a', 100, 'Sale', 100, 100, 'Apartment', 'Mombasa', 'Mtongwe', '2018-02-08 09:59:38', 27, 0, ''),
(90, 'qqqqq', 100, 'qqqqq', 100, 'Rent', 100, 100, 'Co-op', 'Nairobi', 'Embakasi', '2018-03-18 22:31:49', 27, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `propertyCordinates`
--

CREATE TABLE `propertyCordinates` (
  `id` int(100) NOT NULL,
  `propertyId` int(100) NOT NULL,
  `propertyLong` varchar(100) NOT NULL,
  `propertyLat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `id` int(100) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `propertyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_features`
--

INSERT INTO `property_features` (`id`, `feature`, `propertyId`) VALUES
(52, 'Attic', 80),
(53, 'Garden', 80),
(54, 'Attic', 81),
(55, 'Basement', 81),
(56, 'Garden', 81),
(57, 'Alarm System', 81),
(58, 'Solar Panels', 81),
(59, 'CCTV', 81),
(60, 'Attic', 82),
(61, 'Basement', 82),
(62, 'Garden', 82),
(63, 'Alarm System', 82),
(64, 'Solar Panels', 82),
(65, 'CCTV', 82),
(66, 'Attic', 83),
(67, 'Garden', 83),
(68, 'Solar Panels', 83),
(69, 'Attic', 84),
(70, 'Attic', 86),
(71, 'Attic', 88),
(72, 'Solar Panels', 89),
(73, 'Attic', 90),
(74, 'Garden', 90),
(75, 'Solar Panels', 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `activationStatus` int(1) NOT NULL DEFAULT '0',
  `hash` varchar(255) NOT NULL,
  `userMobile1` varchar(100) NOT NULL,
  `userMobile2` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `userImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userPassword`, `userEmail`, `activationStatus`, `hash`, `userMobile1`, `userMobile2`, `facebook`, `twitter`, `youtube`, `userImage`) VALUES
(27, 'viki      ', '946cc85484c4dd01e2f44fbc88afbc93', 'victorngure@gmail.com', 0, 'c24cd76e1ce41366a4bbe8a49b02a028', '0701969007', '0789089229', 'https://www.facebook.com/vngure1', 'https://twitter.com/vicngure1', 'https://www.youtube.com/channel/UClmnMjn8nvl4LSkW5c9KgFw?view_as=subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agentId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `fk_propertyId` (`propertyId`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`propertyId`),
  ADD KEY `agentId` (`agentId`);

--
-- Indexes for table `propertyCordinates`
--
ALTER TABLE `propertyCordinates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertyId` (`propertyId`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertyId` (`propertyId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agentId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `propertyId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `propertyCordinates`
--
ALTER TABLE `propertyCordinates`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_features`
--
ALTER TABLE `property_features`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_propertyId` FOREIGN KEY (`propertyId`) REFERENCES `properties` (`propertyId`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`agentId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `propertyCordinates`
--
ALTER TABLE `propertyCordinates`
  ADD CONSTRAINT `propertyCordinates_ibfk_1` FOREIGN KEY (`propertyId`) REFERENCES `properties` (`propertyId`);

--
-- Constraints for table `property_features`
--
ALTER TABLE `property_features`
  ADD CONSTRAINT `property_features_ibfk_1` FOREIGN KEY (`propertyId`) REFERENCES `properties` (`propertyId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
