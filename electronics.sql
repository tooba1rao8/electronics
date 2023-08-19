-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 09:17 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electronics`
--
CREATE DATABASE IF NOT EXISTS `electronics` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `electronics`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'MOBILE PHONES'),
(2, 'TABLETS and ACCESSORIES'),
(3, 'TVS AUDIO and VIDEO'),
(4, 'WASHING MACHINES'),
(5, 'AIR CONDITIONS'),
(6, 'COMPUTING'),
(7, 'FANS');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `date`, `name`, `phone`, `address`, `email`, `pass`) VALUES
(7, '05-08-16', 'Ali', '457896562', 'Sargodha', 'ali@mail.com', '456'),
(8, '06-08-16', 'Hamza', '01458964755', 'Lahore', 'hamza@mali.com', '789'),
(10, '08-08-16', 'ali', '0124589', 'Sargodha', 'ali@mail.co', '123');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `date`, `name`, `email`, `msg`) VALUES
(2, '05-08-16', 'dddd', 'newsjobsalert@gmail.com', 'vdvdsv dsv ');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joindate` varchar(200) NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `desig` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnic` (`cnic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `joindate`, `cnic`, `name`, `contact`, `desig`, `salary`) VALUES
(1, '2016-03-06', '22323', 'fsfsfas', '4234324', 'gdsgsdfs', '4342323'),
(5, '2016-04-08', ' 222222', 'khan', ' 11111', ' employee', ' 10000'),
(6, '2016-04-28', '  0000', 'employee Khan', ' 11111', ' employee', ' 10000'),
(9, '2017-01-21', '  00001', '  john Cena', ' 11111', ' employee', ' 222222');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `edate` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`eid`, `edate`, `ename`, `description`, `amount`) VALUES
(1, '2017-01-21', '   telephone ', ' Electric Bill', ' 5000'),
(2, '2016-08-01', 'Charger', 'Charger for mobile', '500');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `entrydate` varchar(100) NOT NULL,
  `pcode` varchar(100) NOT NULL,
  `pcompany` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `purprice` varchar(100) NOT NULL,
  `saleprice` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `entrydate`, `pcode`, `pcompany`, `pname`, `purprice`, `saleprice`, `image`) VALUES
