-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 21, 2021 at 02:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweettooth`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_Id` int(11) NOT NULL,
  `FirstName` varchar(25) DEFAULT NULL,
  `LastName` varchar(25) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Pincode` int(11) DEFAULT NULL,
  `PhNo` char(10) DEFAULT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_Id`, `FirstName`, `LastName`, `Email`, `Address`, `Pincode`, `PhNo`, `Username`, `Password`) VALUES
(1, 'Arun', 'Sharma', 'sharma.arun12@gmail.com', 'House no.2, Shanti Nagar, Margao, Goa.', 403602, '9800457718', 'Arun_33', '123arun456');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(50) DEFAULT NULL,
  `MRP` int(11) DEFAULT NULL,
  `Availability` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ItemID`, `ItemName`, `MRP`, `Availability`) VALUES
(1, 'BlueBerry Cheesecake Slice ', 80, 'Available'),
(2, 'Red Velvet Cupcake ', 45, 'Available'),
(3, 'Pancake ', 110, 'Available'),
(4, 'Chocolate Icing Donut ', 40, 'Available'),
(5, 'Chocolate Fudge Brownie ', 50, 'Available'),
(6, 'Carrot Cake Slice', 60, 'Available'),
(7, 'Creme Caramel ', 150, 'Available'),
(8, 'Chocolate Waffle', 120, 'Available'),
(9, 'Ice Cream Sundae', 60, 'Available'),
(10, 'Tiramisu', 80, 'Available'),
(11, 'White Chocolate Rasberry Tart ', 160, 'Available'),
(12, 'Chocolate Chip Cookie', 25, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderNo` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `QTY` int(11) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Amount` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderNo`, `ItemID`, `QTY`, `DateTime`, `Amount`, `Customer_Id`) VALUES
(1, 4, 2, '2021-12-21 15:23:04', 80, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNo`),
  ADD KEY `ItemNo` (`ItemID`),
  ADD KEY `Customer_Id` (`Customer_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ItemID`) REFERENCES `menu` (`ItemID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customers` (`Customer_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
