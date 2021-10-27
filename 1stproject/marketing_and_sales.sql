-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 09:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketing_and_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `CustomerID` bigint(20) NOT NULL,
  `CustomerName` text NOT NULL,
  `OfficeAddress` text NOT NULL,
  `ContactNo` text NOT NULL,
  `EmailAddress` text NOT NULL,
  `CustomerStatus` varchar(5) NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`CustomerID`, `CustomerName`, `OfficeAddress`, `ContactNo`, `EmailAddress`, `CustomerStatus`, `Remarks`) VALUES
(4357, 'piolo', 'imus cavite', '598871025', 'paul@gmail.com', 'activ', 'good'),
(4359, 'polmer', 'imus cavite', '598871025', 'paul@gmail.com', 'ok', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tbl`
--

CREATE TABLE `employee_tbl` (
  `EncoderID` bigint(20) NOT NULL,
  `FirstName` text NOT NULL,
  `MidName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `ContactNos` varchar(25) NOT NULL,
  `EmailAddress` text NOT NULL,
  `BloodType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_tbl`
--

INSERT INTO `employee_tbl` (`EncoderID`, `FirstName`, `MidName`, `LastName`, `BirthDate`, `Gender`, `Address`, `ContactNos`, `EmailAddress`, `BloodType`) VALUES
(2456, 'Christian', 'Genilo', 'Cullados', '2011-05-09', 'male', 'imus cavite', '6787754', 'cgc@gmail.com', 'o+'),
(3001, 'Moy', 'Moy', 'Capistrano', '2011-01-31', 'male', 'Las pinas city', '56441', 'moy@gmail.com', 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `OrderDetailsID` bigint(20) NOT NULL,
  `OrderID` bigint(20) NOT NULL,
  `ProductID` bigint(20) NOT NULL,
  `PONum` varchar(20) NOT NULL,
  `InvoiceNum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`OrderDetailsID`, `OrderID`, `ProductID`, `PONum`, `InvoiceNum`) VALUES
(1991, 1001, 6849, '090900909', '432555');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `OrderID` bigint(20) NOT NULL,
  `CustomerID` bigint(20) NOT NULL,
  `OrderDetailsID` bigint(20) NOT NULL,
  `OrderAmount` decimal(10,0) NOT NULL,
  `OrderStatus` varchar(5) NOT NULL,
  `EncoderID` bigint(20) NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`OrderID`, `CustomerID`, `OrderDetailsID`, `OrderAmount`, `OrderStatus`, `EncoderID`, `Remarks`) VALUES
(16871, 4357, 1991, '9750', 'paid', 2456, 'okay!'),
(16872, 4357, 1991, '19', 'paid', 3001, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `ProductID` bigint(20) NOT NULL,
  `ProductName` text NOT NULL,
  `Description` text NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`ProductID`, `ProductName`, `Description`, `Category`, `Status`, `Price`, `Unit`) VALUES
(6849, 'Premium Sofa bed', 'Sofa made in Paraguay. Delicate to the body and dedicated to cater your needs.', 'Sofa', 'Ready', '16000', 'PESO');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_tbl`
--

CREATE TABLE `suppliers_tbl` (
  `RecordID` bigint(20) NOT NULL,
  `SupplierName` varchar(45) NOT NULL,
  `Address` text NOT NULL,
  `ContactPerson` varchar(45) NOT NULL,
  `ContactNos` text NOT NULL,
  `EmailAddress` text NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers_tbl`
--

INSERT INTO `suppliers_tbl` (`RecordID`, `SupplierName`, `Address`, `ContactPerson`, `ContactNos`, `EmailAddress`, `Remarks`) VALUES
(2001, 'Paraguay Furniture Inc.', 'Paraguay', 'Chino Magalpok', '+45 886923', 'Magalpok@mail.com', 'Good supplier'),
(2002, 'Palawan Bed Makers GRC.', 'Palawan, Palawan, Philippines', 'Boy Dekwat', '+63 98872661', 'Dekwatboy@gmail.com', 'Very nice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  ADD PRIMARY KEY (`EncoderID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderDetailsID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `fk_customerID` (`CustomerID`),
  ADD KEY `EncoderID` (`EncoderID`),
  ADD KEY `OrderDetailsID` (`OrderDetailsID`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `suppliers_tbl`
--
ALTER TABLE `suppliers_tbl`
  ADD PRIMARY KEY (`RecordID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `CustomerID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4360;

--
-- AUTO_INCREMENT for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  MODIFY `EncoderID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3002;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderDetailsID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1992;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `OrderID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16873;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `ProductID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6850;

--
-- AUTO_INCREMENT for table `suppliers_tbl`
--
ALTER TABLE `suppliers_tbl`
  MODIFY `RecordID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_productID` FOREIGN KEY (`ProductID`) REFERENCES `product_tbl` (`ProductID`);

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `fk_customerID` FOREIGN KEY (`CustomerID`) REFERENCES `customer_tbl` (`CustomerID`),
  ADD CONSTRAINT `fk_encoderID` FOREIGN KEY (`EncoderID`) REFERENCES `employee_tbl` (`EncoderID`),
  ADD CONSTRAINT `fk_orderdetailsID` FOREIGN KEY (`OrderDetailsID`) REFERENCES `order_details` (`OrderDetailsID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
