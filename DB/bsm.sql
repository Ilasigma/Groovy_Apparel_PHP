-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2020 at 10:38 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-4+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `AddressID` int(11) NOT NULL,
  `UserAddress` varchar(100) NOT NULL,
  `UserCity` varchar(30) NOT NULL,
  `UserState` varchar(30) NOT NULL,
  `UserCountry` varchar(30) NOT NULL,
  `UserZip` varchar(20) NOT NULL,
  `UserPhone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`AddressID`, `UserAddress`, `UserCity`, `UserState`, `UserCountry`, `UserZip`, `UserPhone`) VALUES
(2, 'Ranip,New Ranip,Ahmedabad', '', 'Gujarat', 'India', '380039', '079-1124675'),
(4, 'vadaj', 'ahmedabad', 'gujarat', 'india', '380098', '079-223344');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email_id`) VALUES
(6, '123213233ilavati@gmail.com'),
(398, 'etstst@gmail.com'),
(7, 'ila@gmail.com'),
(1, 'ilavati@gmail.com'),
(405, 'ilavati@mailinator.com'),
(408, 'ilavatiunittest@mailinator.com'),
(404, 'ilsavati@yahoo.com'),
(8, 'ilu@gmail.com'),
(14, 'ishu@gmail.com'),
(395, 'ishu@yahoo.com'),
(399, 'menns@gmail.co'),
(402, 'sdfdsff@gmail.com'),
(397, 'tetstststs@gmail.com'),
(403, 'women@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `optiongroups`
--

CREATE TABLE `optiongroups` (
  `OptionGroupID` int(11) NOT NULL,
  `OptionGroupName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `optiongroups`
--

INSERT INTO `optiongroups` (`OptionGroupID`, `OptionGroupName`) VALUES
(1, 'color'),
(2, 'size');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `OptionID` int(11) NOT NULL,
  `OptionGroupID` int(11) DEFAULT NULL,
  `OptionName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`OptionID`, `OptionGroupID`, `OptionName`) VALUES
(1, 1, 'red'),
(2, 1, 'blue'),
(3, 1, 'green'),
(4, 2, 'S'),
(5, 2, 'M'),
(6, 2, 'L'),
(7, 2, 'XL'),
(8, 2, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `DetailID` int(11) NOT NULL,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` float NOT NULL,
  `OrderShipName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress2` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderCity` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderState` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderZip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderCountry` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderPhone` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderFax` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderTax` float NOT NULL,
  `OrderEmail` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) COLLATE latin1_german2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Running'),
(2, 'Walking'),
(3, 'HIking'),
(4, 'Track and Trail'),
(5, 'Short Sleave'),
(6, 'Long Sleave');

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--

CREATE TABLE `productoptions` (
  `ProductOptionID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `OptionID` int(10) UNSIGNED NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `productoptions`
--

INSERT INTO `productoptions` (`ProductOptionID`, `ProductID`, `OptionID`, `OptionPriceIncrement`, `OptionGroupID`) VALUES
(1, 1, 1, 0, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 4, 0, 2),
(5, 1, 5, 0, 2),
(6, 1, 6, 0, 2),
(7, 1, 7, 2, 2),
(8, 1, 8, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(12) NOT NULL,
  `ProductSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `ProductName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductCartDesc` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `ProductShortDesc` varchar(1000) COLLATE latin1_german2_ci NOT NULL,
  `ProductLongDesc` text COLLATE latin1_german2_ci NOT NULL,
  `ProductThumb` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductImage` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `ProductUnlimited` tinyint(1) DEFAULT '1',
  `ProductLocation` varchar(250) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductSKU`, `ProductName`, `ProductPrice`, `ProductWeight`, `ProductCartDesc`, `ProductShortDesc`, `ProductLongDesc`, `ProductThumb`, `ProductImage`, `ProductCategoryID`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `ProductUnlimited`, `ProductLocation`) VALUES
(1, '000-0001', 'Cotton T-Shirt', 9.99, 3, 'Light Cotton T-Shirt', 'A light cotton T-Shirt made with 100% real cotton.', 'A light cotton T-Shirt made with 100% real cotton.\r\n\r\nMade right here in the USA for over 15 years, this t-shirt is lightweight and durable.', '', '', 5, '2013-06-13 01:00:50', 100, 1, 0, NULL),
(2, '000-0004', 'Los Angeles', 79.9, 8, 'Track and Trail', 'A rugged track and trail athletic shoe', 'A rugged track and trail athletic shoe', '', '', 4, '2013-07-25 19:04:36', NULL, 0, 1, NULL),
(991, '000-0002', 'Pink Leather Jacket', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 11:47:31', 50, 1, 1, 'NULL'),
(992, '000-0006', 'Black Leather Jacket', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:21:01', 50, 1, 1, 'NULL'),
(993, '000-0009', 'Red Leather Jacket', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:22:25', 50, 1, 1, 'NULL'),
(994, '000-0003', 'White Leather Jacket', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:22:25', 50, 1, 1, 'NULL'),
(995, '000-0008', 'Blue Leather Jacket', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:22:25', 50, 1, 1, 'NULL'),
(996, '000-0005', 'Grey Leather Jacket', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:22:25', 50, 1, 1, 'NULL'),
(997, '000-0007', 'Cyan Leather Jacket', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:22:25', 50, 1, 1, 'NULL'),
(998, '000-00010', 'Black Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:29:19', 50, 1, 1, 'NULL'),
(999, '000-00011', 'Black Leather Sweater', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:29:19', 50, 1, 1, 'NULL'),
(1000, '000-00012', 'Black Leather Belt', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:29:19', 50, 1, 1, 'NULL'),
(1001, '000-00013', 'Black Leather Bag', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:29:19', 50, 1, 1, 'NULL'),
(1002, '000-00014', 'Black Leather Wallet', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:29:19', 50, 1, 1, 'NULL'),
(1003, '000-00015', 'Red Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:33:09', 50, 1, 1, 'NULL'),
(1004, '000-00016', 'Red Leather Sweater', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:33:09', 50, 1, 1, 'NULL'),
(1005, '000-00015', 'Yellow Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:34:47', 50, 1, 1, 'NULL'),
(1006, '000-00016', 'Pink Leather Belt', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:34:47', 50, 1, 1, 'NULL'),
(1007, '000-00015', 'Red Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:36:46', 50, 1, 1, 'NULL'),
(1008, '000-00016', 'Pink Leather Wallet', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:36:46', 50, 1, 1, 'NULL'),
(1009, '000-00017', 'Pink Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:39:54', 50, 1, 1, 'NULL'),
(1010, '000-00018', 'Pink Leather Sweater', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:39:54', 50, 1, 1, 'NULL'),
(1011, '000-00019', 'Red Leather Belt', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:39:54', 50, 1, 1, 'NULL'),
(1012, '000-00020', 'Red Leather Bag', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:39:54', 50, 1, 1, 'NULL'),
(1013, '000-00021', 'Red Leather Wallet', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/wallet.jpg', 'images/s1.jpg', 3, '2020-11-04 12:39:54', 50, 1, 1, 'NULL'),
(1014, '000-00022', 'White Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:41:26', 50, 1, 1, 'NULL'),
(1015, '000-00023', 'White Leather Sweater', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:41:26', 50, 1, 1, 'NULL'),
(1016, '000-00024', 'White Leather Belt', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:41:26', 50, 1, 1, 'NULL'),
(1017, '000-00025', 'White Leather Bag', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:41:26', 50, 1, 1, 'NULL'),
(1018, '000-00026', 'White Leather Wallet', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:41:26', 50, 1, 1, 'NULL'),
(1019, '000-00027', 'Grey Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:42:35', 50, 1, 1, 'NULL'),
(1020, '000-00028', 'Grey Leather Sweater', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:42:35', 50, 1, 1, 'NULL'),
(1021, '000-00029', 'Grey Leather Belt', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:42:35', 50, 1, 1, 'NULL'),
(1022, '000-00030', 'Grey Leather Bag', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:42:35', 50, 1, 1, 'NULL'),
(1023, '000-00031', 'Grey Leather Wallet', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:42:35', 50, 1, 1, 'NULL'),
(1024, '000-00032', 'Blue Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:44:17', 50, 1, 1, 'NULL'),
(1025, '000-00033', 'Blue Leather Sweater', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:44:17', 50, 1, 1, 'NULL'),
(1026, '000-00034', 'Blue Leather Belt', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:44:17', 50, 1, 1, 'NULL'),
(1027, '000-00035', 'Blue Leather Bag', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:44:17', 50, 1, 1, 'NULL'),
(1028, '000-00036', 'Blue Leather Wallet', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:44:17', 50, 1, 1, 'NULL'),
(1029, '000-00037', 'Cyan Leather Shoes', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:45:27', 50, 1, 1, 'NULL'),
(1030, '000-00038', 'Cyan Leather Sweater', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:45:27', 50, 1, 1, 'NULL'),
(1031, '000-00039', 'Cyan Leather Belt', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:45:27', 50, 1, 1, 'NULL'),
(1032, '000-00040', 'Cyan Leather Bag', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/s1.jpg', 'images/s1.jpg', 3, '2020-11-04 12:45:27', 50, 1, 1, 'NULL'),
(1033, '000-00041', 'Cyan Leather Wallet', 67.5, 5, 'Leather Jacket', 'smooth leather jacket', 'leather jacket with a smooth and good jacket by quality.', 'images/1-back.jpg', 'images/s1.jpg', 3, '2020-11-04 12:45:27', 50, 1, 1, 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `Document` varchar(500) COLLATE latin1_german2_ci NOT NULL,
  `UserFirstName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserLastName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCity` varchar(90) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserState` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserZip` varchar(12) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserEmailVerified` tinyint(1) DEFAULT '0',
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserVerificationCode` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserIP` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhone` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFax` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCountry` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress2` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `Document`, `UserFirstName`, `UserLastName`, `UserCity`, `UserState`, `UserZip`, `UserEmailVerified`, `UserRegistrationDate`, `UserVerificationCode`, `UserIP`, `UserPhone`, `UserFax`, `UserCountry`, `UserAddress`, `UserAddress2`) VALUES
(5, 'ila@mailinator.com', '202cb962ac59075b964b07152d234b70', '', 'Ila', 'mak', NULL, NULL, NULL, 0, '2020-11-13 15:45:32', NULL, NULL, '1234512345', NULL, NULL, NULL, NULL),
(10, 'ilavati@mailinator.com', '202cb962ac59075b964b07152d234b70', '', 'Ila', 'Makwana', NULL, NULL, NULL, 0, '2020-11-13 16:08:44', NULL, NULL, '8511230337', NULL, NULL, NULL, NULL),
(11, 'ilavatiunittest@mailinator.com', '202cb962ac59075b964b07152d234b70', '', 'Ila', 'mak', NULL, NULL, NULL, 0, '2020-11-13 17:02:49', NULL, NULL, '123456789', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`AddressID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `optiongroups`
--
ALTER TABLE `optiongroups`
  ADD PRIMARY KEY (`OptionGroupID`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`OptionID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`DetailID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`ProductOptionID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `AddressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;
--
-- AUTO_INCREMENT for table `optiongroups`
--
ALTER TABLE `optiongroups`
  MODIFY `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `OptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `ProductOptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1034;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
