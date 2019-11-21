-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 04:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Shakibur', 'Rahman', 'shakibur@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `productid` int(20) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productcode` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `materials` varchar(100) NOT NULL,
  `productimage` varchar(300) NOT NULL,
  `productcatagory` varchar(100) NOT NULL,
  `productdetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`productid`, `productname`, `productcode`, `price`, `quantity`, `brand`, `materials`, `productimage`, `productcatagory`, `productdetails`) VALUES
(18, 'Shoe', '12', 4000, '10', 'Apex', 'Lather', 'ew.jpg', 'Mens Fashion', 'Pure Lather Shoe'),
(20, 'Iphone  7s', '#01i7', 25500, '50', 'Apple', 'Electronics', 'he.jpg', 'Electronics', 'Brand New');

-- --------------------------------------------------------

--
-- Table structure for table `cartproducts`
--

CREATE TABLE `cartproducts` (
  `id` int(20) NOT NULL,
  `customerid` int(20) NOT NULL,
  `productid` int(20) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productimage` varchar(300) NOT NULL,
  `productprice` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartproducts`
--

INSERT INTO `cartproducts` (`id`, `customerid`, `productid`, `productname`, `productimage`, `productprice`) VALUES
(8, 11, 12, 'dddd', 'dw.jpg', 4444),
(12, 1, 4, 'dddd', 'ew.jpg', 4444),
(15, 1, 13, 'sddddddd', 'fw.jpg', 3300),
(16, 1, 18, 'dddd', 'ew.jpg', 4444);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `firstname`, `lastname`, `email`, `mobile`, `password`, `address`) VALUES
(1, 'Raisul', 'Islam', 'raisulislamshovon@gmail.com', '01622700053', '12345678', 'KurilBissaroad,Kuratoli,Pocket Gate'),
(11, 'Rifat', 'Mahmud', 'rifat@gmail.com', '01944668741', '12345678', 'KurilBissaroad,Kuratoli,Pocket Gate, Dhaka'),
(12, 'Fahim', 'Shahriar', 'fahim@gmail.com', '0289764444', '12345678', 'KurilBissaroad,Kuratoli,Pocket Gate, Dhaka'),
(13, 'Mazba', 'Turza', 'mazba.turza@gmail.com', '01828188189', '12345678', 'West Nakhalpara, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `hotdealsproducts`
--

CREATE TABLE `hotdealsproducts` (
  `productid` int(20) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productcode` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `materials` varchar(100) NOT NULL,
  `productimage` varchar(300) NOT NULL,
  `productcatagory` varchar(100) NOT NULL,
  `productdetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotdealsproducts`
--

INSERT INTO `hotdealsproducts` (`productid`, `productname`, `productcode`, `price`, `quantity`, `brand`, `materials`, `productimage`, `productcatagory`, `productdetails`) VALUES
(9, 'Shoe', '12', 4000, '10', 'Apex', 'Lather', 'ew.jpg', 'Mens Fashion', 'Pure Lather Shoe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `cartproducts`
--
ALTER TABLE `cartproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `hotdealsproducts`
--
ALTER TABLE `hotdealsproducts`
  ADD PRIMARY KEY (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allproducts`
--
ALTER TABLE `allproducts`
  MODIFY `productid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cartproducts`
--
ALTER TABLE `cartproducts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hotdealsproducts`
--
ALTER TABLE `hotdealsproducts`
  MODIFY `productid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
