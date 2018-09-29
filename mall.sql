-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 10:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mall`
--

-- --------------------------------------------------------

--
-- Table structure for table `buying_detail`
--

CREATE TABLE IF NOT EXISTS `buying_detail` (
`InvoiceNo` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL DEFAULT '0',
  `ProductID` int(11) NOT NULL DEFAULT '0',
  `Qty` int(11) DEFAULT NULL,
  `OrderDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`CustomerID` int(11) NOT NULL,
  `Username` varchar(35) DEFAULT NULL,
  `Password` varchar(35) DEFAULT NULL,
  `Name` varchar(35) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Phone_no` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Username`, `Password`, `Name`, `Address`, `Phone_no`) VALUES
(1, 'asd   ', 'asd', 'asd', 'asdasd', 'asd'),
(2, 'acapcapik', '1234', 'Asyraf Syafiq', '21,Harmoni 8,Taman Nusa Damai Pasir Gudang,81700,Johor', '0177049039'),
(3, 'amerkadal ', '920518ai', 'amir izzat', '21 jalan harmoni 8', '0126548875'),
(4, 'syafiq ', '1234', 'asyraf', '21,Harmoni 8,Taman Nusa Damai Pasir Gudang,81700,Johor', '0177049039');

-- --------------------------------------------------------

--
-- Table structure for table `manage_detail`
--

CREATE TABLE IF NOT EXISTS `manage_detail` (
`ManageNo` int(11) NOT NULL,
  `StoreID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `ManageDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
`StoreID` int(11) NOT NULL,
  `StoreName` varchar(35) DEFAULT NULL,
  `StoreUsername` varchar(35) DEFAULT NULL,
  `StorePassword` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
`id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'S6 EDGE', '00126', 'img/s6.jpg', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct2`
--

CREATE TABLE IF NOT EXISTS `tblproduct2` (
`id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct2`
--

INSERT INTO `tblproduct2` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'HTC M8', 'B01', 'img/m8.jpg', 1500.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buying_detail`
--
ALTER TABLE `buying_detail`
 ADD PRIMARY KEY (`InvoiceNo`,`CustomerID`,`ProductID`), ADD KEY `buy_fk1` (`CustomerID`), ADD KEY `buy_fk2` (`ProductID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `manage_detail`
--
ALTER TABLE `manage_detail`
 ADD PRIMARY KEY (`ManageNo`,`StoreID`,`ProductID`), ADD KEY `man_fk1` (`StoreID`), ADD KEY `man_fk2` (`ProductID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
 ADD PRIMARY KEY (`StoreID`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct2`
--
ALTER TABLE `tblproduct2`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buying_detail`
--
ALTER TABLE `buying_detail`
MODIFY `InvoiceNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `manage_detail`
--
ALTER TABLE `manage_detail`
MODIFY `ManageNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
MODIFY `StoreID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblproduct2`
--
ALTER TABLE `tblproduct2`
MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buying_detail`
--
ALTER TABLE `buying_detail`
ADD CONSTRAINT `buy_fk1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
ADD CONSTRAINT `buy_fk2` FOREIGN KEY (`ProductID`) REFERENCES `tblproduct` (`id`);

--
-- Constraints for table `manage_detail`
--
ALTER TABLE `manage_detail`
ADD CONSTRAINT `man_fk1` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`),
ADD CONSTRAINT `man_fk2` FOREIGN KEY (`ProductID`) REFERENCES `tblproduct` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