(1, '2016-08-08', '   40100', 'FANS', 'GFC Fan', '   10000', '    18,000', 'lahoreblackmodel.png'),
(2, '2016-04-06', '401000', 'FANS', 'Fan', '10000', '18,000', '72b70796-1430-40b6-8ba3-a15692555376.jpg'),
(3, '2016-04-06', '4010000', 'FANS', 'Fan', '10000', '22,000', 'Fan.png'),
(4, '2016-04-06', '401007', 'FANS', 'Fan', '10000', '25,000', 'desktop-usb-fan.jpg'),
(5, '2016-04-06', '401004', 'FANS', 'Fan', '12000', '15,000', 'pedestalFans.jpg'),
(6, '2016-04-06', '401001', 'WASHING MACHINES', 'Washing Machine', '25000', '35,000', '9785-5017133.jpg'),
(7, '2016-04-06', '401002', 'WASHING MACHINES', 'Washing Machine', '25000', '38,000', '60-1086__39653_zoom.jpg'),
(8, '2016-04-06', '4010023', 'WASHING MACHINES', 'Washing Machine', '25000', '37,000', 'Nelson-Enterprises-Washing-Machine-on-Rent-in-Kalewadi-Pune-YZ1SORYSOYA72CH4CMN8-06-21-2015-1423.jpg'),
(9, '2016-04-06', '4010012', 'WASHING MACHINES', 'Washing Machine', '10000', '12,000', 'washing_machine.jpg'),
(10, '2016-04-06', '4010011', 'MOBILE PHONES', 'Mobile', '10000', '15,000', 'Samsung-Galaxy-J2.jpg'),
(11, '2016-04-06', '30100', 'AIR CONDITIONS', 'A.C', '25000', '40,000', 'air-conditioner.jpg'),
(12, '2016-04-06', '40100555', 'AIR CONDITIONS', 'A.C', '25000', '40,000', 'air_conditioner.jpg'),
(13, '2016-04-06', '40100111', 'AIR CONDITIONS', 'A.C', '25000', '42,000', 'friedrich-kuhl-air-conditioner.jpg'),
(14, '2016-04-06', '4010044', 'AIR CONDITIONS', 'A.C', '50000', '70,000', 'window-air-conditioner.jpg'),
(15, '2016-04-06', '44100', 'MOBILE PHONES', 'Mobile', '10000', '15,000', 'samsung-galaxy-j2-3.jpg'),
(16, '2016-04-06', '40100444', 'MOBILE PHONES', 'Mobile', '10000', '18,000', 'Samsung-Galaxy-J2-624x357.jpg'),
(17, '2016-04-17', '    401001111', 'MOBILE PHONES', 'Mobile', '10000', '12,000', 'vncentral_Galaxy-J2-len-ke-tai-an-do.jpg'),
(19, '2016-08-02', ' 40100', 'MOBILE PHONES', ' LG G4', ' 10000', ' 18,000', 'lg-1.png'),
(20, '2016-08-02', '45785', 'TVS AUDIO and VIDEO', 'Samsung 55 Inch', '15000', '20000', 'tv1.jpg'),
(21, '2016-08-03', '41100', 'TVS AUDIO and VIDEO', 'Eco Star CX-32U557', '10000', '15000', 'tv2.jpg'),
(22, '2016-08-06', '40U557 ', 'TVS AUDIO and VIDEO', 'Eco Star CX-40U557 ', '15000', '20000', 'tv3.jpg'),
(23, '2016-08-01', '015488', 'TABLETS and ACCESSORIES', 'Huawei Mediapad 10 Link', '30000', '35000', 'huawei-2227-1488645-1-zoom.jpg'),
(24, '2016-08-02', '245566', 'TABLETS and ACCESSORIES', ' HP HP Slate 7', '15000', '25000', 'hp-3736-8789545-1-product.jpg'),
(25, '2016-08-01', '1020', 'COMPUTING', 'HP EliteBook Folio', '42,800', '52,800', 'HP EliteBook Folio.jpg'),
(26, '2017-01-21', '   820 G2', 'TABLETS and ACCESSORIES', '   HP EliteBook 820 G2', '   52,000', '   62,000', 'hp-2174-9771336-2-zoom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `pcompany` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `sprice` varchar(100) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `img` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `pcode`, `pcompany`, `pname`, `pprice`, `sprice`, `cusname`, `email`, `phone`, `address`, `img`, `status`) VALUES
(17, '26', 'COMPUTING', ' HP EliteBook 820 G2', ' 52,000', ' 62000', 'Ali', 'ali@mail.com', '457896562', 'Sargodha', 'hp-2174-9771336-2-zoom.jpg', 'pending'),
(18, '22', 'TVS AUDIO and VIDEO', 'Eco Star CX-40U557 ', '15000', '20000', 'Ali', 'ali@mail.com', '457896562', 'Sargodha', 'tv3.jpg', 'pending'),
(19, '20', 'TVS AUDIO and VIDEO', 'Samsung 55 Inch', '15000', '20000', 'Ali', 'ali@mail.com', '457896562', 'Sargodha', 'tv1.jpg', 'recieved'),
(20, '17', 'MOBILE PHONES', 'Mobile', '10000', '12000', 'Hamza', 'hamza@mali.com', '01458964755', 'Lahore', 'vncentral_Galaxy-J2-len-ke-tai-an-do.jpg', 'recieved'),
(21, '23', 'TABLETS and ACCESSORIES', 'Huawei Mediapad 10 Link', '30000', '35000', 'Hamza', 'hamza@mali.com', '01458964755', 'Lahore', 'huawei-2227-1488645-1-zoom.jpg', 'pending'),
(22, '26', 'COMPUTING', ' HP EliteBook 820 G2', ' 52,000', ' 62,000', 'ali', 'ali@mail.co', '0124589', 'Sargodha', 'hp-2174-9771336-2-zoom.jpg', 'recieved'),
(23, '24', 'TABLETS and ACCESSORIES', ' HP HP Slate 7', '15000', '25000', 'Ali', 'ali@mail.com', '457896562', 'Sargodha', 'hp-3736-8789545-1-product.jpg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
