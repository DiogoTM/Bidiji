-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 01:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classifiedads`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `adId` int(5) NOT NULL,
  `userId` int(11) NOT NULL,
  `subcategoryId` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`adId`, `userId`, `subcategoryId`, `startDate`, `endDate`) VALUES
(1, 4, 2, '2019-03-17', '2019-03-24'),
(2, 3, 1, '2019-03-12', '2019-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminId` int(5) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminId`, `userId`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleid` int(5) NOT NULL,
  `adid` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleid`, `adid`, `price`, `quantity`, `description`, `name`) VALUES
(3, 1, '50', 1, 'Lord of the rings, like new', 'LOTR-Deluxe'),
(4, 2, '40', 2, 'Watchmen comic book', 'Watchmen Deluxe');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(7) NOT NULL,
  `nameFR` varchar(50) NOT NULL,
  `nameENG` varchar(50) NOT NULL,
  `descriptionFr` varchar(100) NOT NULL,
  `descriptionEng` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `nameFR`, `nameENG`, `descriptionFr`, `descriptionEng`) VALUES
(1, 'livres', 'books', 'Acheter et vendre des livres ', 'Buy and sell books'),
(2, 'musique', 'music', 'Acheter et vendre articles musicales', 'Buy and sell music stuff');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empId` int(5) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empId`, `userId`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `freead`
--

CREATE TABLE `freead` (
  `freeadid` int(5) NOT NULL,
  `adid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freead`
--

INSERT INTO `freead` (`freeadid`, `adid`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberId` int(5) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberId`, `userId`) VALUES
(1, 3),
(2, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `paidad`
--

CREATE TABLE `paidad` (
  `paidadId` int(5) NOT NULL,
  `adid` int(11) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `imageQuantity` int(11) NOT NULL,
  `totalCost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paidad`
--

INSERT INTO `paidad` (`paidadId`, `adid`, `rate`, `imageQuantity`, `totalCost`) VALUES
(1, 2, '3', 2, '6');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `pictureid` int(5) NOT NULL,
  `articleid` int(11) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`pictureid`, `articleid`, `picture`, `description`) VALUES
(1, 3, 'imagepathhere', 'book cover'),
(2, 3, 'imagepathhere', 'internal photo');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategoryId` int(5) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `nameFR` varchar(50) NOT NULL,
  `nameENG` varchar(50) NOT NULL,
  `descriptionEng` varchar(100) NOT NULL,
  `descriptionFr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategoryId`, `categoryId`, `nameFR`, `nameENG`, `descriptionEng`, `descriptionFr`) VALUES
(1, 1, 'usagé', 'used', 'Livres usagés', 'Used books\r\n'),
(2, 1, 'nouveu', 'new', 'nouveaux livres', 'new books');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `address`, `city`, `state`, `phone`, `email`, `password`) VALUES
(1, 'Kwame ', '1800 EartgStreet', 'Montreal', 'QC', '123456789', 'Kwame@gmail.com', 'Kwame'),
(2, 'Wheeler ', '2000 Fire Street', 'Montreal', 'QC', '789456123', 'Wheeler @gmail.com', 'Wheeler '),
(3, 'Linka ', '3000 Wind Street', 'Montreal', 'QC', '456123789', 'Linka@gmail.com', 'Linka'),
(4, 'Gi ', '4000 Water Street', 'Montreal', 'QC', '987654321', 'Gi@gmail.com', 'Gi'),
(5, 'Ma-Ti', '6000 Heart Street', 'Montreal', 'qc', '321654987', 'Ma-Ti@gmail.com', 'Ma-Ti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`adId`),
  ADD KEY `subcategoryId` (`subcategoryId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleid`),
  ADD KEY `adid` (`adid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `freead`
--
ALTER TABLE `freead`
  ADD PRIMARY KEY (`freeadid`),
  ADD KEY `adid` (`adid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `paidad`
--
ALTER TABLE `paidad`
  ADD PRIMARY KEY (`paidadId`),
  ADD KEY `adid` (`adid`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`pictureid`),
  ADD KEY `adid` (`articleid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategoryId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `adId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `freead`
--
ALTER TABLE `freead`
  MODIFY `freeadid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paidad`
--
ALTER TABLE `paidad`
  MODIFY `paidadId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `pictureid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `ad_ibfk_1` FOREIGN KEY (`subcategoryId`) REFERENCES `subcategory` (`subcategoryId`),
  ADD CONSTRAINT `ad_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`adid`) REFERENCES `ad` (`adId`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `freead`
--
ALTER TABLE `freead`
  ADD CONSTRAINT `freead_ibfk_1` FOREIGN KEY (`adid`) REFERENCES `ad` (`adId`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `paidad`
--
ALTER TABLE `paidad`
  ADD CONSTRAINT `paidad_ibfk_1` FOREIGN KEY (`adid`) REFERENCES `ad` (`adId`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`articleid`) REFERENCES `article` (`articleid`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
