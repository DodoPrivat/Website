-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 07:50 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'admin', 'admin@apkibakery.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cid` int(11) NOT NULL,
  `CatName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cid`, `CatName`) VALUES
(2, 'Cakes'),
(3, 'Cup Cakes'),
(4, 'Deals'),
(5, 'Gifts'),
(6, 'Pastries'),
(7, 'Pizza'),
(8, 'Sandwiches'),
(9, 'Soft Drinks'),
(10, 'Nimcos'),
(11, 'Sweets'),
(12, 'Party Crockery');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Comment` varchar(25) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Id`, `email`, `Pid`, `Status`, `Comment`, `DateTime`) VALUES
(1, 'a@.com', 1, 'Approved', 'good', '2018-03-22 06:20:21'),
(2, 'a@gmail.com', 1, 'Pending', 'fdfdfdf', '2018-03-22 06:24:54'),
(3, 'a@gmail.com', 1, 'Pending', 'fdfdfdf', '2018-03-22 06:25:01'),
(4, 's@hjdl.com', 1, 'Pending', 'yghgf', '2018-03-22 06:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `cid` int(11) NOT NULL,
  `pgid` int(11) NOT NULL,
  `cmessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_image` varchar(50) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `business` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `uc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_image`, `cust_name`, `email`, `city`, `country`, `contact`, `address`, `type`, `business`, `password`, `confirmed`, `uc`) VALUES
(1, '', 'test', 'testingemail957@gmail.com', 'abc', 'abc', '123456789', '', 'customer', 'abc', 'MTIz', 1, 0),
(2, '', 'test', 'testingemail957@gmail.com', 'kdsdfjk', 'asdsdasd', '03343398827', '', 'customer', 'asddasd', 'cXdl', 0, 226124885),
(3, '', 'test', 'testingemail957@gmail.com', 'kdsdfjk', 'asdsdasd', '03343398827', '', 'customer', 'asddasd', 'cXdl', 0, 2060562715);

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `hid` int(11) NOT NULL,
  `pgid` int(11) NOT NULL,
  `hname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `img_name`, `date`) VALUES
(1, 'logo-1.jpg', '2018-03-25 14:30:00'),
(2, 'John_the_don_xsfia.png', '2018-03-25 15:04:31'),
(3, 'John_the_don_xsfia.png', '2018-03-25 15:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pgid` int(11) NOT NULL,
  `pgname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pgid`, `pgname`) VALUES
(3, 'about us'),
(4, 'product'),
(9, 'contact'),
(10, 'loginsignup'),
(12, 'menu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pid` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pid`, `Sid`, `Name`, `Image`, `Link`, `Description`, `DateTime`) VALUES
(1, 9, 'Aloo Samosa', 'download (1).jpg', 'Serve max 2 Person', 'www.canadianliving.com', '2018-03-28 17:38:14'),
(2, 11, 'Cake', 'test', 'www.test.com', 'CupCakes', '2018-03-26 10:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Sid` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `SCatName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Sid`, `Cid`, `SCatName`) VALUES
(2, 2, 'Chocolate'),
(9, 10, 'Samosa\'s'),
(11, 2, 'Chocolate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Gender` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `address`, `contact`, `password`, `confirmed`, `date`, `Gender`) VALUES
(1, 'abc', 'abc@gmail.com', 'gijhhjgkhk', '123abc', '123', 1, '2018-03-28 17:46:14', 'male'),
(3, 'gdggfggf', 'w@gmail.com', 'gttut0', '1235485', 'gttut0', 0, '2018-03-26 10:26:09', 'male'),
(4, 'asdas', 'asddas@gmail.com', 'asdasd', '42', 'asdasd', 0, '2018-03-26 10:26:01', 'female'),
(5, 'sdasd', 'abc@gmail.com', '2123', '23123', 'ef9hjhjj', 0, '2018-03-26 10:25:55', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vid` int(50) NOT NULL,
  `bakeyname` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `venname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vid`, `bakeyname`, `image`, `contact`, `email`, `addr`, `venname`, `password`, `date`) VALUES
(1, 'ddf', 'bg.jpg', '', '', '', 'aa', 'fdfgfgf', '2018-03-22 05:49:30'),
(2, 'ddf', 'CLIPART_OF_10868_SM_2.jpg', '', '', '', 'asddsda', '9406539a103', '2018-03-22 05:49:17'),
(3, 'erer', 'Chota-Bheem-Drawing.jpg', 'wer', 'abc@gmail.com', 'sdff', 'sdffsd', 'd9729feb74', '2018-03-22 05:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `ven_id` int(5) NOT NULL,
  `ven_name` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bakery_name` varchar(255) NOT NULL,
  `logo_image` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contry` varchar(255) NOT NULL,
  `status` varchar(500) NOT NULL,
  `admin_id` varchar(500) NOT NULL,
  `uc` int(255) NOT NULL,
  `confirm_code` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`ven_id`, `ven_name`, `password`, `bakery_name`, `logo_image`, `email`, `address`, `phone`, `city`, `contry`, `status`, `admin_id`, `uc`, `confirm_code`) VALUES
(17, 'adc', 'asd', 'ad', 'vendor_logo/9e159a43d7dd4588b7f4bd985efbb5f2Chaiwala.jpg', 'a@abc.com', 'as', 'sa', '', '', '0', '0', 0, 1409191136);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PId` (`Pid`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pgid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `Sid` (`Sid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Sid`),
  ADD KEY `Cid` (`Cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`ven_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `ven_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`Pid`) REFERENCES `products` (`Pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`pgid`) REFERENCES `pages` (`pgid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `headings`
--
ALTER TABLE `headings`
  ADD CONSTRAINT `headings_ibfk_1` FOREIGN KEY (`pgid`) REFERENCES `pages` (`pgid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `subcategory` (`Sid`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `category` (`Cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
